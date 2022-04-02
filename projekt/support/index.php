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
  <!-- Toastr -->
  <link rel="stylesheet" href="../../plugins/toastr/toastr.min.css">

  <!-- Errors -->


  <!-- My style -->
  <link rel="stylesheet" href="../style/radio.css">
  <link rel="stylesheet" href="../style/btn.css">
  <link rel="stylesheet" href="../style/font.css">
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
    <a class="brand-link">
      <img src="..\logo\Przechwytywanie.png" class="brand-image elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">NBank</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="info">
          <a href="#" class="d-block">
            <!-- skrypt -->
            <?php
              require_once('../script/show_name.php');
            ?>
          </a>
        </div>
      </div>
      </div>

      <!-- Sidebar Menu -->
      
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
              <li class="breadcrumb-item active">NBank</li>
              <li class="breadcrumb-item"><a href="..\script\log_out.php">Wyloguj</a></li>
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
                  <h1 class="card-title">Czat</h1>
                </div>
              </div>
              <div class="card-body">
                <!-- Skrypt -->
                <?php require_once('../script/sup_chat.php'); ?>
              </div>
              <div class="card-footer">
                <form action="..\script\sup_send_mes_supp.php" method="post">
                  <div class="input-group">
                    <input type="text" name="message" placeholder="Napisz wiadomość ..." class="form-control">
                    <span class="input-group-append">
                      <button type="submit" class="btn button">Wyślij</button>
                    </span>
                  </div>
                    <input type="hidden" name="pes" value=<?php echo $pesguest['pes']; ?>>
                </form>
              </div>
            </div>
            <!-- /.card -->
          </div>

        <?php if(isset($login))
        {
            echo <<< LABEL
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header border-100">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">
                    <b>Stan konta klienta:</b>
        LABEL; 
                      require_once('../script/sup_show_cash.php');
                echo <<< LABEL
                  </h3>
                </div>
              </div> 
                <!-- /.d-flex -->
            </div>               

            <div class="card">
              <div class="card-header border-0">
                <h3 class="card-title">Ostatnie operacje klienta</h3>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                  <thead>
                  <tr>
                    <th>Nadawca</th>
                    <th>Odbiorca</th>
                    <th>Kwota</th>
                    <th>Data</th>
                  </tr>
                  </thead>
                  <tbody>
                  <!-- skrypt -->
            LABEL;
                    require_once('../script/sup_show_last_operation.php');
                    echo <<< LABEL
                  </tbody>
                </table>
              </div>
            </div>   
          </div>
          <!-- /.col-md-6 -->
          LABEL;
        }
        ?>
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

<!-- Toastr -->
<script src="../../plugins/toastr/toastr.min.js"></script>
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>

<!-- MY SCRIPTS -->
<script src="../script/radio.js"></script>

<script>

</script>

<?php require_once("..\script\warning.php"); ?>

</body>
</html>
