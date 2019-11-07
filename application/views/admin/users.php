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
        <h1>Administrator</h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Administrator</a></li>
          <li class="active">Users</li>
        </ol>
      </section>
      <!-- Main content -->
      <?php if($this->session->flashdata('success_msg')){?>
        <div class="alert alert success">
          <?php echo $this->session->flashdata('success_msg');?>
        </div>
        <?php }?>
        <section class="col-lg-12 content">
          <div class="box box-solid">
            <div class="box-header bg-info">
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> User Login</button>
            </div>
            <div class="box-header">
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-default btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools -->
              <i class="fa fa-user"></i>
              <h3 class="box-title">Users</h3>
            </div>

            <!-- /.box-body-->
            <div class="box-footer">
              <div class="row">
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>NO</th>
                        <th>NAMA LENGKAP</th>
                        <th>HANDPHONE</th>
                        <th>LEVEL USER</th>
                        <th>LOGIN CREATED</th>
                        <th>LAST LOGIN</th>
                        <th>AKSI</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $no=1; foreach($data as $u){ ?>
                      <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $u->namalengkap;?></td>
                        <td><?php echo $u->hp;?></td>
                        <td><?php echo $u->level;?></td>
                        <td><?php echo $u->tgl_created;?></td>
                        <td><?php echo $u->tgl_login;?></td>
                        <td>
                        <center>
                          <div class="tooltip-demo">
                            <a data-toggle="modal" data-target="#edit-data<?=$u->id;?>" class="btn btn-warning btn-circle" data-popup="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="<?php echo base_url('admin/users/delete/'.$u->id); ?>" onclick="return confirm('Apakah Anda Yakin Menghapus Data <?=$u->namalengkap;?> ?');" class="btn btn-danger btn-circle" data-popup="tooltip" data-placement="top" title="Hapus Data"><i class="fa fa-trash"></i></a>
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
          <h2 class="modal-title">Kelola Pengguna</h2>
        </div>
        <div class="modal-body">
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
          <h2 class="modal-title">Kelola Pengguna</h2>
        </div>
        <div class="modal-body">
          <form action="<?php echo base_url('admin/users/ubah')?>" method="post" role="form">
            <div class="box-body">
              <div class="form-group">
                <input type="hidden" readonly value="<?=$row->id;?>" class="form-control" id="id" name="id" placeholder="Masukan ID">
              </div>
              <div class="form-group">
                <label for="namalengkap">Nama Lengkap</label>
                <input type="text" class="form-control" autocomplete="off" value="<?=$row->namalengkap;?>" id="namalengkap" name="namalengkap" placeholder="Masukan Nama Lengkap Sesuai KTP">
              </div>
              <div class="form-group">
                <label for="hp">Handphone</label>
                <input type="text" class="form-control" autocomplete="off" value="<?=$row->hp;?>" id="hp" name="hp" placeholder="Masukan No Handphone">
              </div>
              <div class="form-group">
                <label for="kokab">Kota/ Kabupaten</label>
                <input type="text" class="form-control" autocomplete="off" value="<?=$row->kokab;?>" id="kokab" name="kokab" placeholder="Masukan Kota / Kabupaten Tempat Tinggal">
              </div>
              <div class="form-group">
                <label for="kecamatan">Kecamatan</label>
                <input type="text" class="form-control" autocomplete="off" value="<?=$row->kecamatan;?>" id="kecamatan" name="kecamatan" placeholder="Masukan Kecamatan Tempat Tinggal">
              </div>
              <div class="form-group">
                <label for="desa">Desa</label>
                <input type="text" class="form-control" autocomplete="off" value="<?=$row->desa;?>" id="desa" name="desa" placeholder="Masukan Desa Tempat Tinggal">
              </div>
              <div class="form-group">
                <label>Jenis Pengguna</label>
                <select class="form-control" id="level" name="level">
                  <option ><?php echo $row->level;?></option>
                  <option>admin</option>
                  <option>petani</option>
                  <option>konsumen</option>
                </select>
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
