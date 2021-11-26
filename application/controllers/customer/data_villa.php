<?php

class Data_villa extends CI_Controller{

	public function index()
	{
		$data['villa'] = $this->villa_model->get_data('villa')->result();
		$this->load->view('templates_customer/header');
		$this->load->view('customer/data_villa',$data);
		$this->load->view('templates_customer/footer');
	}	

	public function detail_villa($id)
	{
		$data['detail'] = $this->villa_model->ambil_id_villa($id);
		$this->load->view('templates_customer/tampilan');
		$this->load->view('customer/detail_villa',$data);
		$this->load->view('templates_customer/footer');
	}	
}

?>