
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
              <li class="breadcrumb-item active">Mesajlar</li>
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
                <h3 class="card-title">Mesaj Listesi</h3>
              </div>
              <div class="bg-dark text-center container-fuild" style="box-shadow: 0px 10px 20px grey;">
              <li class="nav-link">İletişimden gönderilen mesajlar burada gözükür.</li>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sıra</th>
                    <th>İsim Soyisim</th>
                    <th>Mail</th>
                    <th>Mesaj Tarihi</th>
                    <th>Durum</th>
                    <th style="width: 120px">İşlemler</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $sayi=1; foreach($bilgi as $bilgi) { ?>
                  <tr>
                    <td><?php echo $sayi++; ?></td>
                    <td><?php echo $bilgi->mesajgonderen; ?></td>
                    <td><?php echo $bilgi->mesajmail; ?></td>
                    <td><?php echo tarih($bilgi->mesajtarih); ?></td>
                    <td><input 
                    class="toggle_check"
                    data-on="Okundu"
                    data-onstyle="success"
                    data-off="Okunmadı"
                    data-offstyle="danger"
                    type="checkbox"
                    dataID="<?php echo $bilgi->id; ?>"
                    dataURL="<?php echo base_url('yonetimpaneli/mesajset'); ?>"
                    <?php echo ($bilgi->durum == 1) ? "checked" : ""; ?>></td>
                   <td>
                  
                                            <!-- Button trigger modal -->
                      <!--      <a href="" id="<?php echo $goster = $bilgi->id; ?>" type="button" dataID="<?php echo $bilgi->id; ?>" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                            <i class="fas fa-eye"></i>
                            </a> -->
                            <!-- Modal -->
                            
                       <!--     <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle"><?php echo $bilgi->mesajgonderen; ?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <?php echo $bilgi->mesajaciklama; ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                                </div>
                            </div>
                            </div> -->
                      

                      <a href="<?php echo base_url('yonetimpaneli/mesajduzenle/'.$bilgi->id.'') ?>" title="Mesajı Görüntüle"><button class="btn btn-primary"><i class="fas fa-eye"></i></button></a>
                      <a href="<?php echo base_url('yonetimpaneli/mesajsil/'.$bilgi->id.'') ?>"><button class="btn btn-danger">Sil</button></a>
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

