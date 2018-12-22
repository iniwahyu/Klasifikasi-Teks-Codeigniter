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
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-danger">
                    <h4>Selamat Datang</h4>
                    CekKlas adalah Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui, enim repellendus? Soluta molestias maiores, facere ea ipsam dignissimos vel? Blanditiis laudantium recusandae voluptatibus earum voluptates repellat in, voluptate quo illum!
                </div>
            </div>
            <!-- /.col -->

            <div class="col-md-4 col-sm-6">
                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">History Hari Ini</span>
                        <span class="info-box-number">
                            <?php
                            date_default_timezone_set('Asia/Jakarta');
                            $date = date('Y-m-d');
                            $history = $this->db->get('history');
                            echo $history->num_rows();
                            ?>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
            <!-- AKHIR COL -->

            <div class="col-md-4 col-sm-6">
                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">History</span>
                        <span class="info-box-number">
                            <?php
                            $history = $this->db->get('history');
                            echo $history->num_rows();
                            ?>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
            <!-- AKHIR COL -->

            <div class="col-md-4 col-sm-6">
                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">History</span>
                        <span class="info-box-number">
                            <?php
                            $history = $this->db->get('history');
                            echo $history->num_rows();
                            ?>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
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
    <?php $this->load->view('home/include/footer'); ?>
  </footer>
</div>
<!-- ./wrapper -->

<?php $this->load->view('home/include/js'); ?>
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
