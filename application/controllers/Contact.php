<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
	}
	function index(){
		$data = $this->m_data->getAll('contact');
		echo json_encode($data);
	}
	function insert(){
		$salutation = $this->input->post('salutation');
		$first_name = $this->input->post('firstname');
		$lastname = $this->input->post('lastname');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$data = array('prefix' => $salutation, 'first_name' => $first_name, 'last_name' => $lastname, 'email' => $email, 'phone' => $phone
		);
		$this->m_data->insert('contact', $data);
		echo "success";
	}
	function update($id){
		$salutation = $this->input->post('salutation');
		$first_name = $this->input->post('firstname');
		$lastname = $this->input->post('lastname');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$data = array('prefix' => $salutation, 'first_name' => $first_name, 'last_name' => $lastname, 'email' => $email, 'phone' => $phone
		);
		$this->m_data->where('id', $id)->update('contact', $data);
		echo "success";
	}
	function delete($id){
		$this->m_data->where('id', $id)->delete('contact');
		echo "success";
	}
}
?>