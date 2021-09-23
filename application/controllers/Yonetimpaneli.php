<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Yonetimpaneli extends CI_Controller {

	

	public function __construct()
	{
		parent::__construct();
		{
			$this->giris();
		}
	}
	

	function giris()
	{
		$kontrol=$this->session->userdata('giris');
		if(!isset($kontrol) || ($kontrol != true)) 
		{
		 	 redirect('yonetim');
		}
    }

	
	public function index()
	{
		
		$this->load->view('back/anasayfa');
	}

	public function login()
	{
		$mail = $this->input->post('mail');
		$sifre = $this->input->post('sifre');

		$kontrol = $this->vt->kontrol($mail,$sifre);

		if ($kontrol) {
			$this->session->set_userdata('giris',true);
			$this->session->set_userdata('info',$kontrol);
			redirect('yonetim/anasayfa');
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
		
		$this->load->view('back/anasayfa');
	}

	public function cikis()
	{
		$this->session->sess_destroy();
		redirect('yonetim');
	}

	public function siteayarlari()
	{
		$sonuc = $this->vt->listele('siteayarlari');
		$data['bilgi'] = $sonuc;
		
		$info=$this->session->userdata('info');
		$this->load->view('back/siteayarlari',$data);
		/* if ($info->yetki == 1) {
			$this->load->view('back/siteayarlari',$data);
		} else {
			$this->session->set_flashdata('yetki','<div class="alert alert-warning alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<h6><i class="icon fas fa-ban"></i> Yetkili Değilsiniz</h6>
		  </div>');
			redirect('yonetimpaneli');
		} */
			
	}

	public function ayarduzenle($id)
	{
		$sonuc = $this->vt->cek('siteayarlari',$id);
		$data['bilgi'] = $sonuc;
		$this->load->view('back/ayarduzenle',$data);
	}

	public function ayarguncelle()
	{
		$data = array(
			'id' 			=> $id 			= $this->input->post('id'),
			'title' 		=> $title 		= $this->input->post('sitebaslik'),
			'sitemail' 		=> $mail 		= $this->input->post('sitemail'),
			'sitebilgi' 	=> $sitebilgi 	= $this->input->post('sitebilgi'),
			'sitekey' 		=> $sitekey 	= $this->input->post('sitekey')
		);
		$sonuc = $this->vt->guncelle('id',$id,'siteayarlari',$data);
		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<h4><i class="icon fas fa-user-check"></i> Başarılı!</h4>
			Site Ayarları Başarılı Bir Şekilde Güncellendi.
		  </div>');
			redirect('yonetimpaneli/siteayarlari');
		}else {
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<h4><i class="icon fas fa-ban"></i> Hata!</h4>
			Site Ayarları Güncellenirken Hata Oluştu.
		  </div>');
			redirect('yonetimpaneli/siteayarlari');
		}
	}

	// Sosyal Medya Ayarları

	public function sosyalmedya()
	{
		$sonuc = $this->vt->listele('sosyalmedya');
		$data['bilgi'] = $sonuc;
		$this->load->view('back/sosyalmedya',$data);
	}

	public function sosyalmedyaekle()
	{
		$this->load->view('back/sosyalmedyaekle');
	}

	public function sosyalmedyaekle2()
	{
		$data = array(
			'title' => $title = $this->input->post('title'),
			'sef' => seflink($title),
			'url' => $url = $this->input->post('url'),
			'durum' => 1
		);

		$sonuc = $this->vt->ekle('sosyalmedya',$data);


		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<h4><i class="icon fas fa-user-check"></i> Başarılı!</h4>
			Sosyal Medya Başarılı Bir Şekilde Eklendi.
		  </div>');
			redirect('yonetim/sosyalmedya');
		}else {
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<h4><i class="icon fas fa-ban"></i> Hata!</h4>
			Sosyal Medya Eklerken Hata Oluştu.
		  </div>');
			redirect('yonetim/sosyalmedya');
		}
	}

	public function sosyalmedyaduzenle($id)
	{
		$sonuc = $this->vt->cek('sosyalmedya',$id);
		if ($sonuc) {
			$data['bilgi'] = $sonuc;
			$this->load->view('back/sosyalmedyaduzenle',$data);
			$data = array('durum' => 1);
			$this->vt->sosyalmedyaupdate($sonuc->id,$data);
		}
		
		
	}

	public function sosyalmedyaguncelle()
	{
		$data = array(
			'id' 			=> $id 		= $this->input->post('id'),
			'title' 		=> $title 	= $this->input->post('title'),
			'sef' => seflink($title),
			'url' 			=> $mail 	= $this->input->post('url'),
		);
		$sonuc = $this->vt->guncelle('id',$id,'sosyalmedya',$data);
		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<h4><i class="icon fas fa-user-check"></i> Başarılı!</h4>
			Sosyal Medya Başarılı Bir Şekilde Güncellendi.
		  </div>');
			redirect('yonetim/sosyalmedya');
		}else {
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<h4><i class="icon fas fa-ban"></i> Hata!</h4>
			Sosyal Medya Güncellenirken Hata Oluştu.
		  </div>');
			redirect('yonetim/sosyalmedya');
		}
	}

	public function sosyalmedyasil($id)
	{

		$sonuc = $this->vt->sil('sosyalmedya','id',$id);
		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<h4><i class="icon fas fa-user-check"></i> Başarılı!</h4>
			Sosyal Medya Başarılı Bir Şekilde Silindi.
		  </div>');
			redirect('yonetim/sosyalmedya');
		}else {
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<h4><i class="icon fas fa-ban"></i> Hata!</h4>
			Sosyal Medya Silinirken Hata Oluştu.
		  </div>');
			redirect('yonetim/sosyalmedya');
		}

	}
	

	

	public function sosyalmedyaset()
	{
		$id = $this->input->post('id');
		$durum = ($this->input->post('durum') == "true") ? 1 : 0;
		$this->db->where('id',$id)->update('sosyalmedya',array('durum'=>$durum));
	}

	// Sosyal Medya Bitti

	// kategoriler başlangıç

	public function kategoriler()
	{
		$sonuc = kategoriliste();
		$data['bilgi'] = $sonuc;
		$this->load->view('back/kategoriler',$data);
		
	}

	public function kategoriekle()
	{
		
		$this->load->view('back/kategoriekle');
	}

	public function kategoriekle2()
	{
		$data = array(
			'title' => $title = $this->input->post('title'),
			'sef' => seflink($title)
		);

		$sonuc = $this->vt->ekle('kategoriler',$data);


		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<h4><i class="icon fas fa-user-check"></i> Başarılı!</h4>
			Kategori Başarılı Bir Şekilde Eklendi.
		  </div>');
			redirect('yonetimpaneli/kategoriler');
		}else {
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<h4><i class="icon fas fa-ban"></i> Hata!</h4>
			Kategori Eklerken Hata Oluştu.
		  </div>');
			redirect('yonetimpaneli/kategoriler');
		}
	}

	public function kategoriduzenle($id)
	{
		
		$sonuc = $this->vt->cek('kategoriler',$id);
		$data['bilgi'] = $sonuc;
		$this->load->view('back/kategoriduzenle',$data);
	}

	public function kategoriguncelle()
	{
		$id = $this->input->post('id');
		$title = $this->input->post('title');
		$sef = seflink($title);
		$data2 = array(
			'katid'			=> $id,
			'kategori'		=> $title,
			'katsef'		=> $sef
		);
		$this->vt->guncelle('katid',$id,'bloglar',$data2);
		
		$data = array(
			'id' 			=> $id,
			'title' 		=> $title,
			'sef'			=> $sef
		);
		$sonuc = $this->vt->guncelle('id',$id,'kategoriler',$data);
		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<h4><i class="icon fas fa-user-check"></i> Başarılı!</h4>
			Kategori Başarılı Bir Şekilde Güncellendi.
		  </div>');
			redirect('yonetimpaneli/kategoriler');
		}else {
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<h4><i class="icon fas fa-ban"></i> Hata!</h4>
			Kategori Güncellenirken Hata Oluştu.
		  </div>');
			redirect('yonetimpaneli/kategoriler');
		}
	}

	public function kategorisil($id)
	{

	
		if ($id == 1) {
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<h4><i class="icon fas fa-ban"></i> Hata!</h4> 
			Bu Kategori Silinemez.
		  </div>');
			redirect('yonetimpaneli/kategoriler');
			
		}
		
		$data2 = array(
			'katid'			=> '1',
			'kategori'		=> 'Genel',
			'katsef'		=> 'genel'
		);
		$this->vt->guncelle('katid',$id,'bloglar',$data2);

		$sonuc = $this->vt->sil('kategoriler','id',$id);
		
		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<h4><i class="icon fas fa-user-check"></i> Başarılı!</h4>
			Kategori Başarılı Bir Şekilde Silindi.
		  </div>');
			redirect('yonetimpaneli/kategoriler');
		} else {
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<h4><i class="icon fas fa-ban"></i> Hata!</h4>
			Kategori Silinirken Hata Oluştu.
		  </div>');
			redirect('yonetimpaneli/kategoriler');
		}
	}

	// kategoriler bitiş

	// bloglar başlangıç

	public function bloglar()
	{
		$sonuc = $this->vt->listele('bloglar');
		$data['bilgi'] = $sonuc;
		$this->load->view('back/bloglar',$data);
		
	}

	public function blogekle()
	{
		$this->load->view('back/blogekle');
	}





	public function blogekle2()
	{


		$title = $this->input->post('title');
		$sef = seflink($title);
		$icerik = $this->input->post('icerik');
		$katid = $this->input->post('katid');
		$kategoriler = $this->vt->cek('kategoriler',$katid);
		$kategori = $kategoriler->title;
		$katsef = seflink($kategori);
		$etiket = $this->input->post('etiket');
		$hit = 0;
		


		$config['upload_path'] = FCPATH.'assets/front/img/blog';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload',$config);


		if ($this->upload->do_upload('resim')) {
			$resim = $this->upload->data();
			$resimyolu 						= $resim['file_name'];
			$resimkayit 					= 'assets/front/img/blog/'.$resimyolu.'';
			$config['image_library'] 		= 'gd2';
			$config['source_image'] 		= 'assets/front/img/blog/'.$resimyolu.'';
			

			

			$data = array('resim'=>$resimkayit,'title'=>$title,'sef'=>$sef,'katid'=>$katid,'kategori'=>$kategori,'katsef'=>$katsef,'icerik'=>$icerik,'hit'=>$hit,'etiket'=>$etiket);

			
			
			$sonuc = $this->vt->ekle('bloglar',$data);
			if ($sonuc) {
				$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<h4><i class="icon fas fa-user-check"></i> Başarılı!</h4>
				Blog Başarılı Bir Şekilde Eklendi.
			  </div>');
				redirect('yonetimpaneli/bloglar');
			}else {
				$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<h4><i class="icon fas fa-ban"></i> Hata!</h4>
				Blog Eklerken Hata Oluştu.
			  </div>');
				redirect('yonetimpaneli/bloglar');
			}

		}else {
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<h4><i class="icon fas fa-ban"></i> Hata!</h4>
				Fotoğraf Eklerken Hata Oluştu.
			  </div>');
				redirect('yonetimpaneli/bloglar');
		}
	}
	public function blogduzenle($id)
	{
		$sonuc = $this->vt->cek('bloglar',$id);
		$data['bilgi'] = $sonuc;
		$this->load->view('back/blogduzenle',$data);
	}



	public function blogguncelle()
	{


		$id = $this->input->post('id');
		$title = $this->input->post('title');
		$sef = seflink($title);
		$icerik = htmlentities($this->input->post('icerik'));
		$katid = $this->input->post('katid');
		$kategoriler = $this->vt->cek('kategoriler',$katid);
		$kategori = $kategoriler->title;
		$katsef = seflink($kategori);
		$etiket = $this->input->post('etiket');
		
	
			$data = array('title'=>$title,'sef'=>$sef,'katid'=>$katid,'kategori'=>$kategori,'katsef'=>$katsef,'icerik'=>$icerik,'etiket'=>$etiket,);




		$config['upload_path'] = FCPATH.'assets/front/img/blog';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload',$config);


		if ($this->upload->do_upload('resim')) {
			$resim = $this->upload->data();
			$resimyolu 						= $resim['file_name'];
			$resimkayit 					= 'assets/front/img/blog/'.$resimyolu.'';
			$config['image_library'] 		= 'gd2';
			$config['source_image'] 		= 'assets/front/img/blog/'.$resimyolu.'';

			$this->load->library('image_lib',$config);
			$this->image_lib->initialize($config);
			$this->image_lib->resize();
			$this->image_lib->clear();
			
			

			$rsil = blogresim($id);
			unlink($rsil);
			

			$data = array('resim'=>$resimkayit,'title'=>$title,'sef'=>$sef,'katid'=>$katid,'kategori'=>$kategori,'katsef'=>$katsef,'icerik'=>$icerik,'etiket'=>$etiket);
			
			$sonuc = $this->vt->guncelle('id',$id,'bloglar',$data);
			if ($sonuc) {
				$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<h4><i class="icon fas fa-user-check"></i> Başarılı!</h4>
				Blog Başarılı Bir Şekilde Güncellendi.
			  </div>');
				redirect('yonetimpaneli/blogduzenle/'.$id);
			}else {
				$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<h4><i class="icon fas fa-ban"></i> Hata!</h4>
				Blog Güncellenirken Hata Oluştu.
			  </div>');
				redirect('yonetimpaneli/blogduzenle/'.$id);
			}

		}else {
			$data = array('title'=>$title,'sef'=>$sef,'katid'=>$katid,'kategori'=>$kategori,'katsef'=>$katsef,'icerik'=>$icerik,'etiket'=>$etiket,);

			
			
			$sonuc = $this->vt->guncelle('id',$id,'bloglar',$data);
			if ($sonuc) {
				$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<h4><i class="icon fas fa-user-check"></i> Başarılı!</h4>
				Blog Başarılı Bir Şekilde Güncellendi.
			  </div>');
			  redirect('yonetimpaneli/blogduzenle/'.$id);
			}else {
				$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<h4><i class="icon fas fa-ban"></i> Hata!</h4>
				Blog Güncellenirken Hata Oluştu.
			  </div>');
				redirect('yonetimpaneli/bloglar');
			}
		}
	}  




	public function blogsil($id)
	{

			$rsil = blogresim($id);
			unlink($rsil);

			
		$sonuc = $this->vt->sil('bloglar','id',$id);
		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<h4><i class="icon fas fa-user-check"></i> Başarılı!</h4>
			Blog Başarılı Bir Şekilde Silindi.
		  </div>');
			redirect('yonetimpaneli/bloglar');
		}else {
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<h4><i class="icon fas fa-ban"></i> Hata!</h4>
			Blog Silinirken Hata Oluştu.
		  </div>');
			redirect('yonetimpaneli/bloglar');
		}
	}

	public function mesajlar()
	{
		$sonuc = $this->vt->listele('mesajlar');
		$data['bilgi'] = $sonuc;

		$this->load->view('back/mesajlar', $data);

	}

	

	public function mesajduzenle($id)
	{
		$sonuc = $this->vt->cek('mesajlar',$id);
		if ($sonuc) {
			$data['sonuc'] = $sonuc;
			$this->load->view('back/mesajduzenle',$data);
			$data = array('durum'=>1);
			$this->vt->mesajupdate($sonuc->id,$data);
		}
		

		
	}

	public function mesajset()
	{
		$id = $this->input->post('id');
		$durum = ($this->input->post('durum') == "true") ? 1 : 0;
		$this->db->where('id',$id)->update('mesajlar',array('durum'=>$durum));
	}

	public function mesajsil($id)
	{
		$sonuc = $this->vt->sil('mesajlar','id',$id);
		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<h4><i class="icon fas fa-user-check"></i> Başarılı!</h4>
			Mesaj Başarılı Bir Şekilde Silindi.
		  </div>');
			redirect('yonetimpaneli/mesajlar');
		}else {
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<h4><i class="icon fas fa-ban"></i> Hata!</h4>
			Mesaj Silinirken Hata Oluştu.
		  </div>');
			redirect('yonetimpaneli/mesajlar');
		}
	}

	public function bakim()
	{
		$id = 1;
		/*if(bakim() == 1) {
			$bakim = 0;
		}elseif(bakim() == 0) {
			$bakim = 1;
		} */
		 if($this->input->post('bakim') == 1) {
			$bakim = 1;
		}elseif ($this->input->post('bakim') == 0) {
			$bakim = 0;
		};
		$this->db->where('id',$id)->update('siteayarlari',array('bakim'=>$bakim));
		
		redirect($_SERVER['HTTP_REFERER'],'refresh');
		
	}








	
}
