<!DOCTYPE html>
<html lang="fr">

<head>
  <!-- #region meta -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="bienvenue sur le blog marvel" />

  <meta property="og:title" content="" />
  <meta property="og:type" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta name="theme-color" content="#fafafa" />
  <!-- #endregion -->

  <!-- #region link -->
  <link rel="icon" href="/public/favicon.ico" sizes="any" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="/vendor/twbs/bootstrap/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="/vendor/twbs/bootstrap-icons/font/bootstrap-icons.min.css" />

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
  <header class=" col-12 col-md-12 d-flex flex-wrap align-items-center justify-content-center  py-3 mb-1 ">
    <div class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
      <img src="/public/img/logo.webp" width="auto" height="60" alt="logo du blog">
    </div>

    <ul class="menu nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
      <li><a href="/" class="lien px-md-4">Accueil</a></li>
      <li><a href="/news" class="lien px-2 px-md-3 px-lg-4">News</a></li>
      <li><a href="/films" class="lien px-2 px-md-3 px-lg-4">Films</a></li>
      <li><a href="/contact" class="lien px-2 px-md-3 px-lg-4">Contact</a></li>
      <li><a href="/login" class="lien px-2  px-md-3 px-lg-4">Login</a></li>
    </ul>

    <div class="social col-md-3 text-end">
      <a href="https://www.facebook.com/MarvelBEFR/" target="_blank" aria-label="lien facebook" class="me-2">
        <i class="bi bi-facebook text-body link-danger" style="font-size: 25px;"></i>
      </a>
      <a href="https://twitter.com/Marvel" target="_blank" aria-label="lien twitter" class="me-2">
        <i class="bi bi-twitter text-body link-danger" style="font-size: 25px;"></i>
      </a>
      <a href="https://www.instagram.com/marvel/" target="_blank" aria-label="lien instagram" class="me-2">
        <i class="bi bi-instagram text-body link-danger" style="font-size: 25px;"></i>
      </a>
      <a href="" target="_blank" aria-label="lien tiktok" class="">
        <i class="bi bi-tiktok text-body link-danger" style="font-size: 25px;"></i>
      </a>
    </div>

  </header>

  <?= $content ?>

  <div class="bg-footer">
    <footer class="py-5 container">
      <div class="row justify-content-center ">
        <div class="col-md-3 col-sm-6">
          <span class="text-dark fs-5 fw-bold mb-2"">Section</span>
        <ul class=" nav flex-column">
            <li class="nav-item mb-2"><a href="/" class="link-footer">Accueil</a></li>
            <li class="nav-item mb-2"><a href="/news" class="link-footer">News</a></li>
            <li class="nav-item mb-2"><a href="/films" class="link-footer">Film</a></li>
            <li class="nav-item mb-2"><a href="/contact" class="link-footer">Contact</a></li>
            <li class="nav-item mb-2"><a href="/login" class="link-footer">Login</a></li>
            </ul>
        </div>

        <div class="col-md-3 col-sm-6">
          <span class="text-dark fs-5 fw-bold mb-2"">Sources</span>
        <ul class=" nav flex-column">
            <li class="nav-item mb-2"><a href="www.allociné.fr" class="link-footer"># Allociné</a></li>
            <li class="nav-item mb-2"><a href="www.marvel.com" class="link-footer"># Marvel</a></li>
            <li class="nav-item mb-2"><a href="www.youtube.com" class="link-footer"># Youtube</a></li>
            </ul>
        </div>

        <div class="col-md-6 col-sm-12">
          <form>
            <span class="text-dark text-dark fs-5 fw-bold mb-2">Inscrivez-vous à nos newsletters</span>
            <p class="text-dark">Tenez-vous au courant des dernières sorties</p>
            <div class="d-flex w-100 gap-2">
              <label for="newsletter1" class="visually-hidden">Adresse e-mail</label>
              <input id="newsletter1" type="text" class="form-control" placeholder="Adresse e-mail">
              <button class="btn" type="button">Cliquez</button>
            </div>
          </form>
        </div>
      </div>

      <div class="d-flex justify-content-between py-4 my-4 border-top">
        <p class="text-dark">&copy; 2023 | Conçu par Geoff Mnr</p>
        <ul class="list-unstyled d-flex">
          <li class="ms-3"><a href="https://www.facebook.com/MarvelBEFR/" target="_blank" aria-label="lien facebook"><i class="bi bi-facebook link-social" style="font-size: 25px;"></i></a></li>
          <li class="ms-3"><a href="https://twitter.com/Marvel" target="_blankr" aria-label="lien twitter"><i class="bi bi-twitter link-social" style="font-size: 25px;"></i></a></li>
          <li class="ms-3"><a href="https://www.instagram.com/marvel/" target="_blank" aria-label="lien instagram"><i class="bi bi-instagram link-social" style="font-size: 25px;"></i></a></li>
          <li class="ms-3"><a href="https://www.tiktok.com/@marvelstudios?lang=fr" target="_blank" aria-label="lien tiktok"><i class="bi bi-tiktok link-social" style="font-size: 25px;"></i></a></li>
        </ul>
      </div>

  </div>
  </div>
</body>

</html>