<!DOCTYPE html>
<html>
<head>
  <title>Klasifikasi Teks</title>
  <?php $this->load->view('home/include/css'); ?>
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
  <header class="main-header">
    <?php $this->load->view('home/include/navbar'); ?>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">        
      <!-- Main content -->
      <section class="content">
        <div class="alert bg-light-blue">
            <h4>Klasifikasi Kata Pornografi</h4>
            Untuk menggunakan <b>Klasifikasi Kata Pornografi</b>, mohon salin artikel yang ingin diambil lalu tempel ke dalam form yang sudah tersedia. Pilih tombol <b>Submit</b> untuk melakukan pengecekan apakah artikel yang dipilih <b>LAYAK</b> atau <b class="text-black">TIDAK LAYAK</b>.
        </div>
        <div class="box box-primary box-solid">
          <div class="box-header">
            <h3 class="box-title">Klasifikasi Kata Pornografi</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body pad">
            <?php echo form_open('home/prosesklasifikasi', array('id' => 'form')); ?>
              <textarea class="textarea" name="klasifikasi" placeholder="Tempelkan Artikel disini" style="width: 100%; height: 400px; -size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; resize:none;"></textarea>
              <?php echo form_error('klasifikasi'); ?>
          </div>
        </div>
        
        <div class="row">
          <div class="col-sm-5"></div>
          <div class="col-sm-2">
            <button type="submit" class="btn btn-primary btn-block">SUBMIT</button>
            <?php echo form_close(); ?>
          </div>
          <div class="col-sm-5"></div>
        </div>
        
        <!-- /.col-->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <?php $this->load->view('home/include/footer'); ?>
  </footer>
</div>
<!-- ./wrapper -->

<?php $this->load->view('home/include/js'); ?>
<script>
  $(function () {
    // CKEDITOR.replace('editor1')
    $('.textarea').wysihtml5()
  })

</script>

</body>
</html>
