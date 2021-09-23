<?php $this->load->view('front/include/header'); ?>

<div class="header-intro theme-bg-primary text-white py-5">
	        <div class="container">
		        <h2 class="page-heading mb-0">İletişim</h2>
		        
	        </div><!--//container-->
        </div><!--//header-intro-->
        
    </header><!--//header-->
        
    <section class="section py-5">
        <div class="container">
            <div class="row">
		        <div class="contact-intro col-lg-8 mx-lg-auto mb-5 text-center">
			        
			        <img class="profile-small d-inline-block mx-auto rounded-circle mb-3" src="<?php echo base_url('assets/front/'); ?>img/profile.jpeg" alt="">
			        
			        <div class="speech-bubble bg-white p-4 p-lg-5 shadow-sm">
				        <p class="text-left mb-3">Şu anda freelance çalışıyorum. Projeniz için benimle çalışmak isterseniz, lütfen iletişime geçmek için aşağıdaki formu kullanın. Nasıl çalıştığımı ve neler sunabileceğimi görmek ister misiniz ? <a href="<?php echo base_url('projects'); ?>">projelerime</a> ve <a href="<?php echo base_url('resume'); ?>">özgeçmişime</a> göz atın.</p>
				        <h6 class="font-weight-bold text-center mb-3">Beni aşağıdaki kanallarda da bulabilirsiniz</h6>
				        
				        <ul class="social-list-color list-inline mb-0">
				            <li class="list-inline-item mb-3"><a class="twitter" href="https://twitter.com/UfukcanEski" target="_blank"><i class="fab fa-twitter fa-fw"></i></a></li>
			                <li class="list-inline-item mb-3"><a class="linkedin" href="https://www.linkedin.com/in/ufukcaneski/" target="_blank"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
							<li class="list-inline-item mb-3"><a class="linkedin" href="https://instagram.com/ufukcane" target="_blank"><i class="fab fa-instagram fa-fw"></i></a></li>
			                
			                <!--<li class="list-inline-item mb-3"><a class="facebook" href="#"><i class="fab fa-facebook-f fa-fw"></i></a></li>-->
			                
			                <!--<li class="list-inline-item"><a class="instagram" href="#"><i class="fab fa-instagram fa-fw"></i></a></li>-->
			            </ul><!--//social-list-->
			        </div>
			        
		        </div><!--//contact-intro-->
				<script>
					function onSubmit(token) {
						document.getElementById("contact-form").submit();
					}
					</script>
		     <form id="contact-form" class="contact-form col-lg-8 mx-lg-auto" method="post" action="<?php echo base_url('anasayfa/mesajgonder'); ?>">
				
			        <h3 class="text-center mb-3">İletişime Geçin</h3>
					<?php echo $this->session->flashdata('bilgi'); ?>
			        <div class="form-row">                                                           
		                <div class="form-group col-md-6">
		                    <label class="sr-only" for="cname">Name</label>
		                    <input type="text" class="form-control" id="isim" name="isim" placeholder="İsim ve Soyisim" minlength="2" required aria-required="true">
		                </div>                    
		                <div class="form-group col-md-6">
		                    <label class="sr-only" for="mail">Email</label>
		                    <input type="email" class="form-control" id="mail" name="mail" placeholder="Email" required aria-required="true">
		                </div>
		                <div class="form-group col-12">
		                    <label class="sr-only" for="cmessage">Your message</label>
		                    <textarea class="form-control" id="mesaj" name="mesaj" placeholder="Mesajınızı yazın" rows="10" required aria-required="true"></textarea>
						</div>
		                 <div class="form-group col-12">
		                    <button type="submit" name="action" value="submit" class="btn btn-block btn-primary py-2 g-recaptcha" data-sitekey="6LeVNyMcAAAAACvTjW3h9BgCVChNm2J-PcVRY5kR" data-callback='onSubmit' data-action='submit'>Gönder</button>
		                </div>                           
		            </div>
				</form> 

				

				

		        
            </div><!--//row-->
        </div><!--//container-->
    </section><!--//section-->












<?php $this->load->view('front/include/footer'); ?>