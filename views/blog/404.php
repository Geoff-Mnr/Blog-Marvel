<!DOCTYPE html>
<html lang="fr">

<head>
  <!-- #region meta -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Erreur 404" />
  <!-- #endregion -->

  <!-- #region link -->
  <link rel="icon" href="/public/favicon.ico" sizes="any" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../vendor/twbs/bootstrap-icons/font/bootstrap-icons.min.css" />

  <link rel="stylesheet" href="../public/css/style.css" />

  <link rel="manifest" href="manifest.json" />
  <link rel="stylesheet" href="<? SCRIPTS . 'css' . DIRECTORY_SEPARATOR . 'app.js'; ?>" />
  <!-- #endregion -->

  <!-- #region script -->
  <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="<?= SCRIPTS . 'js' . DIRECTORY_SEPARATOR . 'app.js'; ?>"></script>
  <!-- #endregion -->

  <title>Blog-Marvel</title>
</head>

<body>
  <div class="d-flex align-items-center justify-content-center vh-100">
    <div class="card mb-3 border-0" style="max-width: 600px;">
      <div class="row g-0 justify-content-center">
        <div class="col-4 col-md-4 d-flex align-items-center justify-content-center">
          <img src="/public/img/groot-404.webp" class="img-fluid rounded-start h-75" alt="image de groot">
        </div>
        <div class="col-md-8 d-flex align-items-center justify-content-center">
          <div class="card-body d-flex align-items-center justify-content-center flex-column">
            <h1 class="card-title display-1 fw-bold">404</h1>
            <h2 class="fs-3"> <span class="text-danger">Opps!</span> Page non trouvée.</h2>
            <p class="lead mb-5">La page que vous cherchez n'existe pas</p>
            <a href="/" class="btn btn-404">Retour sur le blog</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>