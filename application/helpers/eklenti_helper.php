<?php 

function activea($menu)
{
    $ci=get_instance();
    if ($ci->uri->segment(1)==$menu) 
    {
        echo "active";
    }
}

function active($menu1)
{
    $ci=get_instance();
    if($ci->uri->segment(2)==$menu1)
    { echo "active"; } 
}

function active2($menu2)
{
    $ci=get_instance();
    if($ci->uri->segment(2)==$menu2)
    { echo "active"; }
}

function openmenu($menu3)
{
    $ci=get_instance();
    if($ci->uri->segment(2)==$menu3)
    { echo "menu-open"; } 
}

function openmenu2($menu4)
{
    $ci=get_instance();
    if($ci->uri->segment(2)==$menu4)
    { echo "menu-open"; } 
}

function deneme($menu1)
{
    $ci=get_instance();
    if($ci->uri->segment(2)==$menu1)
    { echo "active"; } 
}

function activek($menu)
{
    $ci=get_instance();
    if ($ci->uri->segment(2)==$menu) 
    {
        echo "color: #fff";
    }
}

function blogresim($id)
  {
      $ci =& get_instance();

      $sonuc = $ci->db->from('bloglar')->where('id',$id)->get()->row();
      return $sonuc->resim;
  }

  function kategorilisteleme($katsef)
  {
      $ci =& get_instance();

      $sonuc = $ci->db->from('bloglar')->where('katsef',$katsef)->get()->row();
      return $sonuc->sef;
  }







    function kategoriliste()
 {
    $ci =& get_instance();
    $sonuc = $ci->db->select('*')->from('kategoriler')->order_by('id','asc')->get()->result();
    return $sonuc;
  }

    function tarih($veri)
  {
    
    $sonuc = date("d/m/Y",strtotime($veri));
    return $sonuc;
  }

    function baslik()
    {
        $ci =& get_instance();
        $sonuc= $ci->db->select('*')->from('siteayarlari')->get()->row()->title;
        return $sonuc;
    }

    function resimler($sef)
    {
        $ci =& get_instance();
        $sonuc= $ci->db->select('*')->from('bloglar')->where('sef',$sef)->get()->row()->resim;
        return $sonuc;
    }
    function kategoriler($sef)
    {
        $ci =& get_instance();
        $sonuc= $ci->db->select('*')->from('kategoriler')->where('sef',$sef)->get()->result();
        return $sonuc;
    }

    function bakim()
    {
        $ci =& get_instance();
        $sonuc= $ci->db->select('*')->from('siteayarlari')->get()->row()->bakim;
        return $sonuc;
    }

    function siteayarlari()
    {
        $ci =& get_instance();
        $sonuc= $ci->db->select('*')->from('siteayarlari')->order_by('id','desc')->get()->result();
        return $sonuc;
    }

    function sosyalmedya()
    {
        $ci =& get_instance();
        $sonuc= $ci->db->select('*')->from('sosyalmedya')->order_by('id','desc')->get()->result();
        return $sonuc;
    }

    



























