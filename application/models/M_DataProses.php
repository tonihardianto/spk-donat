<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_DataProses extends CI_Model {

    function getDataset() {
        return $this->db->query("SELECT *, date_format(tanggal,'%d-%m-%Y') as tanggal FROM tb_dataset ");
    }

    function insertDataset($tanggal,$permintaan,$persediaan,$produksi){
        return $this->db->query("insert into tb_dataset (tanggal,permintaan,persediaan,produksi) values('$tanggal','$permintaan','$persediaan','$produksi') ");
    }

    function getMaxPermintaan(){
        return $this->db->query("select max(permintaan) as a from tb_dataset where id>='1' and id<='30'");
    }
    function getMinPermintaan(){
        return $this->db->query("select min(permintaan) as a from tb_dataset where id>='1' and id<='30'");
    }

    function getMaxPersediaan(){
        return $this->db->query("select max(persediaan) as a from tb_dataset where id>='1' and id<='30'");
    }

    function getMinPersediaan(){
        return $this->db->query("select min(persediaan) as a from tb_dataset where id>='1' and id<='30'");
    }

    function getMaxProduksi(){
        return $this->db->query("select max(produksi) as a from tb_dataset where id>='1' and id<='30'");
    }

    function getMinProduksi(){
        return $this->db->query("select min(produksi) as a from tb_dataset where id>='1' and id<='30'");
    }

    function insertPrediksi($tanggal,$permintaan,$persediaan,$produksi,$adonan){
        $res = $this->db->query("insert into tb_prediksi (tanggal,permintaan,persediaan,produksi,adonan) values('$tanggal','$permintaan','$persediaan','$produksi','$adonan')");
        return $res;
    }

    function getHasilPrediksi(){
        $res = $this->db->query("SELECT *, DATE_FORMAT(tanggal, '%d-%m-%Y') as tanggal FROM tb_prediksi");
        return $res;
    }


}

/* End of file M_DataProses.php */


?>