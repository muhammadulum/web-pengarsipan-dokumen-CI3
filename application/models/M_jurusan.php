<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class M_jurusan extends CI_Model {
		public function getAll() 
		{
			return $this->db->get('tbl_departemen')->result();
		}
		
	
	}