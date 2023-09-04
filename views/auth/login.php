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
    <link rel="icon" href="./assets/img/favicon.png" sizes="any" />

    <link
      rel="stylesheet"
      href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="vendor/twbs/bootstrap-icons/font/bootstrap-icons.min.css"
    />
    
    <link rel="stylesheet" href="assets/css/style.css" />

    <link rel="manifest" href="manifest.json" />
    <!-- #endregion -->
    
    <!-- #region script -->
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/app.js"></script>
    <!-- #endregion -->
    
    <title>Blog-Marvel | Login</title>
  </head>
  <body class="main">
    <main class="main-login d-flex justify-content-center align-items-center">
        <div class="card col-md-6 form-login p-5" style="height:500px;">
            <h1 class="text-light mt-3 card-body">Identifiez-vous</h1>
            <form class="card-body">
                <div class="row mb-3 ">
                  <label for="inputEmail" class="col-3 col-form-label text-light">Email</label>
                  <div class="col-8">
                    <input type="email" class="form-control" id="inputEmail" maxlength="50" placeholder="Veuillez entrez votre adresse e-mail">
                  </div>
                </div>
                <div class="row mb-3 ">
                  <label for="inputPassword" class="col-3 col-form-label text-light">Mot de passe</label>
                  <div class="col-sm-8">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Veuillez entrez votre mot de passe">
                  </div>
                </div>
                
                <div class="row mb-3">
                  <div class="col-10 offset-3 ">
                    <div class="form-check ">
                      <input class="form-check-input" type="checkbox" id="gridCheck">
                      <label class="form-check-label text-light" for="gridCheck">
                        Restez connecté
                      </label>
                    </div>
                  </div>
                </div>
                <div class="d-flex justify-content-center mt-5">
                <button type="submit" class="btn btn-danger col-10">Se connecter</button>
                </div>
              </form>
            </div>
    </main>
  </body>
  </html>