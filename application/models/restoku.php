<?php
class restoku extends CI_Model{

    function getData($id=null){
        if($id == null){
            return $this->db->select('no_nota,tanggal,id')->get('transaksi_penjualan')->result_array();             
        }else{
            return $this->db->select('no_nota,tanggal,id')
                            ->from('transaksi_penjualan')
                            ->where(['transaksi_penjualan.id'=>$id])
                            ->get()
                            ->result_array();
        }
    }
    function getDataSemua($id=null){
        if($id == null){
        return $this->db->select('id_menu,nama,harga,jumlah')
                        ->from('transaksi_penjualan_detail')
                        ->join('master_menu','master_menu.id=transaksi_penjualan_detail.id_menu')
                        ->join('transaksi_penjualan','transaksi_penjualan.id=transaksi_penjualan_detail.id_penjualan')
                        ->get()
                        ->result_array();
        }else{
         return $this->db->select('id_menu,nama,harga,jumlah')
                        ->from('transaksi_penjualan_detail')
                        ->join('master_menu','master_menu.id=transaksi_penjualan_detail.id_menu')
                        ->join('transaksi_penjualan','transaksi_penjualan.id=transaksi_penjualan_detail.id_penjualan')
                        ->where(['transaksi_penjualan.id'=>$id])
                        ->get()
                        ->result_array(); 
        }                
    }
}