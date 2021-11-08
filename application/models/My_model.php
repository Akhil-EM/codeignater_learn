<?php
  class My_model extends CI_Model{

    public function first_name(){
        $lastName = $this ->last_name();
        return "akhil".$lastName;
    }
    private function last_name(){
        
        return "E M";
    }


  }
?>