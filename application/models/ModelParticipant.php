<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelParticipant extends CI_Model {

	private $tableName;

	public function __construct(){
		parent::__construct();
		$this->tableName = "participants";
	}

	public function selectAll($where=null,$from=0,$offset=0){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->limit($from,$offset);
		if($where!=null){
			$this->db->where('status',$where);
		}
		$this->db->order_by('status','asc');

		return $this->db->get();
	}
	public function selectById($id,$from=0,$offset=0){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->where('id',$id);
		$this->db->limit($from,$offset);

		return $this->db->get();
	}

	public function insertParticipant($data){
		$this->db->insert($this->tableName,$data);
	}

	public function update($id,$data){
		$this->db->where('id',$id);
		$this->db->set($data);
		$this->db->update($this->tableName);
	}

	public function delete($id){
		$this->db->where('id',$id);
		$this->db->delete($this->tableName);
	}


	// public function getAllData($value=0, $number){
	// 	return $query = $this->db->get('barang', $number, $value)->result();
	// }

	// public function jumlahData(){
	// 	return $this->db->get('barang')->num_rows();
	// }
}

?>
