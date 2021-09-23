<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url("yonetimpaneli") ?>" class="brand-link">
      
      <span class="brand-text font-weight-light">Yönetim Paneli</span>
    </a>
    <?php $info=$this->session->userdata('info'); ?>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url("assets/front/") ?>img/profile.jpeg" class="img-circle elevation-2" alt="User Image">
        </div>
        
        
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->

                <li class="nav-item" style="background-color:transparent;">
                  
              <a href="#" class="nav-link text-light" style="background-color:transparent">
                <p class="text-light" style="padding-right: 20px">
             
                  <?php echo $info->adsoyad; ?>
                  <i class="right fas fa-angle-left"></i>
                  
                </p>
                
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?php echo base_url('') ?>" target="_blank" class="nav-link">
                    <p>Siteye Git</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url('yonetimpaneli/cikis') ?>" class="nav-link">
                    <p>Çıkış</p>
                  </a>
                </li>
                
              </ul>
            
      
            
            
            
          </ul>
          
        
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

               


          <li class="nav-item has-treeview">
            <a href="<?php echo base_url('yonetimpaneli') ?>" class="nav-link <?php active(''); ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Anasayfa
              </p>
            </a>
          </li>
          

            <li class="nav-item has-treeview <?php openmenu('siteayarlari'); openmenu2('sosyalmedya'); ?>">
            <a href="#" class="nav-link <?php active('siteayarlari'); active2('sosyalmedya') ?>">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Genel Ayarlar
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('yonetimpaneli/siteayarlari') ?>" class="nav-link <?php active('siteayarlari'); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Site Ayarları</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('yonetimpaneli/sosyalmedya') ?>" class="nav-link <?php active('sosyalmedya'); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sosyal Medya Ayarları</p>
                </a>
              </li>
              
            </ul>
            </li>

          
            


          <li class="nav-header text-light text-center">Blog Ayarları
          <hr style="border-top: 2px solid white; border-radius: 10px">
          </li>
          <li class="nav-item has-treeview">
          
          <a href="<?php echo base_url('yonetimpaneli/bloglar') ?>" class="nav-link <?php active('bloglar'); ?>">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                Bloglar
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="<?php echo base_url('yonetimpaneli/kategoriler') ?>" class="nav-link <?php active('kategoriler'); ?>">
                <i class="nav-icon fas fa-indent"></i>
                <p>
                  Kategoriler
                </p>
              </a>
            </li>


         

          <li class="nav-header text-light text-center">İletişim Ayarları
          <hr style="border-top: 2px solid white; border-radius: 10px">
          </li>

          <li class="nav-item has-treeview">
          <a href="<?php echo base_url('yonetimpaneli/mesajlar') ?>" class="nav-link <?php active('mesajlar'); ?>">
              <i class="nav-icon fas fa-envelope"></i>
              <p>
                Mesajlar
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
          <a href="<?php echo base_url('yonetimpaneli/yorumlar') ?>" class="nav-link disabled <?php active('yorumlar'); ?>" aria-disabled="true">
              <i class="nav-icon fas fa-comments"></i>
              <p>
                Yorumlar
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
          <a href="<?php echo base_url('yonetim/reklam') ?>" class="nav-link disabled <?php active('reklam'); ?>" aria-disabled="true">
              <i class="nav-icon fas fa-tv"></i>
              <p>
                Reklam
              </p>
            </a>
          </li>
          


          
         
          
          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>