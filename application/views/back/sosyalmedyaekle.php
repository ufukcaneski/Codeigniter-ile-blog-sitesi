
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
              <li class="breadcrumb-item"><a href="<?php echo base_url("yonetimpaneli") ?>">Anasayfa</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url("yonetimpaneli/sosyalmedya") ?>">Sosyal Medya Ayarları</a></li>
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
                <h3 class="card-title">Sosyal Medya Ayarları</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="<?php echo base_url('yonetimpaneli/sosyalmedyaekle2') ?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sosyal Medya Adı</label>
                    <input type="text" required class="form-control" name="title" id="exampleInputEmail1" placeholder="">
                  </div>
                  
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kullanıcı Adı</label>
                    <input type="text required" required name="url" class="form-control" id="exampleInputPassword1" placeholder="Kullanıcı adınızı yazınız.">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <a href="<?php echo base_url('yonetimpaneli/sosyalmedya'); ?>" class="btn btn-default">Vazgeç</a>
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