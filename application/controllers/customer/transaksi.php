<?php

class Transaksi extends CI_Controller{
	public function index()
	{
		$customer = $this->session->userdata('id_customer');
		$data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr, villa mb, customer cs WHERE tr.id_villa=mb.id_villa AND tr.id_customer=cs.id_customer AND cs.id_customer='$customer' ORDER BY id_sewa DESC")->result();
		$this->load->view('templates_customer/tampilan');
		$this->load->view('customer/transaksi',$data);
		$this->load->view('templates_customer/footer');

	}

	public function pembayaran($id)
	{
		$data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr, villa mb, customer cs WHERE tr.id_villa=mb.id_villa AND tr.id_customer=cs.id_customer AND tr.id_sewa='$id' ORDER BY id_sewa DESC")->result();
		$this->load->view('templates_customer/tampilan');
		$this->load->view('customer/pembayaran',$data);
		$this->load->view('templates_customer/footer');
	}

	public function pembayaran_aksi()
	{
		$id 							= $this->input->post('id_villa');
		$bukti_pembayaran				= $_FILES['bukti_pembayaran']['name'];
			if($bukti_pembayaran) {
				$config ['upload_path']		= './assets/upload';
				$config ['allowed_types']	= 'pdf|jpg|jpeg|png|tiff';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('bukti_pembayaran')){
					$bukti_pembayaran=$this->upload->data('file_name');
					$this->db->set('bukti_pembayaran',$bukti_pembayaran);
				}else {
					echo $this->upload->display_errors();
				}
			}

			$data = array(
				'bukti_pembayaran' => $bukti_pembayaran,
			);

			$where = array(
				'id_villa' => $id
			);

			$this->villa_model->update_data('transaksi',$data, $where);
			$this->session->set_flashdata('pesan','<div class="contact-number text-right text-secondary">
				  <strong class="text-danger">Bukti Pembayaran Berhasil Di Upload Harap Menunggu Konfirmasi Dari Kami ^_^ </strong>
				</div>');
			redirect('customer/transaksi');
	}

	public function cetak_invoice($id)
	{
		$data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr, villa mb, customer cs WHERE tr.id_villa=mb.id_villa AND tr.id_customer=cs.id_customer AND tr.id_sewa='$id'")->result();
		$this->load->view('customer/cetak_invoice',$data);
	}

	public function batal_transaksi($id)
	{
		$where = array('id_sewa' => $id);
		$data = $this->villa_model->get_where($where,'transaksi')->row();

		$where2 = array('id_villa' => $data->id_villa);

		$data2 = array('status' => '1');

		$this->villa_model->update_data('villa', $data2,$where2);
		$this->villa_model->delete_data($where,'transaksi');
		$this->session->set_flashdata('pesan','<div class="contact-number text-right text-secondary">
				  <strong class="text-danger">Transaksi Berhasil Dibatalkan </strong>
				</div>');
		redirect('customer/transaksi');
	}
}

  ?>