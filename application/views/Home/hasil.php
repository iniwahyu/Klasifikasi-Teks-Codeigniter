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
        <!-- HASIL DALAM TABEL -->
        <div class="col-xs-12">
          <div class="box box-solid box-primary">
            <div class="box-header">
              <h3 class="box-title">Ditemukan Hasil</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                    <th>Jumlah Kata</th>
                    <th>Kata Tidak Pantas</th>
                    <th>Persen</th>
                    <th>Status</th>
                </tr>
                <tr>
                    <td>
                      <?php 
                      $hai = $data;
                      $kata = explode(' ', $hai);
                      $katas = count($kata);
                      echo $katas;
                      ?>
                    </td>
                    <td>
                      <span class="label label-danger">
                      <?php
                      $blocked = array('anal', 'ass', 'ass hole', 'asshole', 'aseksual', 'biseksual', 'banci', 'bencong', 'bugil', 'blonde', 'bitch', 'cump', 'coli', 'coly', 'dildo', 'fuck', 'fucking', 'gay', 'gigolo', 'get the fuck', 'gtfo', 'homo', 'horny', 'horni', 'itil', 'jalang', 'jablay', 'jembut', 'kontol', 'kentu', 'kenthu', 'kimcil', 'lesbi', 'lonte', 'lonthe', 'loli', 'loly', 'maho', 'memek', 'masturbasi', 'mendesah', 'motherfucker', 'mother fucker', 'ngaceng', 'ngentot', 'ngewe', 'ngocok', 'onani', 'orgasme', 'pejuh', 'peju', 'peli', 'pentil', 'pelacur', 'porno', 'porn', 'pussy', 'seks', 'sex', 'shit', 'shut the fuck up', 'stfu', 'telanjang', 'tete', 'tetek', 'tempik', 'what the fuck', 'what the hell', 'wtf');
                      $hasil = $data;
                      $matched = preg_match_all("/(".implode('|', $blocked).")/ie", $hasil, $matches);
                      echo $matched;
                      ?>
                      </span>
                    </td>
                    <td>
                      <?php
                      $persen = $matched/(int)$katas*100;
                      echo $persen . "%";
                      ?>
                    </td>
                    <td>
                      <?php
                      if($persen <= 20)
                      {
                        echo '<button class="btn btn-success btn-sm">Layak</button>';
                      }
                      if($persen >= 20 && $persen <= 100)
                      {
                        echo '<button class="btn btn-danger btn-sm">Tidak Layak</button>';
                      }
                      ?>
                    </td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- HASIL DALAM TABEL -->
        <!-- ARTIKEL ASLI -->
        <div class="col-md-6">
            <div class="artikel-asli box box-solid box-primary">
                <div class="box-header">
                    <h3 class="box-title">Artikel Asli</h3>
                </div>
                <div class="box-body">
                    <p><?php $asli = $data; echo $data; ?></p>
                </div>
            </div>
        </div>
        <!-- ARTIKEL ASLI -->

        <!-- ARTIKEL PERUBAHAN -->
        <div class="col-md-6">
            <div class="box box-solid box-primary">
                <div class="box-header">
                    <h3 class="box-title">Pengecekan Artikel</h3>
                </div>
                <div class="box-body">
                    <p>
                      <?php 
                      $hasil = $data;
                      $matched = preg_match_all("/(".implode('|', $blocked).")/i", $hasil, $matches);
                      $filter = preg_replace("/(".implode('|', $blocked).")/i", '<span style="color: red;">***</span>', $hasil);
                      echo $filter; 
                      ?>
                    </p>
                </div>
            </div>
        </div>
        <!-- ARTIKEL PERUBAHAN -->

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
