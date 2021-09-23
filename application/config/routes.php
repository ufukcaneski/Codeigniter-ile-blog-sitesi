<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'anasayfa';
$route['projects'] = 'anasayfa/projects';
$route['blog'] = 'anasayfa/blog';
$route['blog/(:any)'] = 'anasayfa/blogdetay/$1';
$route['kategori/(:any)'] = 'anasayfa/kategoriler/$1';
$route['kategori'] = 'anasayfa/blog';
$route['resume'] = 'anasayfa/resume';
$route['contact'] = 'anasayfa/contact';
$route['sitemap\.xml'] = 'sitemap';
$route['404'] = 'anasayfa/notfound';
$route['404_override'] = 'anasayfa/notfound';
$route['translate_uri_dashes'] = FALSE;
