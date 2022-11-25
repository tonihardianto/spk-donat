<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_report extends CI_Model {

    function getReport($awal, $akhir){
        $res = $this->db->query("SELECT date_format(tanggal, '%d %M %Y') as tanggal,permintaan,persediaan,produksi FROM tb_prediksi WHERE tanggal BETWEEN '$awal' AND '$akhir' ");
        return $res;
    }

    function getTotal($awal, $akhir){
        $res = $this->db->query("SELECT sum(permintaan) as permintaan, sum(persediaan) as persediaan, sum(produksi) as produksi FROM tb_prediksi WHERE tanggal BETWEEN '$awal' AND '$akhir' ");
        return $res;
    }

}

/* End of file M_report.php */


?>