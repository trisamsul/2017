<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelUser extends CI_Model {

	public $tableName;

	public function __construct(){
		parent::__construct();
		$this->tableName = "tb_users";
	}

	public function selectAll($from=0,$offset=0){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->limit($from,$offset);

		return $this->db->get();
	}
	public function selectById($id,$from=0,$offset=0){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->where('id',$id);
		$this->db->limit($from,$offset);

		return $this->db->get();
	}
	public function selectByUsername($id,$from=0,$offset=0){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->where('username',$id);
		$this->db->limit($from,$offset);

		return $this->db->get();
	}	

	public function checkLogin($username,$password){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->where('username',$username);
		$this->db->where('password',$password);

		return $this->db->get();
	}

	public function update($id,$data){
		$this->db->where('id',$id);
		$this->db->set($data);
		$this->db->update($this->tableName);
	}
}

?>
