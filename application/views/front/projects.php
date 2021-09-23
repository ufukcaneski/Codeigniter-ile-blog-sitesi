<?php $this->load->view('front/include/header.php'); ?>

        
        <div class="header-intro theme-bg-primary text-white py-5">
	        <div class="container">
		        <h2 class="page-heading mb-3">Projeler</h2>
		        <div class="page-heading-tagline">Size neler sunabileceğimi ve nasıl çalıştığımı göstermek için ayrıntılı örnek projeler</div>
		        
	        </div><!--//container-->
        </div><!--//header-intro-->
        
    </header><!--//header-->
        
    <section class="section pt-5">
        <div class="container">
	        <div class="text-center">
		        <ul id="filters" class="filters mb-5 mx-auto pl-0">
					<li class="type active" data-filter="*">All</li>
					<li class="type" data-filter=".codeigniter">Codeigniter</li>
					<li class="type" data-filter=".php">PHP</li>
	                
	                
	            </ul><!--//filters-->
	        </div>
	        
	        <div class="project-cards row mb-5 isotope">
		        <div class="isotope-item col-12 col-lg-4 php codeigniter">
					<div class="card rounded-0 border-0 shadow-sm mb-5">
						<div class="card-img-container position-relative">
							<img class="card-img-top rounded-0" src="<?php echo base_url('assets/front/'); ?>img/projects/project-1-thumb.jpg" alt="">
							<div class="card-img-overlay overlay-logo text-center">
								<div class="project-logo"><img style="background-color: white" class="img-fluid w-50" src="<?php echo base_url('assets/front/'); ?>img/logo/cammakina.svg"></div>
							</div>
							<a class="card-img-overlay overlay-content text-left p-lg-4" href="https://cammakina.net">
								<h5 class="card-title font-weight-bold">Müşteri: Çam Makina</h5>
							    <p class="card-text">Çam Makina için kurumsal web sitesi hazırlandı. Ürünlerin tanıtımı yapıldı.</p>
							</a>
						</div>
						<div class="card-body pb-0">
							<h4 class="card-title text-truncate text-center mb-0"><a href="https://cammakina.net">Çam Makina</a></h4>
						</div>
						
						<div class="card-footer border-0 text-center bg-white pb-4">
							<ul class="list-inline mb-0 mx-auto">
						        <li class="list-inline-item"><span class="badge badge-secondary badge-pill">Codeigniter</span></li>
						        <li class="list-inline-item"><span class="badge badge-secondary badge-pill" >Javascript</span></li>
						        <li class="list-inline-item"><span class="badge badge-secondary badge-pill">Bootstrap</span></li>
						        <li class="list-inline-item"><span class="badge badge-secondary badge-pill">Mysql</span></li>
							</ul>
					    </div>
				    </div><!--//card-->
				</div><!--//isotope-item-->
				
				
		        
			    
	        </div><!--//row-->

        </div><!--//container-->
    </section><!--//section-->
    
        
	<?php $this->load->view('front/include/footer'); ?>