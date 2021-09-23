<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Yonetim extends CI_Controller {

	

	
	public function index()
	{
		$giris = $this->session->userdata('giris');
		if ($giris) {
			redirect('yonetimpaneli');
		}
		$this->load->view('back/login');
	}

	public function login()
	{
		$mail = $this->input->post('mail');
		$sifre = $this->input->post('sifre');

		$kontrol = $this->vt->kontrol($mail,$sifre);

		if ($kontrol) {
			$this->session->set_userdata('giris',true);
			$this->session->set_userdata('info',$kontrol);
			redirect('yonetimpaneli');
		} else {
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<h6><i class="icon fas fa-ban"></i> Kullanıcı Adı veya Şifre Hatalı!</h6>
		  </div>');
			redirect('yonetim');
		}
	}

	public function anasayfa()
	{
		
		
	}

	



	
}
