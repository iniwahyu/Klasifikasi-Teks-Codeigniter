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
        <div class="box box-primary box-solid">
          <div class="box-header">
            <h3 class="box-title">Form Check
            </h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body pad">
            <?php echo form_open('home/prosesklasifikasi', array('id' => 'form')); ?>
              <textarea class="textarea" name="klasifikasi" placeholder="Place some text here" style="width: 100%; height: 400px; -size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; resize:none;"></textarea>
              <?php 
              if(form_error('klasifikasi'))
              {
                echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>';
                echo '<script>swal({
                                title: "'. form_error('klasifikasi') .'",
                                text: "'. form_error('klasifikasi') .'",
                                icon: "error",
                                button: "Aww yiss!",
                              });
                      </script>';
              }
              ?>
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
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    // CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })

</script>

</body>
</html>
