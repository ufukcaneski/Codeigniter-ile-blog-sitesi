<footer class="main-footer">
    <strong>Copyright &copy; <?php echo date('Y') ?> <a href="https://ufukcaneski.com" target="_blank">Ufukcan Eski</a>.</strong>
    Türm Hakları Sakldır.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.1
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url("assets/back/") ?>plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url("assets/back/") ?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url("assets/back/") ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url("assets/back/") ?>plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url("assets/back/") ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url("assets/back/") ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url("assets/back/") ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url("assets/back/") ?>plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url("assets/back/") ?>plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo base_url("assets/back/") ?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url("assets/back/") ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url("assets/back/") ?>plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url("assets/back/") ?>plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url("assets/back/") ?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url("assets/back/") ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url("assets/back/") ?>plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url("assets/back/") ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url("assets/back/") ?>dist/js/adminlte.js"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url("assets/back/") ?>dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url("assets/back/") ?>dist/js/demo.js"></script>

<script src="<?php echo base_url("assets/back/") ?>dist/js/bootstrap-toggle.min.js"></script>
<script src="<?php echo base_url("assets/back/") ?>dist/js/bootstrap-toggle.min.js.map"></script>
<script src="<?php echo base_url("assets/back/") ?>dist/js/custom.js"></script>



<script src="<?php echo base_url('assets/ckeditor5_classic/build'); ?>/ckeditor.js"></script>

<script>
    ClassicEditor
				.create( document.querySelector( '.editor1' ), {
					
				toolbar: {
					items: [
						'heading',
						'|',
						'bold',
						'italic',
						'link',
						'bulletedList',
						'numberedList',
						'|',
						'outdent',
						'indent',
						'alignment',
						'|',
						'imageUpload',
						'blockQuote',
						'insertTable',
						'mediaEmbed',
						'undo',
						'imageInsert',
						'findAndReplace',
						'redo',
						'CKFinder',
						'|',
						'code',
						'codeBlock',
						'|',
						'fontSize',
						'fontFamily',
						'fontBackgroundColor',
						'fontColor'
					]
				},
				language: 'tr',
				image: {
					toolbar: [
						'imageTextAlternative',
						'imageStyle:inline',
						'imageStyle:block',
						'imageStyle:side'
					]
				},
				table: {
					contentToolbar: [
						'tableColumn',
						'tableRow',
						'mergeTableCells'
					]
				},
					licenseKey: '',
					
					
					
				} )
				.then( editor => {
					window.editor = editor1;
			
					
					
					
				} )
				.catch( error => {
					console.error( 'Oops, something went wrong!' );
					console.error( 'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:' );
					console.warn( 'Build id: z3xx7pbkhcl4-pgfxubionlvf' );
					console.error( error );
				} );
		
</script>


</body>
</html>