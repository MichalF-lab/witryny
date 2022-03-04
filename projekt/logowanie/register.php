<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Rejestracja</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../AdminLTE-3.1.0/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../AdminLTE-3.1.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../AdminLTE-3.1.0/dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page" style="background-color: #454d55">
<div class="register-box">
  <div class="register-logo">
    <b>N</b>Bank
  </div>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Zarejestruj użytkownika</p>


      <!-- Imie, nazwisko email (Powtorz) haslo (powtorz) data_urodzenia miato(select) plec(radio) regulamin(terms)-->
      <form action="send-to-support.php" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Podaj pesel">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Podaj imie">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Podaj nazwisko">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Podaj hasło">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Powtórz hasło">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        
        <div class="input-group mb-3">
          <input type="radio" class="form-control" name="plec"> Mężczyzna<br>
          <input type="radio" class="form-control" name="plec"> Kobieta
          <div class="input-group-append">
          </div>
        </div>


        <div class="input-group mb-3">
          <input type="date" class="form-control" placeholder="Podaj date urodzenie">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="file" require accept="image/png, image/jpeg" multiple>
          <br>wyślij zdjęcia dowodu
        </div>

        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               Zgadzam się na <a href="../dokumenty/Regulamin_swiadczenia_uslug_w_ramach_prowadzenia_rachunkow_KI.pdf">warunki użytkowania</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Rejestracja</button>
          </div>
          <!-- /.col -->
        </div>
        
      </form>

      <a href="index.php" class="text-center">Mam już konto</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="../AdminLTE-3.1.0/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../AdminLTE-3.1.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../AdminLTE-3.1.0/dist/js/adminlte.min.js"></script>
</body>
</html>
