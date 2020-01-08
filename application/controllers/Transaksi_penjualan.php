<?php
class Transaksi_penjualan extends CI_Controller{
    function __construct(){
        parent::__construct();
    }

    function get($id){
        // echo "masok";
       //$id = $this->load->get('id');
       $idbr['hasi'] = ['id'=>$id
       ];
       $this->load->view('viewTransaksi',$idbr);
    }

    function rate()
    {
      $this->load->view('viewHalamanCustomer');
    }
}

?>
