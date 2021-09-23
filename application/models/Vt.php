<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Vt extends CI_Model { 


    function kontrol($mail,$sifre)
    {
        $sonuc = $this->db->select('*')->from('yonetim')->where('mail',$mail)->where('sifre',$sifre)->get()->row();
        $sonuc2 = $this->db->select('*')->from('yonetim')->where('kullaniciadi',$mail)->where('sifre',$sifre)->get()->row();
        if ($sonuc) {
            return $sonuc;
        } elseif ($sonuc2) {
            return $sonuc2;
        }
    }

    function listele($from)
    {
        $sonuc = $this->db->select('*')->from($from)->order_by('id','desc')->get()->result();
        return $sonuc;
    }

    function listelelimit()
    {
        $sonuc = $this->db->select('*')->from('bloglar')->order_by('id','desc')->limit('4')->get()->result();
        return $sonuc;
    }

    function haberlistele()
    {
        $sonuc = $this->db->select('*')->from('bloglar')->order_by('id','desc')->limit('3')->get()->result();
        return $sonuc;
    }
    

    function kategorilistele($id)
    {
        $sonuc = $this->db->select('*')->from('bloglar')->where('katsef',$id)->order_by('id','desc')->get()->result();
        return $sonuc;
    }

    function kategori404($id)
    {
        $sonuc = $this->db->select('*')->from('kategoriler')->where('sef',$id)->order_by('id','desc')->get()->row();
        return $sonuc;
    }
    
    function kategorilistele2($id)
    {
        $sonuc = $this->db->select('*')->from('bloglar')->where('katsef',$id)->order_by('id','desc')->limit('4')->get()->result();
        return $sonuc;
    }
 /*   
    function blogyukle($id,$katid)
    {
        
         $sonuc = $this->db->select('*')->from('bloglar')->where('id <',$id)->where('katid',$katid)->limit('1')->order_by('id','desc')->get()->result();
         return $sonuc;
         
    }
    function blogyuklelimitsiz($id)
    {
        $sonuc = $this->db->select('*')->from('bloglar')->where('id <',$id)->order_by('id','desc')->limit('1')->get()->result();
         return $sonuc;
    }
    function blogsayisi($id,$katid)
    {
        $this->db->from('bloglar');
        $this->db->where('id <',$id)->where('katid',$katid);
        $sonuc = $this->db->count_all_results();
        return $sonuc;
        
    } */

    function ekle($from,$data = array())
    {
        $sonuc = $this->db->insert($from,$data);
        return $sonuc;
    }

    function guncelle($where,$id,$from,$data = array())
    {
        $sonuc = $this->db->where($where,$id)->update($from,$data);
        return $sonuc;
    }

    function sil($from,$where,$id)
    {
        $sonuc = $this->db->delete($from,array($where=>$id));
        return $sonuc;
    }

    
    function kategoriler()
    {
        $result=$this->db->select('*')->from('kategoriler')->get()->result();
        return $result;
    }

    

    function cek($from,$id)
    {
        $sonuc= $this->db->select('*')->from($from)->where('id',$id)->get()->row();
        return $sonuc;
    }

    function sonyazi($veri)
    {
        $sonuc = $this->db->select('*')->from('bloglar')->order_by('id','desc')->limit('1')->get()->result();
      return $sonuc;
    }

    function blogdetay($link)
    {
        $sonuc = $this->db->select('*')->from('bloglar')->where('sef',$link)->get()->row();
      
        if (!$sonuc) {
            
            
            redirect('404','refresh');
            
            
        }
      return $sonuc;

    }

    function sefbul($link)
    {
        $sonuc = $this->db->select('*')->from('bloglar')->where('sef',$link)->get()->row();
      
      
      return $sonuc;

    }

    

    function onceki($id)
    {
        $oncekiyazi = $this->db->query("SELECT * FROM bloglar WHERE id < $id ORDER BY id DESC LIMIT 1");
		$oncekiyazi1 = $oncekiyazi->result();
        return $oncekiyazi1;
    
    }

    function sonraki($id)
    {
        $sonrakiyazi = $this->db->query("SELECT * FROM bloglar WHERE id > $id ORDER BY id ASC LIMIT 1");
		$sonrakiyazi1 = $sonrakiyazi->result();
        return $sonrakiyazi1;

    
    }

    function mesajgonder($data=array())
    {
        $result=$this->db->insert('mesajlar',$data);
        return $result;
    }

    function mesajupdate($id,$data=array())
    {
      $sonuc = $this->db->where('id',$id)->update('mesajlar',$data);
    }

    function sosyalmedyaupdate($id,$data=array())
    {
      $sonuc = $this->db->where('id',$id)->update('sosyalmedya',$data);
    }

   






 }