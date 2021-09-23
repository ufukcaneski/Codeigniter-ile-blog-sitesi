
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
            <h1 class="m-0 text-dark">Mesajlar</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url("yonetim") ?>">Anasayfa</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url("yonetim/koseyazarlari") ?>">Mesaj Ayarları</a></li>
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
                <h3 class="card-title">Mesaj Düzenle</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post"">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">İsim Soyisim</label>
                    <input type="text" required class="form-control" value="<?php echo $sonuc->mesajgonderen; ?>" name="adsoyad" id="exampleInputEmail1" placeholder="İsim Soyisim">
                    <input type="hidden" name="id" value="<?php echo $sonuc->id; ?>">
                    <input type="hidden" name="durum" value="<?php echo $sonuc->durum; ?>">
                  </div>

                  <div class="form-group col-sm-6 float-left">
                    <label for="exampleInputEmail1">Mesaj Tarihi</label>
                    <input type="text" disabled class="form-control" value="<?php echo tarih($sonuc->mesajtarih); ?>" name="tarih" id="exampleInputEmail1" placeholder="Reklam Başlangıç Tarihi">
                  </div>

                  <div class="form-group col-sm-6 float-right">
                    <label for="exampleInputEmail1">Mail</label>
                    <input type="text" disabled class="form-control" value="<?php echo $sonuc->mesajmail; ?>" name="mail" id="exampleInputEmail1">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">İp Adresi</label>
                    <input type="text" disabled class="form-control" value="<?php echo $sonuc->ip; ?>" name="ip" id="exampleInputEmail1">
                  </div>

                <!--  <div class="form-group">
                    <label for="exampleInputEmail1">Konu</label>
                    <input type="text" disabled class="form-control" value="<?php echo $sonuc->konu; ?>" name="konu" id="exampleInputEmail1">
                  </div> -->

                  <div class="form-group">
                    <label for="exampleInputEmail1">Mesaj</label>
                    <textarea class="form-control" name="mesaj" rows="10"><?php echo $sonuc->mesajaciklama; ?></textarea>
                  </div>
                  


                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <a href="<?php echo base_url('yonetimpaneli/mesajlar'); ?>" class="btn btn-default">Geri</a>
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