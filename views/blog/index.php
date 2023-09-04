<div class="bg-hero">
  <div class="hero-main">
    <div class="container-h1 w-100">
      <h1 class="fw-bold">Bienvenu sur le blog Marvel</h1>
    </div>
  </div>
</div>

<nav aria-label="breadcrumb" class="mt-4 mb-4 container">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active text-dark" aria-current="page">Accueil</li>
  </ol>
</nav>
<hr class="container mb-5">
<main>
  <section class="container pb-5">
    <h2 class="text-uppercase text-center mb-5">News</h2>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 justify-content-center">
      <?php foreach ($params['posts'] as $key => $post) : ?>
        <div class="col-12 col-md-8 col-lg-6 col-xl-4">
          <div class="card h-100">
            <a href="/posts/<?= $post->a_id; ?>" title="<?= htmlspecialchars($post->a_titre); ?>">
              <img src="/public/img/news-1.webp" class="card-img-top" alt="image de la news">
              <div class="card-body">
                <h3 class="card-title">
                  <!--Affichage du titre du post-->
                  <a href="/posts/<?= $post->a_id ?>">
                    <?= htmlspecialchars($post->a_titre); ?>
                  </a>
                </h3>
                <!--Affichage du contenu du post-->
                <p class="card-text">
                  <?= htmlspecialchars($post->getExcerpt($limit = 200)); ?>
                </p>
              </div>
              <div class="card-footer d-flex justify-content-between">
                <!--Affichage de la date de création du post-->
                <div>
                  <i class="bi bi-clock"></i>
                  <small><?= htmlspecialchars($post->a_date_creation); ?></small>
                </div>
                <div>
                  <i class="bi bi-card-text"></i>
                <!--Affichage du titre du tag du post-->
                  <small class="link-tag">
                    <?php foreach ($post->getTags() as $tag) : ?>
                      <a href="/tags/<?= $tag->t_id ?>">
                        <?= htmlspecialchars($tag->t_nom); ?>
                      </a>
                    <?php endforeach; ?>
                  </small>
                </div>
              </div>
            </a>
          </div>
        </div>
      <?php endforeach; ?>


  </section>

  <hr class="container mb-5">

  <!-- Section avec les sorties -->
  <section class="container mb-5">
    <h2 class="text-uppercase text-center mb-5">Dernières Sorties</h2>
    <div class="row">
      <div class="col">
        <div class="card border-0" style="max-width: 300px;">
          <img src="/public//img/sortie-5.webp" class="rounded img-fluid" alt="black panther 2" style="object-fit: cover; height: 400px;">
        </div>
      </div>
      <div class="col">
        <div class="card rounded border-0" style="max-width: 300px;">
          <img src="/public//img/sortie-2.webp" class="rounded img-fluid" alt="spiderman across de spider-verse" style="object-fit: cover; height: 400px;">
        </div>
      </div>
      <div class="col">
        <div class="card rounded border-0" style="max-width: 300px;">
          <img src="/public//img/sortie-3.webp" class="rounded img-fluid" alt="ant-man" style="object-fit: cover; height: 400px;">
        </div>
      </div>
    </div>
  </section>


  <!--Section avec un call to action pour s'inscrire à la newsletter-->
  <section class="call-to-action py-5">
    <div class="col-md-12 d-flex flex-column align-items-center">
      <h3 class="text-light mb-4">Rejoignez nos newsletters</h3>
      <p class="mb-3 mb-md-0 text-light fw-bold">Inscrivez-vous sans tarder</p>
      <!--<input class="form-control w-25 d-flex" type="email" placeholder="Veuillez entrer votre adresse e-mail" aria-label="email" aria-describedby="call to action">-->
      <div class="input-group-append">
        <button class="mt-3 btn btn-outline-light" type="submit" value="Submit">Cliquez</button>
      </div>
  </section>

  <!--Section avec les bandes annonces-->
  <section class="container">
    <h2 class="text-uppercase text-center mt-5 mb-5">Bande Annonce</h2>
    <div class="row">
      <div class="col-md-8 col-lg-4 mx-auto text-center">
        <div class="card" style="max-width: 30rem;">
          <iframe class="card" style="height: 20rem;" src="https://www.youtube.com/embed/WxA-eZ72FsQ?controls=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          <div class="card-body">
            <h3 class="card-title text-center fs-5">Les gardiens de la galaxie 3</h3>
          </div>
        </div>
      </div>

      <div class="col-md-8 col-lg-4 mx-auto text-center">
        <div class="card" style="max-width: 30rem;">
          <iframe class="card" style="height: 20rem;" src="https://www.youtube.com/embed/wV-Q0o2OQjQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          <div class="card-body">
            <h3 class="card-title text-center fs-5">Avengers endgame</h3>
          </div>
        </div>
      </div>

      <div class="col-md-8  col-lg-4 mx-auto text-center">
        <div class="card" style="max-width: 30rem;">
          <iframe class="card" style="height: 20rem;" src="https://www.youtube.com/embed/rDCTb9Gp2qk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          <div class="card-body">
            <h3 class="card-title text-center fs-5">Iron Man</h3>
          </div>
        </div>
      </div>
    </div>
  </section>

  <hr class="container mb-5 mt-5">

</main>