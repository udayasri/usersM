<?php
class Newuser_model extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}
	
	function insertuser( $query, $params )
	{		
		$result = $this->db->query( $query, $params );
		if($result != false){
			return mysql_insert_id();
		}
		else{
			return false;
		}
	}	
	
	
	function insertvisibleusers( $query, $params )
	{		
		$result = $this->db->query( $query, $params );
		if($result != false)
		{
			//return true;
		}
		else{
			return false;
		}
	}	
}