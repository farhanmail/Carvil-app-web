<?php

class Hubungi_kami extends CI_Controller{

	public function index()
	{
		$data['hubungi'] = $this->hubungi_model->tampil_data('hubungi')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/hubungi_kami',$data);
		$this->load->view('templates_admin/footer');
	}

	public function kirim_email($id)
	{
		$where = array('id_hubungi' => $id);
		$data['hubungi'] = $this->hubungi_model->tampil_data('hubungi')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/form_kirim_email',$data);
		$this->load->view('templates_admin/footer');	
	}

	public function kirim_email_aksi()
	{
		$to_email			= $this->input->post('email');
		$subject			= $this->input->post('subject');
		$message			= $this->input->post('pesan');
		$nama				= $this->input->post('nama');
		
		$this->load->library('PHPMailer_load'); //Load Library PHPMailer
        $mail = $this->phpmailer_load->load(); // Mendefinisikan Variabel Mail
        $mail->isSMTP();  // Mengirim menggunakan protokol SMTP
        $mail->Host = 'smtp.gmail.com'; // Host dari server SMTP
        $mail->SMTPAuth = true; // Autentikasi SMTP
        $mail->Username = 'carvillbogor222@gmail.com';
        $mail->Password = 'carvill123';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->setFrom('noreply@kompikaleng.com', 'Undangan Acara'); // Sumber email
        $mail->addAddress($to_email,'Kompi Kaleng'); // Masukkan alamat email dari variabel $email
        $mail->Subject = $subject; // Subjek Email
        $mail->msgHtml("
            <h3>$subject</h3><hr>
                Kepada Yth. <br>
                $nama<br><br>
		");

		
 if (!$mail->send()) {
                    echo "Mailer Error: " . $mail->ErrorInfo;
                } else {


			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				  <strong>Pesan Terkirim</strong>.
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('admin/hubungi_kami');
                    //echo "Message sent!";
                } // Kirim email dengan cek kondisi
    }

    public function delete($id){
    $where = array('id_hubungi' => $id);

    $this->villa_model->delete_data($where,'hubungi');
	$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  <strong>Pesan Berhasil Di Hapus ^_^</strong>.
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('admin/hubungi_kami');
				
	}

 }
  ?>
