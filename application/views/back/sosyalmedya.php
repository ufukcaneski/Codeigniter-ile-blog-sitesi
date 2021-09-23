
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
            <h1 class="m-0 text-dark">Sosyal Medya Ayarları</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url("yonetimpaneli") ?>">Anasayfa</a></li>
              <li class="breadcrumb-item active">Sosyal Medya Ayarları</li>
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
                <h3 class="card-title">Sosyal Medya Ayarları Listesi</h3>
                <a href="<?php echo base_url('yonetimpaneli/sosyalmedyaekle') ?>" class="btn btn-primary float-right"> <i class="fas fa-plus"></i> Ekle</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sıra</th>
                    <th>Sosyal Medya Adı</th>
                    <th>Sosyal Medya sef</th>
                    <th>Kullanıcı Adı</th>
                    <th>Durum</th>
                    <th style="width: 120px">İşlemler</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $sayi=1; foreach($bilgi as $bilgi) { ?>
                  <tr>
                    <td><?php echo $sayi++; ?></td>
                    <td><?php echo $bilgi->title; ?></td>
                    <td><?php echo $bilgi->sef; ?></td>
                    <td><?php echo $bilgi->url; ?></td>
                    <td><input 
                    class="toggle_check"
                    data-on="Açık"
                    data-onstyle="success"
                    data-off="Kapalı"
                    data-offstyle="danger"
                    type="checkbox"
                    dataID="<?php echo $bilgi->id; ?>"
                    dataURL="<?php echo base_url('yonetimpaneli/sosyalmedyaset'); ?>"
                    <?php echo ($bilgi->durum == 1) ? "checked" : ""; ?>></td>
                   <td>
                      <a href="<?php echo base_url('yonetimpaneli/sosyalmedyaduzenle/'.$bilgi->id.'') ?>"><button class="btn btn-primary">Düzenle</button></a>
                      <a href="<?php echo base_url('yonetimpaneli/sosyalmedyasil/'.$bilgi->id.'') ?>"><button class="btn btn-danger">Sil</button></a>
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
 <?php $this->load->view('back/include/footer');

