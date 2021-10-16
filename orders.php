<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>New Orders</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="temp/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="temp/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <?php include 'adminHeader.php'; ?>
  <!-- /.navbar -->

  <?php include 'adminSidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">New Orders</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">New Orders</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- card starts here -->
          <div class="col-lg-6">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Order ID : 34</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title"><b>Customer Name :</b></h6>
                <p class="card-text">Gihan Chathuranga Attanayake</p>
                <h6 class="card-title"><b>Address :</b></h6>
                <p class="card-text">245/1,<br>Nilpanagoda</p>
                <h6 class="card-title"><b>Whatsapp No :</b></h6>
                <p class="card-text">0775179587</p>
                <hr>
                <h6 class="card-title"><b>Ordered Item ID :</b></h6>
                <p class="card-text">ITM 1234</p>
                <h6 class="card-title"><b>Quantity :</b></h6>
                <p class="card-text">300 pcs</p>
                <div class="row">
                  <div class="ml-auto btn-group">
                    <button class="btn btn-danger">Reject</button>
                    <button class="btn btn-success">Complete</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- one card ends here -->
          <div class="col-lg-6">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Order ID : 34</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title"><b>Customer Name :</b></h6>
                <p class="card-text">Gihan Chathuranga Attanayake</p>
                <h6 class="card-title"><b>Address :</b></h6>
                <p class="card-text">245/1,<br>Nilpanagoda</p>
                <h6 class="card-title"><b>Whatsapp No :</b></h6>
                <p class="card-text">0775179587</p>
                <hr>
                <h6 class="card-title"><b>Ordered Item ID :</b></h6>
                <p class="card-text">ITM 1234</p>
                <h6 class="card-title"><b>Quantity :</b></h6>
                <p class="card-text">300 pcs</p>
                <div class="row">
                  <div class="ml-auto btn-group">
                    <button class="btn btn-danger">Reject</button>
                    <button class="btn btn-success">Complete</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Order ID : 34</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title"><b>Customer Name :</b></h6>
                <p class="card-text">Gihan Chathuranga Attanayake</p>
                <h6 class="card-title"><b>Address :</b></h6>
                <p class="card-text">245/1,<br>Nilpanagoda</p>
                <h6 class="card-title"><b>Whatsapp No :</b></h6>
                <p class="card-text">0775179587</p>
                <hr>
                <h6 class="card-title"><b>Ordered Item ID :</b></h6>
                <p class="card-text">ITM 1234</p>
                <h6 class="card-title"><b>Quantity :</b></h6>
                <p class="card-text">300 pcs</p>
                <div class="row">
                  <div class="ml-auto btn-group">
                    <button class="btn btn-danger">Reject</button>
                    <button class="btn btn-success">Complete</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="temp/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="temp/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="temp/dist/js/adminlte.min.js"></script>
</body>
</html>
