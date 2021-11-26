<?php

class Dashboard extends CI_Controller{

	public function index()
	{
		$data['hubungi'] = $this->hubungi_model->tampil_data('hubungi')->result();
		$this->load->view('templates_customer/header');
		$this->load->view('customer/dashboard');
		$this->load->view('templates_customer/footer');
	}

	public function kirim_pesan()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE){
			$this->index();
		}else{
			$id						= $this->input->post('id_hubungi');
			$nama					= $this->input->post('nama');
			$email					= $this->input->post('email');
			$pesan					= $this->input->post('pesan');

			$data = array(
				'nama'				=> $nama,
				'email'				=> $email,
				'pesan'				=> $pesan,
			);

			$this->hubungi_model->insert_data($data,'hubungi');
			$this->session->set_flashdata('pesan','<div class="contact-number text-right text-secondary">
				  <strong class="text-danger">Pesan Berhasil Terkirim ^_^ </strong>
				</div>');
			redirect('customer/dashboard');
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('pesan','Pesan','required');
	}	
}

?>