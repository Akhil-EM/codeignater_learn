<?php
  class Customer extends CI_Controller{

     public function index(){
       $this -> load -> model("customer_model");
       
      //  data object
       $data["users"] = $this -> customer_model -> get_users();
       $this-> load-> view("customer-view",$data);

     
      
       
     }

  }

?>