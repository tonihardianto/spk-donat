<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_dataproses extends CI_Model {

    function getDataset() {
        return $this->db->query("SELECT * FROM tb_dataset order by tanggal desc");
    }

    function insertDataset($tanggal,$permintaan,$persediaan,$produksi){
        return $this->db->query("insert into tb_dataset (tanggal,permintaan,persediaan,produksi) values('$tanggal','$permintaan','$persediaan','$produksi') ");
    }
//
    function getMaxPermintaan(){ //ambil data selama 30 hari terahir
        return $this->db->query("select max(permintaan) as a from tb_dataset WHERE id>=(SELECT MIN(id) FROM tb_dataset) AND id<=(SELECT MAX(id) FROM tb_dataset) ORDER BY tanggal DESC LIMIT 30");
    }
    function getMinPermintaan(){ //ambil data selama 30 hari terahir
        return $this->db->query("select min(permintaan) as a from tb_dataset WHERE id>=(SELECT MIN(id) FROM tb_dataset) AND id<=(SELECT MAX(id) FROM tb_dataset) ORDER BY tanggal DESC LIMIT 30");
    }

    function getMaxPersediaan(){ //ambil data selama 30 hari terahir
        return $this->db->query("select max(persediaan) as a from tb_dataset WHERE id>=(SELECT MIN(id) FROM tb_dataset) AND id<=(SELECT MAX(id) FROM tb_dataset) ORDER BY tanggal DESC LIMIT 30");
    }

    function getMinPersediaan(){ //ambil data selama 30 hari terahir
        return $this->db->query("select min(persediaan) as a from tb_dataset WHERE id>=(SELECT MIN(id) FROM tb_dataset) AND id<=(SELECT MAX(id) FROM tb_dataset) ORDER BY tanggal DESC LIMIT 30");
    }

    function getMaxProduksi(){ //ambil data selama 30 hari terahir
        return $this->db->query("select max(produksi) as a from tb_dataset WHERE id>=(SELECT MIN(id) FROM tb_dataset) AND id<=(SELECT MAX(id) FROM tb_dataset) ORDER BY tanggal DESC LIMIT 30");
    }

    // where id>='1' and id<='30'
    function getMinProduksi(){
        return $this->db->query("select min(produksi) as a from tb_dataset WHERE id>=(SELECT MIN(id) FROM tb_dataset) AND id<=(SELECT MAX(id) FROM tb_dataset) ORDER BY tanggal DESC LIMIT 30");
    }

    function insertPrediksi($tanggal,$permintaan,$persediaan,$produksi,$adonan,$user_id,$created_at){
        $res = $this->db->query("insert into tb_prediksi (tanggal,permintaan,persediaan,produksi,adonan,user_id,created_at) values('$tanggal','$permintaan','$persediaan','$produksi','$adonan','$user_id','$created_at')");
        return $res;
    }

    function getHasilPrediksi(){
        $res = $this->db->query("SELECT *, DATE_FORMAT(tanggal, '%d-%m-%Y') as tanggal FROM tb_prediksi");
        return $res;
    }

    function getGraph(){
        return $this->db->query("SELECT DISTINCT *, DATE_FORMAT(tanggal, '%d-%m-%Y') AS tanggal FROM tb_prediksi ORDER BY tanggal DESC LIMIT 30");
        
    }

    function getLine(){
        return $this->db->query("SELECT * from tb_prediksi");
    }

    function getTotalDataset(){
        $res = $this->db->get('tb_dataset');
        $total = $res->num_rows();
        return $total; 
    }

    function getTotalPermintaan(){
        $res = $this->db->query("select sum(permintaan) as total from tb_prediksi");
        $total = $res->result_array();
        return  $total;
    }

    function getTotalPersediaan(){
        $res = $this->db->query("select sum(persediaan) as total from tb_prediksi");
        $total = $res->result_array();
        return $total;
    }

    function getTotalProduksi(){
        $res = $this->db->query("select sum(produksi) as total from tb_prediksi");
        $total = $res->result_array();
        return $total;
    }

    function getPermintaan(){
        $res = $this->db->query("select * from tb_permintaan order by tanggal ASC");
        // $total = $res->result_array();
        return $res;
    }

    function getPermintaanToday(){
        return $this->db->query("SELECT *, SUM(permintaan) AS permintaan FROM tb_permintaan WHERE tanggal = CURDATE()");
    }

    function getTotalPermintaanUser(){
        return $this->db->query("select *, DATE_FORMAT(tanggal, '%d-%m-%Y') as tanggal from tb_permintaan order by tanggal ASC");;
    }

    function getPersediaan(){
        $res = $this->db->query("select * from tb_dataset where tanggal = SUBDATE(CURDATE(), 1)");
        // $total = $res->result_array();
        return $res;
    }
    

    function insertPermintaan($tanggal, $permintaan, $created_at, $user_id){
        $res = $this->db->query("INSERT INTO tb_permintaan (tanggal, permintaan, created_at, user_id) VALUES ('$tanggal', '$permintaan', '$created_at', '$user_id')");
        return $res;
    }

    function deletePermintaan($id){
        return $this->db->query("DELETE FROM tb_permintaan WHERE id = '$id'");
    }


}

/* End of file M_DataProses.php */


?>