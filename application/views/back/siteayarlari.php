
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
            <h1 class="m-0 text-dark">Site Ayarları</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url("yonetim") ?>">Anasayfa</a></li>
              <li class="breadcrumb-item active">Site Ayarları</li>
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
        <div class="row">
        
          <div class="col-12">
            
            <!-- /.card -->
            
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Site Ayarları Listesi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sıra</th>
                    <th>Site Başlık</th>
                    <th>Site Url</th>
                    <th>Site Mail</th>
                    <th>İşlemler</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $sayi=1; foreach($bilgi as $bilgi) { ?>
                  <tr>
                    <td><?php echo $sayi++; ?></td>
                    <td><?php echo $bilgi->title; ?></td>
                    <td><?php echo $bilgi->url; ?></td>
                    <td><?php echo $bilgi->sitemail; ?></td>
                    <td>
                      <a href="<?php echo base_url('yonetimpaneli/ayarduzenle/'.$bilgi->id.'') ?>"><button class="btn btn-primary">Düzenle</button></a>
                    </td>
                  </tr>
                  <?php } ?>
                  </tbody>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>



    

  
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php $this->load->view('back/include/footer'); ?>


