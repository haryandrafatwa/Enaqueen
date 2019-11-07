<!DOCTYPE html>
<html>
<?php $this->load->view('admin/layout/head')?>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <?php $this->load->view('admin/layout/header')?>  
    <!-- Left side column. contains the logo and sidebar -->
    <?php $this->load->view('admin/layout/leftbar')?>  

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->

      <section class="content-header">

        <h1>
          Administrator
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Administrator</a></li>
          <li class="active">Users</li>
        </ol>
      </section>
      <!-- Main content -->

      <section class="col-lg-12 content">

        <div class="box box-solid">

          <div class="box-header">
            <!-- tools box -->
            <div class="pull-right box-tools">
              <button type="button" class="btn btn-default btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                <i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools -->
              <i class="fa fa-user"></i>
              <h3 class="box-title">
                Users
              </h3>
            </div>

            <div class="box box-primary">
              <form action="<?php echo base_url('admin/users/submit')?>" method="post" role="form">
                <div class="box-body">
                  <div class="form-group">
                    <label for="namalengkap">Nama Lengkap</label>
                    <input type="text" class="form-control" id="namalengkap" name="namalengkap" placeholder="Masukan Nama Lengkap Sesuai KTP">
                  </div>
                  <div class="form-group">
                    <label for="nohp">Handphone</label>
                    <input type="text" class="form-control" id="nohp" name="nohp" placeholder="Masukan No Handphone">
                  </div>
                  <div class="form-group">
                    <label for="kokab">Kota/ Kabupaten</label>
                    <input type="text" class="form-control" id="kokab" name="kokab" placeholder="Masukan Kota / Kabupaten Tempat Tinggal">
                  </div>
                  <div class="form-group">
                    <label for="kec">Kecamatan</label>
                    <input type="text" class="form-control" id="kec" name="kec" placeholder="Masukan Kecamatan Tempat Tinggal">
                  </div>
                  <div class="form-group">
                    <label for="desa">Desa</label>
                    <input type="text" class="form-control" id="desa" name="desa" placeholder="Masukan Desa Tempat Tinggal">
                  </div>
                  <div class="form-group">
                    <label>Jenis Pengguna</label>
                    <select class="form-control" id="jenisuser" name="jenisuser">
                      <option>admin</option>
                      <option>petani</option>
                      <option>konsumen</option>
                    </select>
                  </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" name="btnUpdate" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>

            <?php $this->load->view('admin/layout/footer')?>  
  <!-- Add the sidebar's background. This div must be placed
   immediately after the control sidebar -->
   <div class="control-sidebar-bg"></div>
 </div>
</section>
<!-- ./wrapper -->

<?php $this->load->view('admin/layout/tail')?>  



</body>
</html>
