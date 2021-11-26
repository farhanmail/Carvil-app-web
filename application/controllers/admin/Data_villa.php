<?php

class Data_villa extends CI_Controller{

	public function index()
	{
		$data['villa'] = $this->villa_model->get_data('villa')->result();
		$data['type'] = $this->villa_model->get_data('type')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_villa',$data);
		$this->load->view('templates_admin/footer');

	}

	public function tambah_villa()
	{
		$data['type'] = $this->villa_model->get_data('type')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/form_tambah_villa',$data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_villa_aksi()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE) {
			$this->tambah_villa();
		}else {
			$kode_type			= $this->input->post('kode_type');
			$merk				= $this->input->post('merk');
			$no_villa			= $this->input->post('no_villa');
			$warna				= $this->input->post('warna');
			$lokasi				= $this->input->post('lokasi');
			$status				= $this->input->post('status');
			$harga				= $this->input->post('harga');
			$fasilitas			= $this->input->post('fasilitas');
			$gambar				= $_FILES['gambar']['name'];
			if($gambar=''){}else {
				$config ['upload_path']		= './assets/upload';
				$config ['allowed_types']	= 'jpg|jpeg|png|tiff';

				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('gambar')){
					echo "Gambar Villa Gagal di Upload !!";
				}else {
					$gambar=$this->upload->data('file_name');
				}
			}

			$data = array(
				'kode_type'			=> $kode_type,
				'merk'				=> $merk,
				'no_villa'			=> $no_villa,
				'warna'				=> $warna,
				'lokasi'			=> $lokasi,
				'status'			=> $status,
				'harga'				=> $harga,
				'fasilitas'			=> $fasilitas,
				'gambar'			=> $gambar,
			);

			$this->villa_model->insert_data($data,'villa');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				  <strong>Data Villa Berhasil Di Input ^_^</strong>.
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('admin/data_villa');
		}
	}

	public function update_villa($id){
		$where = array('id_villa' => $id);
		$data['villa'] = $this->db->query("SELECT * FROM villa mb, type tp where mb.kode_type=tp.kode_type AND mb.id_villa='$id'")->result();
		$data['type'] = $this->villa_model->get_data('type')->result(); 

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/form_update_villa',$data);
		$this->load->view('templates_admin/footer');
	}

	public function update_villa_aksi()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE)
		{
			$this->update_villa();
		}else{
			$id 				= $this->input->post('id_villa');
			$kode_type			= $this->input->post('kode_type');
			$merk				= $this->input->post('merk');
			$no_villa			= $this->input->post('no_villa');
			$warna				= $this->input->post('warna');
			$lokasi				= $this->input->post('lokasi');
			$status				= $this->input->post('status');
			$harga				= $this->input->post('harga');
			$fasilitas			= $this->input->post('fasilitas');
			$gambar				= $_FILES['gambar']['name'];
			if($gambar) {
				$config ['upload_path']		= './assets/upload';
				$config ['allowed_types']	= 'jpg|jpeg|png|tiff';

				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('gambar')){
					echo "Gambar Villa Gagal di Upload !!";
				}else {
					$gambar=$this->upload->data('file_name');
				}
			}

			$data = array(
				'kode_type'			=> $kode_type,
				'merk'				=> $merk,
				'no_villa'			=> $no_villa,
				'warna'				=> $warna,
				'lokasi'			=> $lokasi,
				'status'			=> $status,
				'harga'				=> $harga,
				'fasilitas'			=> $fasilitas,
			);

			$where = array(
				'id_villa' => $id
			);

			$this->villa_model->update_data('villa',$data, $where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				  <strong>Data Villa Berhasil Di Update ^_^</strong>.
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('admin/data_villa');
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('kode_type','Kode type','required');
		$this->form_validation->set_rules('merk','Nama villa','required');
		$this->form_validation->set_rules('no_villa','No Villa','required');
		$this->form_validation->set_rules('warna','Warna','required');
		$this->form_validation->set_rules('lokasi','Lokasi','required');
		$this->form_validation->set_rules('status','Status','required');
		$this->form_validation->set_rules('harga','Harga','required');
		$this->form_validation->set_rules('fasilitas','Fasilitas','required');
		
	}

	public function detail_villa($id)
	{
		$data['detail'] = $this->villa_model->ambil_id_villa($id);
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/detail_villa',$data);
		$this->load->view('templates_admin/footer');

	}

	public function delete_villa($id){
		$where = array('id_villa' => $id);

			$this->villa_model->delete_data($where,'villa');
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  <strong>Data Villa Berhasil Di Hapus ^_^</strong>.
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('admin/data_villa');
	}
}

?>