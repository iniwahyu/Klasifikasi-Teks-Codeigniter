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
            <div class="col-md-12">
                <div class="alert alert-danger">
                    <h4>Selamat Datang</h4>
                    CekKlas adalah Sebuah sarana yang membantu untuk para pembaca untuk mengecek apakah pantas artikel yang dibaca tersebut pantas atau tidak. Karena, kami sangat khawatir dengan banyaknya artikel-artikel yang kurang baik, lalu anak-anak yang masih dibawah umur terkena ancaman bahaya tersebut.
                </div>
            </div>
            <!-- /.col -->
            
            <!-- AWAL COL -->
            <div class="col-md-6">
                <div class="box box-primary box-solid">
                    <div class="box-header">
                        <h3 class="box-title">Tips Mengecek Artikel</h3>
                    </div>
                    <div class="box-body">
                        <ul>
                            <li>Artikel tersebut memiliki kata tidak pantas kurang dari 20%.</li>
                            <li>Membahas sesuai fakta/penelitian yang telah dilakukan oleh para peneliti.</li>
                            <li>Tidak menimbulkan sebuah polemik.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- AKHIR COL -->

            <!-- AWAL COL -->
            <div class="col-md-6">
                <div class="box box-primary box-solid">
                    <div class="box-header">
                        <h3 class="box-title">Fitur Kami</h3>
                    </div>
                    <div class="box-body">
                        <ul>
                            <li>Lebih dari 50 kata tidak pantas yang telah kami miliki.</li>
                            <li>Penggunaan yang mudah dan tidak membingungkan.</li>
                            <li>Bisa digunakan oleh seluruh kalangan.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- AKHIR COL -->
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
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    // CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })

</script>

</body>
</html>
