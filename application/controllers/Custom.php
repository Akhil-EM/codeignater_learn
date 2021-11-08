<?php
  defined('BASEPATH') OR exit('No direct script access allowed');//to restrict direact access of folder
  class Custom extends CI_Controller{
   
    public function index(){
       $this -> load->view("custom-view");
    }
   
    public function test(){
      $this->load ->model("my_model");

      $firstName = $this ->my_model->first_name();
      // $lastName = $this ->my_model->last_name();
      echo "first name is".$firstName;
    }

    public function autendicate_user(){
      $this -> load -> model("authendication_from_google_model","g_auth");
      $authStatus = $this -> g_auth ->login_user();
      echo "Authendication Status is ".$authStatus;
    }
  }


?>