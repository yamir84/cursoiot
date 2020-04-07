<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

   public function login($correo, $password){
      $this->db->where("user_email", $correo);
      $this->db->where("user_password", $password);
      $resultados = $this->db->get("user");

      if ($resultados->num_rows() > 0) {
         return $resultados->row();
      }
      else{
         return false;
      }
   }

}
