<!DOCTYPE html>
<html>
@include('include.head')
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  @include('include.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('include.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>RAB</h1>
          </div>
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{URL::to('/')}}">Home</a></li>
              <li class="breadcrumb-item active">RAB</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
        <a href="{{URL::to('addRab')}}" class="btn btn-primary">Add RAB</a>
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data RAB</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="center">TASK</th>
                  <th>TANGGAL SERAH</th>
                  <th>PIC SERAH</th>
                  <th>FOTO</th>
                  <th>UPDATE BY</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Trident</td>
                  <td>Trident</td>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td> 4</td>
                </tr>
                <tr>
                  <td>Srident</td>
                  <td>Trident</td>
                  <td>Srident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td> 4</td>
                </tr>
                <tr>
                  <td>Srident</td>
                  <td>Trident</td>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td> 4</td>
                </tr>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('include.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
@include('include.js')
</body>
</html>