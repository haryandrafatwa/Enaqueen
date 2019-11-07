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
          <li class="active">Menu</li>
        </ol>
      </section>
      <!-- Main content -->
      <section class="col-lg-7 content">
        <div class="box box-solid bg-light-blue-gradient">
          <div class="box-header">
            <!-- tools box -->
            <div class="pull-right box-tools">

              <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                <i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools -->

              <i class="fa fa-list"></i>

              <h3 class="box-title">
                Data Menu
              </h3>
            </div>

            <!-- /.box-body-->
            <div class="box-footer no-border">
              <div class="row">

                <!-- ./col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
        </section>
        <section class="col-lg-5 content">
          <div class="box box-solid bg-light-blue-gradient">
            <div class="box-header">
              <!-- tools box -->
              <div class="pull-right box-tools">

                <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
                </div>
                <!-- /. tools -->

                <i class="fa fa-list"></i>

                <h3 class="box-title">
                  Kelola Menu
                </h3>
              </div>

              <!-- /.box-body-->
              <div class="box-footer no-border">
                <div class="row">

                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
          </section>          
          <!-- /.content -->
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
</body>
</html>
