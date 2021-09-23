<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sitemap extends CI_Controller {
    

  public function index()
  {

    $listele = $this->vt->listele('bloglar');
    $data['listele'] = $listele;

    $this->load->view('front/sitemap',$data);

  }

}


/* End of file Sitemap.php */
/* Location: ./application/controllers/Sitemap.php */