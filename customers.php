<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | DataTables</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="temp/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="temp/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="temp/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="temp/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="temp/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
   <?php include 'adminHeader.php'; ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="temp/index3.html" class="brand-link">
      <img src="temp/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="temp/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <?php include 'adminSidebar.php'; ?>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Customer Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Customer Details</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All of the registered customer details</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Mobile No.</th>
                    <th>Email</th>
                    <th>Address</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>CUS 001</td>
                    <td>Gihan Chathuranga Attanayake</td>
                    <td>0775179587</td>
                    <td> gihanchaturanga98@gmail.com</td>
                    <td>245/1, Nilpanagoda</td>
                  </tr>
                  <tr>
                    <td>CUS 001</td>
                    <td>Gihan Chathuranga Attanayake</td>
                    <td>0775179587</td>
                    <td> gihanchaturanga98@gmail.com</td>
                    <td>245/1, Nilpanagoda</td>
                  </tr>
                  <tr>
                    <td>CUS 001</td>
                    <td>Gihan Chathuranga Attanayake</td>
                    <td>0775179587</td>
                    <td> gihanchaturanga98@gmail.com</td>
                    <td>245/1, Nilpanagoda</td>
                  </tr>
                  <tr>
                    <td>CUS 001</td>
                    <td>Gihan Chathuranga Attanayake</td>
                    <td>0775179587</td>
                    <td> gihanchaturanga98@gmail.com</td>
                    <td>245/1, Nilpanagoda</td>
                  </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Platform(s)</th>
                    <th>Mobile No.</th>
                    <th>Address</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Developed by : Revotech Solutions</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="temp/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="temp/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="temp/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="temp/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="temp/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="temp/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="temp/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="temp/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="temp/plugins/jszip/jszip.min.js"></script>
<script src="temp/plugins/pdfmake/pdfmake.min.js"></script>
<script src="temp/plugins/pdfmake/vfs_fonts.js"></script>
<script src="temp/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="temp/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="temp/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="temp/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="temp/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
