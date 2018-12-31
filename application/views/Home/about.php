<!DOCTYPE html>
<html>
<head>
  <title>Klasifikasi Teks</title>
  <?php $this->load->view('Home/include/css'); ?>
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
  <header class="main-header">
    <?php $this->load->view('Home/include/navbar'); ?>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">        
      <!-- Main content -->
      <section class="content">        
        <div class="row">
            <div class="col-sm-12">
                <div class="alert alert-danger">
                    <h4>About</h4>
                    CekKlas adalah Sebuah sarana yang membantu untuk para pembaca untuk mengecek apakah pantas artikel yang dibaca tersebut pantas atau tidak. Karena, kami sangat khawatir dengan banyaknya artikel-artikel yang kurang baik, lalu anak-anak yang masih dibawah umur terkena ancaman bahaya tersebut.
                </div>
            </div>
            <!-- /.col -->
        </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <?php $this->load->view('Home/include/footer'); ?>
  </footer>
</div>
<!-- ./wrapper -->

<?php $this->load->view('Home/include/js'); ?>
<script>
  $(function () {
    $('.textarea').wysihtml5()
  })

</script>

</body>
</html>
