<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>NBank</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../AdminLTE-3.1.0/plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../AdminLTE-3.1.0/dist/css/adminlte.min.css">

  <!-- My style -->
  <link rel="stylesheet" href="../style/radio.css">
  <link rel="stylesheet" href="../style/btn.css">
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="..\glowna\index.php" class="brand-link">
      <img src="..\logo\Przechwytywanie.png" class="brand-image elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">NBank</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      
        <div class="info">
          <a href="#" class="d-block">Artur stachowiak<!-- skrypt --></a>
        </div>
      </div><br>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          
          
          <li class="nav-header">Finanse</li>
          <!-- skrypt -->
          <li class="nav-item">
            <a href="..\czat\index.php" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Uzyskaj pomoc
                <span class="badge badge-info right">2<!-- skrypt --></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://www.wosp.org.pl/fundacja/jak-wspierac-wosp/wesprzyj-online" class="nav-link">
              <i class="nav-icon far " ><svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><title>Heart</title><path d="M256 448a32 32 0 01-18-5.57c-78.59-53.35-112.62-89.93-131.39-112.8-40-48.75-59.15-98.8-58.61-153C48.63 114.52 98.46 64 159.08 64c44.08 0 74.61 24.83 92.39 45.51a6 6 0 009.06 0C278.31 88.81 308.84 64 352.92 64c60.62 0 110.45 50.52 111.08 112.64.54 54.21-18.63 104.26-58.61 153-18.77 22.87-52.8 59.45-131.39 112.8a32 32 0 01-18 5.56z"/></svg></i>
              <p>
                WOŚP
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="przelew.php" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Nowy Przelew
              </p>
            </a>
          </li>
          <li class="nav-header">Regulamin</li>
          <li class="nav-item">
            <a href="../dokumenty/Regulamin_swiadczenia_uslug_w_ramach_prowadzenia_rachunkow_KI.pdf" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Dokumentacja</p>
            </a>
          </li>
    
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">NBank</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="..\glowna\index.php">Strona głowna</a></li>
              <li class="breadcrumb-item active">NBank</li>
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
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h1 class="card-title">Weź kredyt</h1>
                </div>
              </div>
              <div class="card-body">
                <!-- Skrypt -->
                <form action="../skrypty/wezkredyt.php" method="POST">
                  <h3>Kwota kredytu</h3>
                  <input type="range" min="100" max="10000" value="2000" step="100" class="slider" id="myRange1">
                  <h5><span id="demo1"></span> zł</h5>
                  <br>
                  <h3>Ilość rat</h3>
                  <input type="range" min="1" max="30" value="15" class="slider" id="myRange2">
                  <h5><span id="demo2"></span> rat</h5>
                
                  <input type="submit" value="Weź kredyt" class="btn button">
                </form>



              </div>
            </div>
            <!-- /.card -->

            <div class="card">
              <div class="card-header border-0">
                <h3 class="card-title">Ostatnie operacje</h3>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                  <thead>
                  <tr>
                    <th>Odbiorca</th>
                    <th>Nadawca</th>
                    <th>Kwota</th>
                    <th>Data</th>
                  </tr>
                  </thead>
                  <tbody>
                  <!-- skrypt -->
                  <tr>
                    <td>
                      
                      Some Product
                    </td>
                    <td>$13 USD</td>
                    <td>
                      <small class="text-success mr-1">
                        <i class="fas fa-arrow-up"></i>
                        12%
                      </small>
                      12,000 Sold
                    </td>
                    <td>
                      <a href="#" class="text-muted">
                        <i class="fas fa-search"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Another Product
                    </td>
                    <td>$29 USD</td>
                    <td>
                      <small class="text-warning mr-1">
                        <i class="fas fa-arrow-down"></i>
                        0.5%
                      </small>
                      123,234 Sold
                    </td>
                    <td>
                      <a href="#" class="text-muted">
                        <i class="fas fa-search"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Amazing Product
                    </td>
                    <td>$1,230 USD</td>
                    <td>
                      <small class="text-danger mr-1">
                        <i class="fas fa-arrow-down"></i>
                        3%
                      </small>
                      198 Sold
                    </td>
                    <td>
                      <a href="#" class="text-muted">
                        <i class="fas fa-search"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Perfect Item
                      <span class="badge bg-danger">NEW</span>
                    </td>
                    <td>$199 USD</td>
                    <td>
                      <small class="text-success mr-1">
                        <i class="fas fa-arrow-up"></i>
                        63%
                      </small>
                      87 Sold
                    </td>
                    <td>
                      <a href="#" class="text-muted">
                        <i class="fas fa-search"></i>
                      </a>
                    </td>
                  </tr>
                  
                  
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">Stan konta</h3>
                </div>
              </div>
              <div class="card-body">
                <div class="d-flex">
                  <p class="d-flex flex-column">
                    <span class="text-bold text-lg">$18,230.00</span>
                    <!-- skrypt -->
                    <!-- spłata kredytu skrypt -->
                  </p>
                </div>
                <!-- /.d-flex -->

                <div class="position-relative mb-4">
                  <canvas id="sales-chart" height="200"></canvas>
                </div>

                </div>
              </div>
            </div>
            <!-- /.card -->

            
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../AdminLTE-3.1.0/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../AdminLTE-3.1.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="../AdminLTE-3.1.0/dist/js/adminlte.js"></script>

<!-- MY SCRIPTS -->
<script src="../skrypty/kredyt.js"></script>

</body>
</html>