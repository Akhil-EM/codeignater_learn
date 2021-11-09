<?php

  class Customer_model extends CI_Model{
    function get_users(){
        $this -> load -> database();
        // $query = $this -> db ->query("SELECT * FROM users");
        // or another way of using this
        $query = $this -> db -> get("users");
        $query = $query -> result_array();
        //  result_array  convert object to array using php build in function
        
        return $query;
    }
  }
?>