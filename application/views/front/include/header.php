<!DOCTYPE html>
<html lang="tr"> 
<head>
    <title><?php echo baslik(); ?> | <?php if ($baslikcek) {
      echo $baslikcek; 
    } ?>
    </title>
 
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php foreach(siteayarlari() as $siteayarlari) { ?>
    <meta name="description" content="<?php echo $siteayarlari->sitebilgi; ?>">
    <meta name="keywords" content="<?php echo $siteayarlari->sitekey; ?>">
    <?php } ?>
    <meta name="distribution" content="Global / Local"/>
    <meta name="classification" content="Blog"/>
    <meta name="copyright" content= "Copyright ufukcaneski.com. All Rights Reserved. Designed by Ufukcan Eski"/>
    <meta name="content-language" content="tr"/>
    <meta name="author" content="Ufukcan Eski">

    <?php if (!empty($this->uri->segment(2)) == kategoriler($this->uri->segment(2)) && !empty($this->uri->segment(1))) { ?>
      <meta property="og:image" content="<?php echo base_url('assets/front/img/blog/'); ?>blog_1600x1068_mockup.jpg">
   <?php }elseif ($this->uri->segment(2)) { ?>
     <meta property="og:image" content="<?php echo base_url(resimler($this->uri->segment(2))); ?>">
  <?php }else { ?>
    <meta property="og:image" content="<?php echo base_url('assets/front/img/blog/'); ?>blog_1600x1068_mockup.jpg">
  <?php } ?>

    
    

	<link rel="shortcut icon" href="<?php echo base_url('assets/front/img/favicon.ico') ?>" type="image/x-icon">
    
    <!-- Google Font -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,500,400italic,300italic,300,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    
    <!-- FontAwesome JS -->
	<script defer src="<?php echo base_url('assets/front/'); ?>js/all.js"></script>

    
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/front/'); ?>css/flickity.min.css">
    <!-- Theme CSS -->  
	<link id="theme-style" rel="stylesheet" href="<?php echo base_url('assets/front/'); ?>css/theme-1.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/css/swiper.min.css">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Oswald:500" rel="stylesheet">
<script>!function(e){"undefined"==typeof module?this.charming=e:module.exports=e}(function(e,n){"use strict";n=n||{};var t=n.tagName||"span",o=null!=n.classPrefix?n.classPrefix:"char",r=1,a=function(e){for(var n=e.parentNode,a=e.nodeValue,c=a.length,l=-1;++l<c;){var d=document.createElement(t);o&&(d.className=o+r,r++),d.appendChild(document.createTextNode(a[l])),n.insertBefore(d,e)}n.removeChild(e)};return function c(e){for(var n=[].slice.call(e.childNodes),t=n.length,o=-1;++o<t;)c(n[o]);e.nodeType===Node.TEXT_NODE&&a(e)}(e),e});
</script>

<link rel="stylesheet" href="<?php echo base_url('assets/front/plugins/prismjs/') ?>prism.css">
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/js/swiper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<!-- reCAPTCHA api js -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script> 
<style>
.swiper-container {
  width: 100%;
  height: 100%;
}

.slide {
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;
  text-align: center;
  font-size: 18px;
  background: #fff;
  overflow: hidden;
}
.slide-image {
  position: absolute;
  top: -200px;
  left: -200px;
  width: calc(100% + 400px);
  height: calc(100% + 400px);
  background-position: 50% 50%;
  background-size: cover;
}
.slide-title {
  font-size: 1.5rem;
  line-height: 1;
  max-width: 100%;
  white-space: normal;
  word-break: break-word;
  color: #FFF;
  z-index: 100;
  font-family: 'Oswald', sans-serif;
  text-transform: uppercase;
  font-weight: normal;
}
@media (min-width: 45em) {
  .slide-title {
    font-size: 4vw;
    max-width: none;
	font-weight: 500;
	
  }
}
.slide-title span {
  white-space: pre;
  display: inline-block;
  opacity: 0;
}

