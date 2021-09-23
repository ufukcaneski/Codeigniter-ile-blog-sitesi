<?php $this->load->view('front/include/header'); ?>

        <div class="header-intro theme-bg-primary text-white py-5">
	        <div class="container">
		        <div class="profile-teaser media flex-column flex-md-row">
				    <img class="profile-image mb-3 mb-md-0 mr-md-5 ml-md-0 rounded mx-auto" src="<?php echo base_url('assets/front/'); ?>img/profile.jpeg" alt="">
					<div class="media-body text-center text-md-left">
					<div class="lead">Merhaba, ismim</div>
					<h2 class="mt-0 display-4 font-weight-bold">Ufukcan Eski</h2>
					<div class="bio mb-3">Web uygulamaları için frontend ve backend geliştirmede uzmanlaşmış full-stack geliştiriciyim. <a class="link-on-bg" href="<?php echo base_url('blog'); ?>">bloğumda</a> web geliştirme ve teknoloji hakkında yazıyorum. Projenize nasıl yardımcı olabileceğimi bilmek ister misiniz? <a class="link-on-bg" href="<?php echo base_url('projects'); ?>">Proje örneklerime</a> ve <a class="link-on-bg" href="<?php echo base_url('resume'); ?>">özgeçmişime</a> gözatın.
					</div><!--//bio-->
					<a class="theme-btn-on-bg btn font-weight-bold theme-btn-cta" href="<?php echo base_url('contact'); ?>">Bana Ulaşın</a>
					
					</div><!--//media-body-->
				</div><!--//profile-teaser-->
		        
	        </div><!--//container-->
        </div><!--//header-intro-->
        
    </header><!--//header-->
        
    <section class="skills-section section py-5">
        <div class="container">
	        <h3 class="section-title font-weight-bold text-center mb-3">Yapabildiklerim</h3>
	        <div class="section-intro mx-auto text-center mb-5 text-secondary">Dünyanın her yerinde var olan müşterilerim için zengin web uygulamaları geliştirme konusunda 5 yıldan fazla deneyime sahibim. Aşağıda, kullandığım temel teknik yeteneklerime ve araçlara hızlı bir genel bakış yer almaktadır. Deneyimlerim hakkında daha fazla bilgi edinmek ister misiniz ? <a href="<?php echo base_url('resume'); ?>">Çevrimiçi özgeçnişime bakın</a>.</div>
	        
	        <div class="skills-blocks mx-auto pt-5">
		        <div class="row">
			        <div class="skills-block col-12 col-lg-4 mb-5 mb-3 mb-lg-0">
				        <div class="skills-block-inner bg-white shadow-sm py-4 px-5 position-relative">
					        <h4 class="skills-cat text-center mb-3 mt-5">Frontend</h4>
					        <div class="skills-icon-holder position-absolute d-inline-block rounded-circle text-center">
					            <img class="skills-icon" src="<?php echo base_url('assets/front/'); ?>img/frontend-icon.svg">
					        </div>
					        <ul class="skills-list list-unstyled text-secondary">
						        <li class="mb-2"><i class="fas fa-check mr-2 text-primary"></i>Javascript</li>				        
						        <li class="mb-2"><i class="fas fa-check mr-2 text-primary"></i>Bootstrap</li>				        
						        <li class="mb-2"><i class="fas fa-check mr-2 text-primary"></i>CSS3</li>
						        <li class="mb-2"><i class="fas fa-check mr-2 text-primary"></i>HTML/HTML5</li>
					        </ul>
				        </div><!--//skills-block-inner-->
			        </div><!--//skills-block-->
			        
			        <div class="skills-block col-12 col-lg-4 mb-5 mb-3 mb-lg-0">
				        <div class="skills-block-inner bg-white shadow-sm py-4 px-5 position-relative">
					        <h4 class="skills-cat text-center mb-3 mt-5">Backend</h4>
					        <div class="skills-icon-holder position-absolute d-inline-block rounded-circle text-center">
					            <img class="skills-icon" src="<?php echo base_url('assets/front/'); ?>img/backend-icon.svg">
					        </div>
					        <ul class="skills-list list-unstyled text-secondary">
						        <li class="mb-2"><i class="fas fa-check mr-2 text-primary"></i>PHP</li>
						        <li class="mb-2"><i class="fas fa-check mr-2 text-primary"></i>Codeigniter</li>
						        <li class="mb-2"><i class="fas fa-check mr-2 text-primary"></i>PostgresSQL/MySQL</li>
						        <li class="mb-2"><i class="fas fa-check mr-2 text-primary"></i>MongoDB</li>
					        </ul>
				        </div><!--//skills-block-inner-->
			        </div><!--//skills-block-->
			        
			        <div class="skills-block col-12 col-lg-4">
				        <div class="skills-block-inner bg-white shadow-sm py-4 px-5 position-relative">
					        <h4 class="skills-cat text-center mb-3 mt-5">Diğer</h4>
					        <div class="skills-icon-holder position-absolute d-inline-block rounded-circle text-center">
					            <img class="skills-icon" src="<?php echo base_url('assets/front/'); ?>img/other-skills-icon.svg">
					        </div>
					        <ul class="skills-list list-unstyled text-secondary">
						        <li class="mb-2"><i class="fas fa-check mr-2 text-primary"></i>DevOps</li>
						        <li class="mb-2"><i class="fas fa-check mr-2 text-primary"></i>Sosyal Medya Uzmanlığı</li>
						        <li class="mb-2"><i class="fas fa-check mr-2 text-primary"></i>Shopier</li>
						        <li class="mb-2"><i class="fas fa-check mr-2 text-primary"></i>Wordpress/Shopify</li>
					        </ul>
				        </div><!--//skills-block-inner-->
			        </div><!--//skills-block-->
			        
		        </div><!--//row-->
	        </div>
        </div><!--//container-->
    </section><!--//skills-section-->
    
    <section class="section-proof section bg-white py-5">
        <div class="container">
	        <h3 class="section-title font-weight-bold text-center mb-5">Birlikte çalıştığım harika müşteriler</h3>
	        <div style="align-items: center" class="logos row mb-5 justify-content-center">
		        <div class="logo px-3 col-6 col-md-4 col-lg-2 mr-0 px-md-5 px-lg-1"><a class="logo-link" href="https://cammakina.net" target="_blank"><img class="img-fluid svg-ie-fix" src="<?php echo base_url('assets/front/'); ?>img/logo/cammakina.svg"></a></div>
		        <div class="logo px-3 col-6 col-md-4 col-lg-2 mr-0 px-md-5 px-lg-4"><img style="cursor: pointer" class="img-fluid svg-ie-fix logo-link" src="<?php echo base_url('assets/front/'); ?>img/logo/google.svg"></div>
		        <div class="logo px-3 col-6 col-md-4 col-lg-2 mr-0 px-md-5 px-lg-4"><img style="cursor: pointer" class="img-fluid svg-ie-fix" src="<?php echo base_url('assets/front/'); ?>img/logo/spotify.svg"></div>
		        
		        
		       
	        </div>
	        
	        
        </div>
        
        <div class="container-fluid">
        
	       
	        
	        
		</div>
		
		<!--//testimonials-->
        
        
    </section>
    
    
    
    <section class="section-latest-blog py-5">
        <div class="container">
	        <h3 class="section-title font-weight-bold text-center mb-5">Son Blog Yazılarım</h3>
	        
	        <div class="blog-cards row">
				<?php foreach($bilgi as $bilgi) { ?>
		        <div class="col-12 col-lg-6">
			        <div class="card rounded-0 border-0 shadow-sm mb-5">
						<div class="card-img-container position-relative d-flex" style="height: 300px;">
					        <img class="card-img-top rounded-0" src="<?php echo base_url($bilgi->resim); ?>" alt="">
					        <div class="card-img-overlay overlay-mask overlay-logo text-center p-0">
						        <div class="overlay-mask-content text-center w-100 position-absolute">
								    <a class="btn btn-primary" href="<?php echo base_url('blog/'.$bilgi->sef); ?>">Daha Fazla</a>
						        </div>
						        <a class="overlay-mask-link position-absolute w-100 h-100" href="<?php echo base_url('blog/'.$bilgi->sef); ?>"></a>
							</div>
						</div>
						<div class="card-body pb-4">
							
							<h4 class="card-title text-truncate mb-2"><a href="<?php echo base_url('blog/'.$bilgi->sef); ?>"><?php echo $bilgi->title; ?></a></h4>
							<div class="card-text">
								<ul class="meta list-inline mb-1">
									<li class="list-inline-item mr-3"><i class="far fa-clock mr-2"></i><?php echo tarih($bilgi->tarih); ?></li>
									<li class="list-inline-item"><i class="fas fa-comment mr-2"></i><a href="<?php echo base_url('blog/'.$bilgi->sef); ?>#disqus_thread">Yapım Aşamasında</a></li>
								</ul>
								<div class="excerpt"><?php echo html_entity_decode(word_limiter(strip_tags($bilgi->icerik),10)); ?></div>
							</div>
						</div>
				    </div><!--//card-->
		        </div>
		        
				<?php } ?>
	        </div><!--//blog-cards-->

	        
        </div>
        
        <div class="text-center">
            <a class="btn btn-primary" href="<?php echo base_url('blog'); ?>">Tüm gönderileri görüntüleyin</a>
        </div>
        
        
    </section>

	<section class="section-cta py-5 bg-primary text-white">
	<div class="container">
		<div class="text-center">
			<img class="profile-small d-inline-block mx-auto rounded-circle mb-2" src="<?php echo base_url('assets/front/'); ?>img/profile.jpeg" alt="">
		</div>
		<h3 class="section-title font-weight-bold text-center mb-2">Projeniz için benimle çalışmak istermisiniz ?</h3>
		<div class="section-intro mx-auto text-center mb-3">
			Web uygulamalarınızı oluşturmak veya yazılım ürününüzü geliştirmek için deneyimli bir developer'mı arıyorsunuz ? Bana ulaşmak için  <a class="link-on-bg" href="mailto:info@ufukcaneski.com">info@ufukcaneski.com</a> veya <a class="link-on-bg" href="<?php echo base_url('contact'); ?>">iletişim sayfasındaki formu</a> kullanın.
		</div>
		<div class="text-center">
			<a class="theme-btn-on-bg btn" href="<?php echo base_url('contact'); ?>"> İletişim </a>
		</div>
	</div><!--//container-->
</section>

    
	<?php $this->load->view('front/include/footer'); ?>
	