function seflink($str, $options = array())
 {
     $str = mb_convert_encoding((string)$str, 'UTF-8', mb_list_encodings());
     $defaults = array(
         'delimiter' => '-',
         'limit' => null,
         'lowercase' => true,
         'replacements' => array(),
         'transliterate' => true
     );
     $options = array_merge($defaults, $options);
     $char_map = array(
         // Latin
         '??' => 'A', '??' => 'A', '??' => 'A', '??' => 'A', '??' => 'A', '??' => 'A', '??' => 'AE', '??' => 'C',
         '??' => 'E', '??' => 'E', '??' => 'E', '??' => 'E', '??' => 'I', '??' => 'I', '??' => 'I', '??' => 'I',
         '??' => 'D', '??' => 'N', '??' => 'O', '??' => 'O', '??' => 'O', '??' => 'O', '??' => 'O', '??' => 'O',
         '??' => 'O', '??' => 'U', '??' => 'U', '??' => 'U', '??' => 'U', '??' => 'U', '??' => 'Y', '??' => 'TH',
         '??' => 'ss',
         '??' => 'a', '??' => 'a', '??' => 'a', '??' => 'a', '??' => 'a', '??' => 'a', '??' => 'ae', '??' => 'c',
         '??' => 'e', '??' => 'e', '??' => 'e', '??' => 'e', '??' => 'i', '??' => 'i', '??' => 'i', '??' => 'i',
         '??' => 'd', '??' => 'n', '??' => 'o', '??' => 'o', '??' => 'o', '??' => 'o', '??' => 'o', '??' => 'o',
         '??' => 'o', '??' => 'u', '??' => 'u', '??' => 'u', '??' => 'u', '??' => 'u', '??' => 'y', '??' => 'th',
         '??' => 'y',
         // Latin symbols
         '??' => '(c)',
         // Greek
         '??' => 'A', '??' => 'B', '??' => 'G', '??' => 'D', '??' => 'E', '??' => 'Z', '??' => 'H', '??' => '8',
         '??' => 'I', '??' => 'K', '??' => 'L', '??' => 'M', '??' => 'N', '??' => '3', '??' => 'O', '??' => 'P',
         '??' => 'R', '??' => 'S', '??' => 'T', '??' => 'Y', '??' => 'F', '??' => 'X', '??' => 'PS', '??' => 'W',
         '??' => 'A', '??' => 'E', '??' => 'I', '??' => 'O', '??' => 'Y', '??' => 'H', '??' => 'W', '??' => 'I',
         '??' => 'Y',
         '??' => 'a', '??' => 'b', '??' => 'g', '??' => 'd', '??' => 'e', '??' => 'z', '??' => 'h', '??' => '8',
         '??' => 'i', '??' => 'k', '??' => 'l', '??' => 'm', '??' => 'n', '??' => '3', '??' => 'o', '??' => 'p',
         '??' => 'r', '??' => 's', '??' => 't', '??' => 'y', '??' => 'f', '??' => 'x', '??' => 'ps', '??' => 'w',
         '??' => 'a', '??' => 'e', '??' => 'i', '??' => 'o', '??' => 'y', '??' => 'h', '??' => 'w', '??' => 's',
         '??' => 'i', '??' => 'y', '??' => 'y', '??' => 'i',
         // Turkish
         '??' => 'S', '??' => 'I', '??' => 'C', '??' => 'U', '??' => 'O', '??' => 'G',
         '??' => 's', '??' => 'i', '??' => 'c', '??' => 'u', '??' => 'o', '??' => 'g',
         // Russian
         '??' => 'A', '??' => 'B', '??' => 'V', '??' => 'G', '??' => 'D', '??' => 'E', '??' => 'Yo', '??' => 'Zh',
         '??' => 'Z', '??' => 'I', '??' => 'J', '??' => 'K', '??' => 'L', '??' => 'M', '??' => 'N', '??' => 'O',
         '??' => 'P', '??' => 'R', '??' => 'S', '??' => 'T', '??' => 'U', '??' => 'F', '??' => 'H', '??' => 'C',
         '??' => 'Ch', '??' => 'Sh', '??' => 'Sh', '??' => '', '??' => 'Y', '??' => '', '??' => 'E', '??' => 'Yu',
         '??' => 'Ya',
         '??' => 'a', '??' => 'b', '??' => 'v', '??' => 'g', '??' => 'd', '??' => 'e', '??' => 'yo', '??' => 'zh',
         '??' => 'z', '??' => 'i', '??' => 'j', '??' => 'k', '??' => 'l', '??' => 'm', '??' => 'n', '??' => 'o',
         '??' => 'p', '??' => 'r', '??' => 's', '??' => 't', '??' => 'u', '??' => 'f', '??' => 'h', '??' => 'c',
         '??' => 'ch', '??' => 'sh', '??' => 'sh', '??' => '', '??' => 'y', '??' => '', '??' => 'e', '??' => 'yu',
         '??' => 'ya',
         // Ukrainian
         '??' => 'Ye', '??' => 'I', '??' => 'Yi', '??' => 'G',
         '??' => 'ye', '??' => 'i', '??' => 'yi', '??' => 'g',
         // Czech
         '??' => 'C', '??' => 'D', '??' => 'E', '??' => 'N', '??' => 'R', '??' => 'S', '??' => 'T', '??' => 'U',
         '??' => 'Z',
         '??' => 'c', '??' => 'd', '??' => 'e', '??' => 'n', '??' => 'r', '??' => 's', '??' => 't', '??' => 'u',
         '??' => 'z',
         // Polish
         '??' => 'A', '??' => 'C', '??' => 'e', '??' => 'L', '??' => 'N', '??' => 'o', '??' => 'S', '??' => 'Z',
         '??' => 'Z',
         '??' => 'a', '??' => 'c', '??' => 'e', '??' => 'l', '??' => 'n', '??' => 'o', '??' => 's', '??' => 'z',
         '??' => 'z',
         // Latvian
         '??' => 'A', '??' => 'C', '??' => 'E', '??' => 'G', '??' => 'i', '??' => 'k', '??' => 'L', '??' => 'N',
         '??' => 'S', '??' => 'u', '??' => 'Z',
         '??' => 'a', '??' => 'c', '??' => 'e', '??' => 'g', '??' => 'i', '??' => 'k', '??' => 'l', '??' => 'n',
         '??' => 's', '??' => 'u', '??' => 'z'
     );
     $str = preg_replace(array_keys($options['replacements']), $options['replacements'], $str);
     if ($options['transliterate']) {
         $str = str_replace(array_keys($char_map), $char_map, $str);
     }
     $str = preg_replace('/[^\p{L}\p{Nd}]+/u', $options['delimiter'], $str);
     $str = preg_replace('/(' . preg_quote($options['delimiter'], '/') . '){2,}/', '$1', $str);
     $str = mb_substr($str, 0, ($options['limit'] ? $options['limit'] : mb_strlen($str, 'UTF-8')), 'UTF-8');
     $str = trim($str, $options['delimiter']);
     return $options['lowercase'] ? mb_strtolower($str, 'UTF-8') : $str;
 }








?>