<!DOCTYPE html>
<html lang="en"><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Panel Giriş</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700;display=fallback">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="login-page" style="min-height: 496.391px;">
<div class="login-box">
  <div class="login-logo">
    <a href=""><b>BTU</b>Öğrenci Şifre Sistemi</a>
  </div>
  <div class="card">
    <div class="card-body login-card-body">

      <form action="panel.php" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Admin ID">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Admin Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
          </div>
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Giriş Yap</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<script src="/plugins/jquery/jquery.min.js"></script>
<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/dist/js/adminlte.min.js"></script>
</body></html>