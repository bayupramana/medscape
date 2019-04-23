<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class m_medscape extends CI_Model {

    public function login_user($email, $password)
    {
      $this->db->where('email', $email);
  
      $result = $this->db->get('user');
      return $result->result_array();
    }
  
    public function register_user($table, $data)
    {
      $insert = $this->db->insert($table, $data);
      if ($insert) {
        return TRUE;
      } else {
        return FALSE;
      }
    }
}