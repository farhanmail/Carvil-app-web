<?php

class Transaksi extends CI_Controller{

	public function index()
	{
		$data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr, villa mb, customer cs WHERE tr.id_villa=mb.id_villa AND tr.id_customer=cs.id_customer")->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_transaksi',$data);
		$this->load->view('templates_admin/footer');
	}

	public function pembayaran($id)
	{
		$where = array('id_villa' => $id);
		$data['pembayaran'] = $this->db->query("SELECT * FROM transaksi WHERE id_villa='$id'")->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/konfirmasi_pembayaran',$data);
		$this->load->view('templates_admin/footer');
	}

	public function cek_pembayaran()
	{
		$id 					= $this->input->post('id_villa');
		$status_pembayaran		= $this->input->post('status_pembayaran');

		$data = array(
			'status_pembayaran'	=> $status_pembayaran,

		);

		$where = array(
			'id_villa' => $id

		);

		$this->villa_model->update_data('transaksi',$data,$where);
		redirect('admin/transaksi');
	}

	public function download_pembayaran($id)
	{
		$this->load->helper('download');
		$filePembayaran = $this->villa_model->downloadPembayaran($id);
		$file = 'assets/upload/'.$filePembayaran['bukti_pembayaran'];
		force_download($file, NULL);
	}

	public function transaksi_selesai($id)
	{
		$where = array('id_sewa' => $id);
		$data['transaksi'] = $this->db->query("SELECT * FROM transaksi WHERE id_sewa = '$id'")->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/transaksi_selesai',$data);
		$this->load->view('templates_admin/footer');
	}

	public function transaksi_selesai_aksi()
	{
		$id 							= $this->input->post('id_sewa');
		$tanggal_penselesaian 			= $this->input->post('tanggal_penselesaian');
		$status_sewa 					= $this->input->post('status_sewa');
		$status_penselesaian			= $this->input->post('status_penselesaian');

		$data = array(
			'tanggal_penselesaian' => $tanggal_penselesaian,
			'status_sewa'		   => $status_sewa,
			'status_penselesaian'  => $status_penselesaian

		);

		$where = array(
		'id_sewa' => $id

		);

		$this->villa_model->update_data('transaksi',$data,$where);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				  <strong>Transaksi Berhasil Di Update ^_^</strong>.
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
		redirect('admin/transaksi');
	}

	public function batal_transaksi($id)
	{
		$where = array('id_sewa' => $id);
		$data = $this->villa_model->get_where($where,'transaksi')->row();

		$where2 = array('id_villa' => $data->id_villa);

		$data2 = array('status' => '1');

		$this->villa_model->update_data('villa', $data2,$where2);
		$this->villa_model->delete_data($where,'transaksi');
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				  <strong>Transaksi Berhasil Di Batalkan !!!</strong>.
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
		redirect('admin/transaksi');
	}
}

  ?>