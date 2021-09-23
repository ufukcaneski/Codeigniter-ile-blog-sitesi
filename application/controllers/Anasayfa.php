<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anasayfa extends CI_Controller {

	function __construct()    
		{
		parent::__construct();
		$bakim = $this->vt->cek('siteayarlari','1');
		if($bakim->bakim == 0) {
			
		} elseif ($bakim->bakim == 1) {
			$this->load->view('bakim');
		}
		}


	public function index()
	{
		$baslik = 'Kişisel Web Bloğu';
       $data['baslikcek'] = $baslik;
		$bilgi = $this->vt->listelelimit();
		$data['bilgi'] = $bilgi;

		
		
		$this->load->view('front/anasayfa',$data);
	}

	public function projects()
	{
		$baslik = 'Projelerim';
       $data['baslikcek'] = $baslik;
		$this->load->view('front/projects',$data);
		
	}

	public function blog()
	{
		/* $sonyazi = $this->vt->sonyazi('1');
        $data['sonyazi'] = $sonyazi; */
		$baslik = 'Blog';
       $data['baslikcek'] = $baslik;
		$kategoriler = kategoriliste();
		$data['kategoriler'] = $kategoriler;
		
		$bilgi = $this->vt->haberlistele();
		$data['bilgi'] = $bilgi;
		



		$this->load->view('front/blog',$data);
		
	}
	public function blogdetay($link)
	{
       $data['baslikcek'] = $link;
		$blogdetay = $this->vt->blogdetay($link);
		$data['bilgi'] = $blogdetay;
		$listele = $this->vt->kategorilistele2($blogdetay->katsef);
		$data['listele'] = $listele;
		



		
		// Önceki - Sonraki Başlangıç
		$oncekiyazi = $this->vt->onceki($blogdetay->id);
		$data['onceki'] = $oncekiyazi;

		$oncekiyazi = $this->vt->sonraki($blogdetay->id);
		$data['sonraki'] = $oncekiyazi;
		// Önceki - Sonraki Bitiş
			//echo show_404();
			
			$this->load->view('front/blog-detay',$data);
		
		
	}

	public function kategoriler($id)
	{
		$data['baslikcek'] = $id;
		$kategoriler = kategoriliste();
		$data['kategoriler'] = $kategoriler;

		$bilgi = $this->vt->kategorilistele($id);
		$data['bilgi'] = $bilgi;
		$kategori404 = $this->vt->kategori404($id);
		$kategori404katsef = $kategori404->sef;
		$this->db->trans_off();

		if ($bilgi || $kategori404katsef) {
			$this->load->view('front/kategoriler',$data);
		} else {
			 
			
			redirect('404');
			
		}

		
	}


	

	public function resume()
	{
		$baslik = 'CV';
       $data['baslikcek'] = $baslik;
		$this->load->view('front/resume',$data);
		
	}

	public function contact()
	{
		$baslik = 'İletişim';
       $data['baslikcek'] = $baslik;
		$this->load->view('front/contact', $data);
		
	}

	public function mesajgonder()
	{

		$captcha_response = trim($this->input->post('g-recaptcha-response'));

		if ($captcha_response =! '') {
			$keySecret = '6LeVNyMcAAAAALMeRipmU2dFdSU_rFZEurkimMDt';

			$check = array(
				'secret' => $keySecret,
				'response' =>$this->input->post('g-recaptcha-response')
			);

			$startProcess = curl_init();

			curl_setopt($startProcess, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
			curl_setopt($startProcess, CURLOPT_POST, true);
			curl_setopt($startProcess, CURLOPT_POSTFIELDS, http_build_query($check));
			curl_setopt($startProcess, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($startProcess, CURLOPT_RETURNTRANSFER, true);

			$receiveData = curl_exec($startProcess);

			$finalResponse = json_decode($receiveData, true);

			if ($finalResponse['score'] >= 0.9) {

				$data = array(
					'mesajgonderen'   => $mesajgonderen  = $this->input->post('isim',true),
					'mesajmail'       => $mesajmail      = $this->input->post('mail',true),
					'mesajaciklama'   => $konu           = $this->input->post('mesaj',true),
					'ip'              => $ip             = $this->input->ip_address('ip'),
					'mesajtarih'      => $tarih          = date('d.m.Y')
				);
				$sonuc = $this->vt->mesajgonder($data);

				$this->session->set_flashdata('bilgi','<div class="alert alert-primary alert-dismissible d-flex">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<h4 class="col-md-2"><i class="icon far fa-envelope"></i> </h4>
				<div class="col-md-10 d-flex justify-content-center">
				Mesaj Başarılı Bir Şekilde Gönderildi!
				</div>
				
			  </div>');
				redirect('contact');
			}else {
				$this->session->set_flashdata('bilgi','<div class="alert alert-danger alert-dismissible d-flex">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<h4 class="col-md-2"><i class="icon far fa-envelope"></i> </h4>
				<div class="col-md-10 d-flex justify-content-center">
				Mesaj gönderilirken hata oluştu. Lütfen daha sonra tekrar deneyiniz!
				</div>
				
			  </div>');
				redirect('contact');
				
				
			}


		} else {
			$this->session->set_flashdata('bilgi','<div class="alert alert-danger alert-dismissible d-flex">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<h4 class="col-md-2"><i class="icon far fa-envelope"></i> </h4>
				<div class="col-md-8 d-flex justify-content-center">
				Mesaj gönderilirken hata oluştu. Lütfen daha sonra tekrar deneyiniz!
				</div>
				
			  </div>');
				redirect('contact');
			
		
			
		}
		
	}

	public function notfound()
	{
		$baslik = 'Aradığınız Sayfa Bulunamadı';
       $data['baslikcek'] = $baslik;
	   
		$this->load->view('front/404',$data);
	}







	




}