.slideshow {
  position: relative;
}
.slideshow-pagination {
  position: absolute;
  bottom: 5rem;
  left: 0;
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  transition: .3s opacity;
  z-index: 10;
}
.slideshow-pagination-item {
  display: flex;
  align-items: center;
}
.slideshow-pagination-item .pagination-number {
  opacity: 0.5;
}
.slideshow-pagination-item:hover, .slideshow-pagination-item:focus {
  cursor: pointer;
}
.slideshow-pagination-item:last-of-type .pagination-separator {
  width: 0;
}
.slideshow-pagination-item.active .pagination-number {
  opacity: 1;
}
.slideshow-pagination-item.active .pagination-separator {
  width: 10vw;
}
.slideshow-navigation-button {
  position: absolute;
  top: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100%;
  width: 5rem;
  z-index: 1000;
  transition: all .3s ease;
  color: #FFF;
}
.slideshow-navigation-button:hover, .slideshow-navigation-button:focus {
  cursor: pointer;
  background: rgba(0, 0, 0, 0.5);
}
.slideshow-navigation-button.prev {
  left: 0;
}
.slideshow-navigation-button.next {
  right: 0;
}

.pagination-number {
  font-size: 1.8rem;
  color: #FFF;
  font-family: 'Oswald', sans-serif;
  padding: 0 0.5rem;
}

.pagination-separator {
  display: none;
  position: relative;
  width: 40px;
  height: 2px;
  background: rgba(255, 255, 255, 0.25);
  transition: all .3s ease;
}
@media (min-width: 45em) {
  .pagination-separator {
    display: block;
  }
}
.pagination-separator-loader {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: #FFFFFF;
  transform-origin: 0 0;
}
</style>



</head> 

<body style="background-color: #f7f8fa">


    
    <header class="header" id="blog-post-top">
	    
        <div style="z-index: 99; position: fixed; top:0" class="top-bar theme-bg-primary-darken w-100 shadow">
            
            <div class="container-fluid">
            
				<nav class="navbar navbar-expand-lg navbar-dark">
					
					
				<!--	<ul class="social-list list-inline mb-0">
			            <li class="list-inline-item"><a class="text-white" href="https://twitter.com/UfukcanEski" target="_blank"><i class="fab fa-twitter fa-fw"></i></a></li>
		                <li class="list-inline-item"><a class="text-white" href="https://www.linkedin.com/in/ufukcaneski/" target="_blank"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
		                <li class="list-inline-item"><a class="text-white" href="https://instagram.com/ufukcane" target="_blank"><i class="fab fa-instagram fa-fw"></i></a></li>
		            </ul>-->
                <!--//social-list-->
                <ul class="social-list list-inline mb-0">
                <?php foreach (sosyalmedya() as $sosyalmedya) { ?>
                  <li class="list-inline-item"><a class="text-white" href="https://<?php echo $sosyalmedya->sef; ?>.com/<?php echo ($sosyalmedya->sef == "linkedin")?"in/".$sosyalmedya->url:$sosyalmedya->url; ?>" target="_blank"><i class="fab fa-<?php echo $sosyalmedya->sef; ?> fa-fw"></i></a></li>
                    
                    <?php } ?>
                </ul>
					
	
					
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
						</button>
					
					<div class="collapse navbar-collapse text-uppercase" id="navigation">
						<ul class="navbar-nav ml-lg-auto">
							<li class="nav-item <?php activea(''); ?> mr-lg-3">
							    <a class="nav-link" href="<?php echo base_url(); ?>">Hakkımda</a>
							</li>
							<li class="nav-item <?php activea('projects'); ?> mr-lg-3">
							   <a class="nav-link" href="<?php echo base_url('projects'); ?>">Projelerim</a>
							</li>
							<li class="nav-item <?php activea('blog'); ?> mr-lg-3">
							    <a class="nav-link" href="<?php echo base_url('blog'); ?>">Blog</a>
							</li>
							<li class="nav-item <?php activea('resume'); ?> mr-lg-3">
							    <a class="nav-link" href="<?php echo base_url('resume'); ?>">CV</a>
							</li>
							<li class="nav-item <?php activea('contact'); ?> mr-lg-3">
							    <a class="nav-link" href="<?php echo base_url('contact'); ?>">İletişim</a>
							</li>
							
							
						</ul>
						<span id="slide-line"></span>
					</div>
					
					
					
				</nav>
            
            </div><!--//container-->
            
        </div><!--//top-bar-->
      <div class="mb-5"></div>