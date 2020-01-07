<?php
class Kitchen extends CI_Controller{
    function __construct(){
        parent::__construct();

    }
    function index(){
        $this->load->view('viewKitchen');
    }
    function orderDetail(){
        $this->load->view('viewOrderDetail');
    }

}
?>