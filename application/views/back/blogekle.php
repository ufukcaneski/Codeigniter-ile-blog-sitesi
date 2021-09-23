
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
              <li class="breadcrumb-item"><a href="<?php echo base_url("yonetimpaneli/bloglar") ?>">Blog Ayarları</a></li>
              <li class="breadcrumb-item active">Ekle</li>
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
                <h3 class="card-title">Blog Ayarları</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="<?php echo base_url('yonetimpaneli/blogekle2') ?>" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Blog Başlık</label>
                    <input type="text" required class="form-control" name="title" id="exampleInputEmail1" placeholder="">
                  </div>

                  

                  <div class="form-group">
                    <label for="exampleInputEmail1">Blog Yazı</label>
                    <textarea class="form-control editor1" name="icerik" rows="20"></textarea>
                  </div>

                 
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Blog Kategori</label>
                    <select class="custom-select" name="katid">
                    <?php $bilgi = kategoriliste(); foreach ($bilgi as $bilgi) { ?>
                    <option value="<?php echo $bilgi->id; $bilgi->title ?>"><?php echo $bilgi->title; ?></option>
                    <?php } ?>
                    </select>
                  </div>

                  <div class="form-group">
                    <!-- <label for="customFile">Custom File</label> -->
                    <label for="exampleInputEmail1">Blog Fotoğrafı</label>
                    <div class="custom-file">
                      <input type="file" required name="resim" class="custom-file-input" id="customFile">
                      <label class="custom-file-label" for="customFile">Fotoğraf Seçiniz</label>
                    </div>
                  </div>





                  <div class="form-group">
                    <label for="exampleInputEmail1">Etiket</label>
                    <input type="text" class="form-control" name="etiket" id="exampleInputEmail1" placeholder="Etiket için virgül kullanın örn: teknoloji,spor,ekenomi">
                  </div>
                  


                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <a href="<?php echo base_url('yonetimpaneli/bloglar'); ?>" class="btn btn-default">Vazgeç</a>
                <button type="submit" class="btn btn-primary float-right">Ekle</button>
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