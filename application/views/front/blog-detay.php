<?php $this->load->view('front/include/header'); ?>
<div class="header-intro theme-bg-primary text-white py-5">
	        <div class="container text-center">		
		              
		        <h2 class="page-heading mb-1"><?php echo $bilgi->title; ?></h2>
			<div class="page-heading-tagline mx-auto mb-3"> <!-- Burası yazıyla ilgili çok kısa özet yapılacak --> </div>
		        <img class="profile-small d-inline-block rounded-circle mb-3" src="<?php echo base_url('assets/front/'); ?>img/profile.jpeg" alt="">
		        <ul class="page-heading-post-meta list-inline mb-0">
					<li class="list-inline-item mr-3"><i class="far fa-clock mr-2"></i><?php echo tarih($bilgi->tarih); ?></li>
					<li class="list-inline-item"><i class="fas fa-comment mr-2"></i><a href="<?php echo base_url('blog/'.$bilgi->sef); ?>#disqus_thread"></a></li>
				</ul>
	        </div><!--//container-->
        </div><!--//header-intro-->
        
    </header><!--//header-->


    <section class="single-post-wrapper single-col-max-width py-5 px-4 mx-auto">
	        <div class="section-row">
			<?php $id = $bilgi->id; ?>
		        <div class="cover-image mb-4"><img class="img-fluid" src="<?php echo base_url($bilgi->resim); ?>" alt=""></div>
				
		  
	        </div><!--//section-row-->

			
	        
				
		        <div class="mb-5">
				<?php echo htmlspecialchars_decode($bilgi->icerik); ?>
		        </div>
		        
			
		       

				
	        </div><!--//section-row-->
	        
	       
            
            
          
	        
	        <?php if($onceki) { ?>
	        <nav class="post-nav d-flex justify-content-between">
			<?php } else { ?>
				<nav class="post-nav d-flex justify-content-end">
				<?php } ?>
			<?php foreach ($onceki as $onceki) { ?>
				<div class="nav-previous"><a class="nav-link text-dark rounded bg-light" href="<?php echo base_url('blog/'.$onceki->sef); ?>" rel="prev"><i class="fas fa-long-arrow-alt-left mr-1"></i>Önceki <span class="d-none d-md-inline">Yazı</span></a></div>
			<?php } ?>
			<?php if($onceki) { foreach($sonraki as $sonraki) { ?>
				<div class="nav-next"><a class="nav-link text-dark rounded bg-light" href="<?php echo base_url('blog/'.$sonraki->sef); ?>" rel="next">Sonraki <span class="d-none d-md-inline">Yazı</span><i class="fas fa-long-arrow-alt-right ml-1"></i></a></div>
				<?php } } else { foreach($sonraki as $sonraki) { ?>
					<div class="nav-next"><a class="nav-link text-dark rounded bg-light" href="<?php echo base_url('blog/'.$sonraki->sef); ?>" rel="next">Sonraki <span class="d-none d-md-inline">Yazı</span><i class="fas fa-long-arrow-alt-right ml-1"></i></a></div>
			<?php	} } ?>
			</nav>
	        
	        <div class="author-block my-5 bg-white rounded p-3 p-l-5">
		        <div class="media flex-column flex-md-row">
			        <img class="author-profile profile-small d-inline-block rounded-circle mr-md-4 mb-2 mb-lg-0" src="<?php echo base_url('assets/front/'); ?>img/profile.jpeg" alt="">
			        <div class="author-info media-body">
			            <h4 class="mb-2 font-weight-bold">Ufukcan Eski</h4>
			            <div class="mb-3">I'm a full stack developer with a passion for software development and UX. You can follow me via the various channels below:</div>
			            <ul class="social-list-color list-inline mb-0">
                <?php foreach (sosyalmedya() as $sosyalmedya) { ?>
                  <li class="list-inline-item mb-3"><a class="<?php echo $sosyalmedya->sef; ?> rounded-circle" href="https://<?php echo $sosyalmedya->sef; ?>.com/<?php echo ($sosyalmedya->sef == "linkedin")?"in/".$sosyalmedya->url:$sosyalmedya->url; ?>" target="_blank"><i class="fab fa-<?php echo $sosyalmedya->sef; ?> fa-fw"></i></a></li>
                    
                    <?php } ?>
                </ul>
						
			        </div>
		        </div>
	        </div>
	        
	        
	        
	        
	        <div id="comments-block" class="comments-block">
			        <!--//DISQUS script starts-->
			        <div id="disqus_thread"></div>
                    <script type="text/javascript">
                        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
                        var disqus_shortname = 'ufukcaneski'; // required: replace example with your forum shortname
                
                        /* * * DON'T EDIT BELOW THIS LINE * * */
                        (function() {
                            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                        })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
                    <!--//DISQUS script ends-->

			</div><!--//comments-block-->
	        
	        

    </section><!--//single-post-wrapper-->


    <section class="section pt-5 related-projects-section bg-white">
		<div class="container">
			<h3 class="section-title font-weight-bold text-center mb-4">Benzer Yazılarıma Göz Atın</h3>
			<div class="blog-cards blog-cards-related">
				<div class="row">
				
				
				<?php  foreach($listele as $listele) {  if($listele->sef != $bilgi->sef) { ?>
						<div class="col-12 col-lg-4 mb-5">
					
				        <div class="card rounded-0 border-0 shadow-sm eq-height">
							<div class="card-img-container position-relative">
						        <img class="card-img-top rounded-0" src="<?php echo base_url($listele->resim); ?>" alt="">
						        <div class="card-img-overlay overlay-mask text-center p-0">
							        <div class="overlay-mask-content text-center w-100 position-absolute">
									    <a class="btn btn-primary" href="<?php echo base_url('blog/'.$listele->sef); ?>">Read more</a>
							        </div>
							        <a class="overlay-mask-link position-absolute w-100 h-100" href="<?php echo base_url('blog/'.$listele->sef); ?>"></a>
								</div>
							</div>
							<div class="card-body pb-4">
								
								<h4 class="card-title mb-2"><a href="<?php echo base_url('blog/'.$listele->sef); ?>"><?php echo $listele->title; ?></a></h4>
								<div class="card-text">
								
									<div class="excerpt"><?php echo html_entity_decode(word_limiter(strip_tags($listele->icerik),10)); ?></div>
								</div>
								
							</div>
							<div class="card-footer border-0">
								<ul class="meta list-inline mb-0">
									<li class="list-inline-item mr-3"><i class="far fa-clock mr-2"></i><?php echo tarih($listele->tarih); ?></li>
									<li class="list-inline-item"><i class="fas fa-comment mr-2"></i><a href="<?php echo base_url('blog/'.$listele->sef); ?>#disqus_thread"></a></li>
								</ul>
							</div>
					    </div><!--//card-->
						
			        </div> <?php 

					} }?>

					
			       
			
				</div><!--//row-->
			</div>
			
		</div><!--//container-->
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








<div id="share-bar"></div>









<?php $this->load->view('front/include/footer'); ?>