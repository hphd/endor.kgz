<?php
class Validation_model extends CI_Model {

	public $add_validation=array(
		array(
			'field' => 'title',
			'label' => 'Макаланын аты',
			'rules' => 'required|min_length[5]|max_length[12]|trim',
		),
		array(
			'field' => 'text',
			'label' => 'Макаланын тексти',
			'rules' => 'required|max_length[3000]|trim',
		),
			array(
			'field' => 'date',
			'label' => 'Убакыты',
			'rules' => 'required|exact_length[10]|trim',
		),
	);
}