<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Get_model extends CI_Model {

	function main_menu(){
		$this->db->where('id_parent', 0);
		$this->db->order_by('sort','ASC');
		$query = $this->db->get('menu');
		return $query->result_array(); 
	}

	function main_menu_second(){
		$this->db->where('id_parent', 1);
		$query = $this->db->get('menu');
		return $query->result_array();
	}

	function directions($limit){
		$this->db->limit($limit);
		$query = $this->db->get('directions');
		return $query->result_array();
	}
	function in_direction($id){
		$query = $this->db->where('id', $id);
		$query = $this->db->get('directions');
		return $query->result_array();
	} 

	function news(){
		$this->db->order_by('id', 'ASC');
		$query= $this->db->get('news');
		return $query->result_array();
	}

	function gallery(){
		$this->db->order_by('id', 'ASC');
		$query= $this->db->get('gallery');
		return $query->result_array();
	}

	function er_edit($id=0, $categ=0){
		$this->db->where('id', $id);
		$query= $this->db->get($categ);
		return $query->result_array();
	}

	function m_news($limit){
		$this->db->limit($limit);
		$this->db->order_by('id', 'DESC');
		$query= $this->db->get('news');
		return $query->result_array();
	} 
	function in_news($id){
		$query = $this->db->where('id', $id);
		$query = $this->db->get('news');
		return $query->result_array();
	}
	function collective(){
		$query = $this->db->get('collective');
		return $query->result_array();
	}
	function er_video(){
		$query = $this->db->get('video');
		return $query->result_array();
	}
	function employee($id){
		$query = $this->db->where('id', $id);
		$query = $this->db->get('collective');
		return $query->result_array();
	}
	function video($limit){
		$this->db->limit($limit);
		$query = $this->db->get('video');
		return $query->result_array();
	}
	function main_video(){
		$query = $this->db->get('video');
		return $query->result_array();
	}
}
?>