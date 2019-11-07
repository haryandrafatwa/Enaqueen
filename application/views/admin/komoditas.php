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
        <h1>Setting</h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Setting</a></li>
          <li class="active">Komoditas</li>
        </ol>
      </section>
      <!-- Main content -->
      
        <section class="col-lg-12 content">
          <div class="box box-solid">
            <div class="box-header bg-info">
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Komoditas</button>
            </div>
            <div class="box-header">
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-default btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools -->
              <i class="fa fa-leaf"></i>
              <h3 class="box-title">Komoditas</h3>
            </div>

            <!-- /.box-body-->
            <div class="box-footer">
              <div class="row">
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>NO</th>
                        <th>NAMA</th>
                        <th>DESKRIPSI</th>
                        <th>FOTO</th>
                        <th>AKSI</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $no=1; foreach($data as $u){ ?>
                      <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $u->nama;?></td>
                        <td><?php echo $u->deskripsi;?></td>
                        <td><?php echo $u->foto;?></td>
                        <td>
                        <center>
                          <div class="tooltip-demo">
                            <a data-toggle="modal" data-target="#edit-data<?=$u->id;?>" class="btn btn-warning btn-circle" data-popup="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="<?php echo base_url('admin/komoditas/delete/'.$u->id); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data Komoditas <?=$u->nama;?> ?');" class="btn btn-danger btn-circle" data-popup="tooltip" data-placement="top" title="Hapus Data"><i class="fa fa-trash"></i></a>
                          </div>
                        </center>
                        </td>
                      </tr>
                    <?php }?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </section>
    </div>
    <!-- /.content -->
    <!-- /.content-wrapper -->
    <?php $this->load->view('admin/layout/footer')?>  
    <!-- Add the sidebar's background. This div must be placed
    immediately after the control sidebar -->
   <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->
  <?php $this->load->view('admin/layout/tail')?>  

  <!-- Modal Tambah Data -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Kelola Komoditas</h2>
        </div>
        <div class="modal-body">
          <form action="<?php echo base_url('admin/komoditas/submit')?>" method="post" role="form">
            <div class="box-body">
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Komoditas">
              </div>
              <div class="form-group">
                <label for="deskripsi">deskripsi</label><br>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="7"></textarea>
              </div>
              <div class="form-group">
                <label for="foto">Foto</label>
                <input type="text" class="form-control" id="foto" name="foto" placeholder="Masukan Foto Komoditas">
              </div>
              
            </div>
            <div class="box-footer">
              <button type="submit" name="btnsave" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--Retrieve Data-->
  <?php foreach($data as $row){ ?>
  <!-- Modal Ubah Data -->
  <div class="modal fade" id="edit-data<?=$row->id;?>" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Kelola Komoditas</h2>
        </div>
        <div class="modal-body">
          <form action="<?php echo base_url('admin/komoditas/ubah')?>" method="post" role="form">
            <div class="box-body">
              <div class="form-group">
                <input type="hidden" readonly value="<?=$row->id;?>" class="form-control" id="id" name="id">
              </div>
              <div class="form-group">
                <label for="namalengkap">Nama</label>
                <input type="text" class="form-control" autocomplete="off" value="<?=$row->nama;?>" id="nama" name="nama">
              </div>
              <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" rows="7" id="deskripsi" name="deskripsi"><?php echo $row->deskripsi; ?></textarea>
              </div>
              <div class="form-group">
                <label for="foto">Foto</label>
                <input type="text" class="form-control" autocomplete="off" value="<?=$row->foto;?>" id="foto" name="foto">
              </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
              <button type="submit" name="btnupdate" class="btn btn-primary">Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php }?>

</body>
</html>
