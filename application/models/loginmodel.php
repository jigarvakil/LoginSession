<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class loginmodel extends CI_Model {

  public function __construct()
  {
	parent::__construct();
  $this->load->helper('url');
  $this->load->database();
  }

  public function checkData($tblname,$data){
    $this->db->where($data);
    $query = $this->db->get( $tblname );
    return $query->num_rows();
    
    
  }
}

/* End of file loginmodel.php */
?>
