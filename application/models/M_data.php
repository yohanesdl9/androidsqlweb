<?php

class M_data extends CI_Model{
	function insert($table, $data){
		$this->db->insert($table, $data);
	}
	function where($column, $condition){
		$this->db->where($column, $condition);
		return $this;
	}
	function update($table, $data){
		$this->db->update($table, $data);
	}
	function delete($table){
		$this->db->delete($table);
	}
	function getAll($table){
		return $this->db->get($table)->result();
	}
	function get($table){
		return $this->db->get($table)->row();
	}
}
?>