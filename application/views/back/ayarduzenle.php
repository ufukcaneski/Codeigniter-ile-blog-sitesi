
<?php $this->load->view('back/include/header'); ?>
  <!-- Main Sidebar Container -->
  <?php $this->load->view('back/include/leftmenu'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url("yonetim") ?>">Anasayfa</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url("yonetim/siteayarlari") ?>">Site Ayarları</a></li>
              <li class="breadcrumb-item active">Düzenle</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->


    <section class="content">
      <div class="container-fluid">

          <!-- left column -->

            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Site Ayarları</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="<?php echo base_url('yonetimpaneli/ayarguncelle') ?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Site Başlık</label>
                    <input type="text" class="form-control" value="<?php echo $bilgi->title; ?>" name="sitebaslik" id="exampleInputEmail1" placeholder="Siteniz için isim giriniz.">
                    <input type="hidden" name="id" required value="<?php echo $bilgi->id; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Site Mail</label>
                    <input type="email" name="sitemail" required value="<?php echo $bilgi->sitemail; ?>" class="form-control" id="exampleInputPassword1" placeholder="mail">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Site Bilgi</label>
                    <textarea class="form-control"  name="sitebilgi"><?php echo $bilgi->sitebilgi; ?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Site Anahtar Kelimler (aralarına virgül(,) koyarak yazınız.)</label>
                    <input type="text" name="sitekey" value="<?php echo $bilgi->sitekey; ?>" class="form-control" id="exampleInputPassword1" placeholder="Siteniz için anahtar kelimeler">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <a href="<?php echo base_url('yonetimpaneli/siteayarlari'); ?>" class="btn btn-default">Vazgeç</a>
                <button type="submit" class="btn btn-primary float-right">Güncelle</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
<br>

    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php $this->load->view('back/include/footer');