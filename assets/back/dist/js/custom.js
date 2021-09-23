$(document).ready(function () {
  $('.toggle_check').bootstrapToggle();
  $('.toggle_check').change(function () {
    var durum = $(this).prop('checked');
    var id = $(this).attr('dataID');
    var base_url = $(this).attr('dataURL');
    $.post(base_url, { id: id, durum: durum }, function (response) { });
  });
  $('.toggle_checky').bootstrapToggle();
  $('.toggle_checky').change(function () {
    var yorum = $(this).prop('checked');
    var id = $(this).attr('dataID');
    var base_url = $(this).attr('dataURL');
    $.post(base_url, { id: id, yorum: yorum }, function (response) { });
  });
  $('.toggle_checks').bootstrapToggle();
  $('.toggle_checks').change(function () {
    var sondakika = $(this).prop('checked');
    var bakim = $(this).attr('dataID');
    var base_url = $(this).attr('dataURL');
    $.post(base_url, { id: bakim, sondakika: sondakika }, function (response) { });
  });



  $("#example1").DataTable({
    "responsive": true,
    "autoWidth": false,
  });
  $('#example2').DataTable({
    "paging": true,
    "lengthChange": false,
    "searching": ture,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "responsive": true,
  });


});

// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function () {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});

