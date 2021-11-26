<?php

class Booking extends CI_Controller
{

	public function __construct(){
		parent::__construct();

		if($this->session->userdata('role_id') != '2'
		){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  Silahkan Login Terlebih Dahulu  !!!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
			redirect('auth/login');
		}
	}

	public function tambah_booking($id)
	{
		$data['detail'] = $this->villa_model->ambil_id_villa($id);
		$this->load->view('templates_customer/tampilan');
		$this->load->view('customer/tambah_booking',$data);
		$this->load->view('templates_customer/footer');
	}

	public function tambah_booking_aksi()
	{
		$id_customer		 		 = $this->session->userdata('id_customer');
		$id_villa 			 		 = $this->input->post('id_villa');
		$tanggal_sewa 		 		 = $this->input->post('tanggal_sewa');
		$tanggal_selesai 			 = $this->input->post('tanggal_selesai');
		$harga 			 			 = $this->input->post('harga');

		$data = array(
			'id_customer' 			 => $id_customer,
			'id_villa' 				 => $id_villa,
			'tanggal_sewa' 			 => $tanggal_sewa,
			'tanggal_selesai' 		 => $tanggal_selesai,
			'harga' 				 => $harga,
			'tanggal_penselesaian'	 => '-',
			'status_penselesaian'	 => 'Belum Berakhir',
			'status_sewa'			 => 'Belum Selesai'

		);

		$this->villa_model->insert_data($data,'transaksi');

		$status = array(
			'status' => '0'

		);

		$id = array(
			'id_villa' =>$id_villa

		);

		$this->villa_model->update_data('villa',$status,$id);
		$this->session->set_flashdata('pesan','<div class="contact-number text-right text-secondary">
				  <strong class="text-success">Booking Berhasil Silahkan Ke Menu Transaksi Untuk Melakukan Konfirmasi</strong>
				</div>');
			redirect('customer/data_villa');
	}
}

  ?>