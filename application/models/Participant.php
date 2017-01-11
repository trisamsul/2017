<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Participant extends CI_Model {

	public $tableName;

	public function __construct(){
		parent::__construct();
		$this->tableName = "participants";
	}

	public function selectAll($from=0,$offset=0){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->limit($from,$offset);

		return $this->db->get();
	}
	public function selectById($id,$from=0,$offset=0){
		$this->db->select('*');
		$this->db->from($tableName);
		$this->db->where('id',$id);
		$this->db->limit($from,$offset);

		return $this->db->get();
	}

	public function insertParticipant($data){
		$this->db->insert($this->tableName,$data);
	}


	// public function getAllData($value=0, $number){
	// 	return $query = $this->db->get('barang', $number, $value)->result();
	// }

	// public function jumlahData(){
	// 	return $this->db->get('barang')->num_rows();
	// }
}

?>
