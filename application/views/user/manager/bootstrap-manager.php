  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('/asset/startbootstrapsbadmin2master/vendor/jquery/jquery.min.js');?>"></script>

  <script src="<?php echo base_url('/asset/ckeditor/ckeditor.js');?>"></script>

  <script src="<?php echo base_url('/asset/startbootstrapsbadmin2master/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('/asset/startbootstrapsbadmin2master/vendor/jquery-easing/jquery.easing.min.js');?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('/asset/startbootstrapsbadmin2master/js/sb-admin-2.min.js');?>"></script>

  <!-- Page level plugins statistik-->
  <script src="<?php echo base_url('/asset/startbootstrapsbadmin2master/vendor/chart.js/Chart.min.js');?>"></script>

  <!-- Page level custom scripts statistik-->
  <script src="<?php echo base_url('/asset/startbootstrapsbadmin2master/js/demo/chart-area-demo.js');?>"></script>
  <script src="<?php echo base_url('/asset/startbootstrapsbadmin2master/js/demo/chart-pie-demo.js');?>"></script>
<?php
  if (isset($jsDataAmbil)) { ?>
  <script type="text/javascript">
    function jsDataAmbil(){
      $.ajax({
        type:"POST",
        url :"<?php echo base_url('ambildatadari/database/berupapassuntukmengatur/ulang/');?>",
        dataType: 'json',
        success: function(data){
          
        }
      })
    }
  </script>
<?php
  } ?>

<?php if (isset($akun)) {
  if ($akun=='edit') { ?>
  <script type="text/javascript">
    function cekPass(){
      var pass1 = document.getElementById('pass1').value;
      var pass2 = document.getElementById('pass2').value;

      if (pass1 == pass2){
        document.getElementById("btn").disabled = false;
      }else{
        document.getElementById("btn").disabled = true;
      }
    }
  </script>
<?php
  }
} ?>
<?php if (isset($pesanan)) {
  if($pesanan == 'insert'){
    ?>
  <!-- insert data tabel pesanan -->
  <script type="text/javascript">
    function pesanan(){
      var trixl = parseInt(document.getElementById('j_3xl').value);
      var twoxl = parseInt(document.getElementById('j_2xl').value);
      var xl = parseInt(document.getElementById('j_xl').value);
      var l = parseInt(document.getElementById('j_l').value);
      var m = parseInt(document.getElementById('j_m').value);
      var s = parseInt(document.getElementById('j_s').value);
      var lain = parseInt(document.getElementById('j_lain').value);
      var tot_psn = trixl + twoxl + xl + l + m + s + lain;
      document.getElementById('j_tot').value = tot_psn;
    }
    function tot_harga(){
      var tot_psn = parseInt(document.getElementById('j_tot').value);
      var hrg_psn = parseInt(document.getElementById('rp_psn').value);
      var tot_hrg = tot_psn * hrg_psn;
      document.getElementById('hrg_tot').value = tot_hrg;
    }
    function blm_byr(){
      var uang_byr = parseInt(document.getElementById('uang_byr').value);
      var t_hrg = parseInt(document.getElementById('hrg_tot').value);
      var harus_byr = t_hrg - uang_byr;
      document.getElementById('b_byr').value = harus_byr;
    }
  </script>
<?php }
} ?>
 <?php if (isset($content)) {
   if ($content == "table") { ?>
  <!-- Page level plugins tabel -->
  <script src="<?php echo base_url('/asset/startbootstrapsbadmin2master/vendor/datatables/jquery.datatables.min.js');?>"></script>
  <script src="<?php echo base_url('/asset/startbootstrapsbadmin2master/vendor/datatables/dataTables.bootstrap4.min.js');?>"></script>
  <!-- Page level custom scripts tabel-->
  <script src="<?php echo base_url('/asset/startbootstrapsbadmin2master/js/demo/datatables-demo.js');?>"></script>
   <?php }
 } ?>

</body>

</html>