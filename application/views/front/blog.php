        <?php $this->load->view('front/include/header'); ?>
           
           <div class="header-intro theme-bg-primary text-white py-5">
                <div class="container position-relative">
                    <div class="media flex-column flex-md-row">
                        <img class="profile-medium d-inline-block rounded-circle mr-md-4 align-self-center mb-2 mb-lg-0" src="<?php echo base_url('assets/front/'); ?>img/profile.jpeg" alt="">
                        <div class="media-body align-self-center">
                            <h2 class="page-heading mb-2">Blog</h2>
                            <div class="page-heading-tagline mb-3">Geliştirici olarak web geliştirme ve yaşam hakkında yazıyorum. <br class="d-lg-block d-none">Aşağıdaki çeşitli kanallardan beni takip edebilirsiniz:</div>
                            <ul class="social-list-square list-inline mb-0">
                                <li class="list-inline-item mb-3 mb-lg-0"><a href="https://twitter.com/UfukcanEski" target="_blank"><i class="fab fa-twitter fa-fw text-white"></i></a></li>
                                <li class="list-inline-item mb-3 mb-lg-0"><a href="https://www.linkedin.com/in/ufukcaneski/" target="_blank"><i class="fab fa-linkedin-in fa-fw text-white"></i></a></li>

                                <li class="list-inline-item mb-3 mb-lg-0"><a href="https://instagram.com/ufukcane" target="_blank"><i class="fab fa-instagram fa-fw text-white"></i></a></li>
                                
                                
                                
                            </ul><!--//social-list-->
                        </div>
                    </div>
                   
                    
                </div><!--//container-->
            </div><!--//header-intro-->
            
        </header><!--//header-->

<div style="height: 15px" class="w-100 theme-bg-primary-darken mb-5"></div>
 




<nav class="container navbar navbar-expand-lg navbar-dark theme-bg-primary-darken position-relative">
					
					
					
					
                        <span class="navbar-brand">Kategoriler</span>

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
						</button>
					<div class="collapse navbar-collapse text-uppercase" id="menu">
						<ul class="navbar-nav ml-lg-auto mx-auto">
                        <?php foreach($kategoriler as $kategoriler) { ?>
							<li class="nav-item mr-lg-3">
							    <a class="nav-link <?php activek($kategoriler->sef); ?>" href="<?php echo base_url('kategori/'.$kategoriler->sef); ?>"><?php echo $kategoriler->title; ?></a>
							</li>
							
							
							
							<?php } ?>
						</ul>
						<span id="slide-line"></span>
					</div>
					
					
					
				</nav>


<section class="section pt-5">
            <div class="container blog-cards">	        
                
                <div class="row veri">
                   

                    
                <?php if($bilgi) { foreach($bilgi as $bilgi) { $id = $bilgi->id; ?>
                    <div class="col-12 col-md-6 col-lg-4 mb-5">
                    
                        <div class="card rounded-0 border-0 shadow-sm eq-height">
                            <div class="card-img-container position-relative">
                            
                                <img style="height: 136px; " class="card-img-top rounded-0" src="<?php echo base_url($bilgi->resim); ?>" alt="">
                                <div class="card-img-overlay overlay-mask text-center p-0">
                                    <div class="overlay-mask-content text-center w-100 position-absolute">
                                        <a class="btn btn-primary" href="<?php echo base_url('blog/'.$bilgi->sef); ?>">Daha Fazla Oku</a>
                                    </div>
                                    <a class="overlay-mask-link position-absolute w-100 h-100" href="<?php echo base_url('blog/'.$bilgi->sef); ?>"></a>
                                </div>
                            </div>
                            <div class="card-body pb-4">
                                
                                <h4 class="card-title mb-2"><a href="<?php echo base_url('blog/'.$bilgi->sef); ?>"><?php echo $bilgi->title; ?></a></h4>
                                <div class="card-text">
                                  
                                    <div class="excerpt"> <?php echo html_entity_decode(word_limiter(strip_tags($bilgi->icerik),10)); ?></div>
                                </div>
                                
                            </div>
                            <div class="card-footer border-0">
                                <ul class="meta list-inline mb-0">
                                    <li class="list-inline-item mr-3"><i class="far fa-clock mr-2"></i><?php echo tarih($bilgi->tarih); ?></li>
                                    <li class="list-inline-item"><i class="fas fa-comment mr-2"></i><a href="<?php echo base_url('blog/'.$bilgi->sef); ?>#disqus_thread"></a></li>
                                </ul>
                            </div>
                        </div><!--//card-->
                    </div>
                    <?php } } ?>
                    
                </div>
            </div><!--//container-->
        </section><!--//section-->


        <!-- //Slider -->





            
     

        <?php $this->load->view('front/include/footer'); ?>
        