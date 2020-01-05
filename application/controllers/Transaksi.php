<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;
class Transaksi extends Rest_controller{
    function __construct(){
        parent::__construct();
        $this->load->model('restoku');
    }
    function index_get(){
        $id = $this->get('id');
        if ($id == '') {
            $hasil = $this->restoku->getData();
            $hasil2 = $this->restoku->getDataSemua();
        } else {
            $hasil = $this->restoku->getData($id);
            $hasil2 = $this->restoku->getDataSemua($id);
        }
        foreach($hasil as $hasil){
            $hasil[] = $hasil;   
        }
       
        if($hasil){
        $this->response([
                 'status'=> 'True',
                 'message'=> 'success',
                //  'data' => [ 
                    'no_nota' => $hasil["no_nota"],
                    'tanggal'=>$hasil["tanggal"],
                    'id' =>$hasil['id'],
                    'detail'=> $hasil2                                
                            // ]
                ], REST_Controller::HTTP_OK);
        }else{
            // Set the response and exit
            $this->response([
                'status' => 'False',
                'message' => 'No users were found'
            ]); 
        }
    }
}
?>