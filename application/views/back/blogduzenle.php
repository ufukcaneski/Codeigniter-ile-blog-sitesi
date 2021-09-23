
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
            <h1 class="m-0 text-dark">Blog Ayarları</h1>
          </div><!-- /.col -->
          
          <div class="col-sm-6">
            
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url("yonetimpaneli") ?>">Anasayfa</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url("yonetimpaneli/bloglar") ?>">Blog Ayarları</a></li>
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
      <?php echo $this->session->flashdata('durum'); ?>
          <!-- left column -->

            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Blog Ayarları</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post"  action="<?php echo base_url('yonetimpaneli/blogguncelle') ?>" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Blog Adı</label>
                    <input type="text" required class="form-control" value="<?php echo $bilgi->title; ?>" name="title" id="exampleInputEmail1" placeholder="">
                    <input type="hidden" name="id" value="<?php echo $bilgi->id; ?>">
              <!--      <input type="hidden" name="durum" value="<?php echo $bilgi->durum; ?>"> -->
                  </div>

                  <div class="form-group">
                    <label for="deneme">Blog Yazı</label>
                    <textarea class="form-control editor1" required name="icerik" rows="10"><?php echo $bilgi->icerik; ?></textarea>
                  </div>


                  

                
                  
                  <div class="form-group">
                    <label for="kategori">Blog Kategori</label>
                    <select class="custom-select" id="kategori" name="katid">
                    <?php  $bilgik = kategoriliste(); foreach($bilgik as $bilgik) if ($bilgik->id == $bilgi->katid) { ?>
                    <option selected value="<?php echo $bilgik->id; ?>"><?php echo $bilgik->title; ?></option>
                    <?php }else { ?>
                      <option value="<?php echo $bilgik->id; ?>"><?php echo $bilgik->title; ?></option>
                    <?php }?>
                    </select>
                  </div>

                  <div style="margin-top:50px" class="form-group col-sm-6 float-left">
                    <!-- <label for="customFile">Custom File</label> -->
                    <label for="exampleInputEmail1">Blog Fotoğrafı</label>
                    <div class="custom-file">
                      <input type="file" name="resim" class="custom-file-input" id="customFile">
                      <label class="custom-file-label" for="customFile">Fotoğraf Seçiniz</label>
                    </div>
                  </div>

                  <div class="form-group col-6 .col-md-4 float-left d-flex justify-content-center">
                    <!-- <label for="customFile">Custom File</label> -->
                    <img class="img-fluid rounded" style="box-shadow: 2px 10px 20px grey; height: 200px" src="<?php echo base_url($bilgi->resim); ?>" alt="">
                  </div>
                  

                  <div class="form-group">
                    <label for="exampleInputEmail1">Etiket</label>
                    <input type="text" class="form-control" value="<?php echo $bilgi->etiket; ?>" name="etiket" id="exampleInputEmail1" placeholder="Etiket için virgül kullanın örn: teknoloji,spor,ekenomi">
                  </div>
                  


                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <a href="<?php echo base_url('yonetimpaneli/bloglar'); ?>" class="btn btn-default">Vazgeç</a>
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