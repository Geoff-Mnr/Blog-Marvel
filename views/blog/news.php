<div class="bg-hero">
    <div class="hero-news img-fluid">
        <div class="container-h1">
            <h1 class="fw-bold">News</h1>
        </div>
    </div>
</div>




<nav aria-label="breadcrumb" class="container mt-4 mb-4">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/" title="retourner à l'Accueil" class="link-dark">Accueil</a></li>
    <li class="breadcrumb-item active" aria-current="page">News</li>
  </ol>
</nav>
<hr class="container mb-5">

<main class="mb-5">
  <section class="container pb-5">
    <h2 class="text-uppercase text-center mb-5">News</h2>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 justify-content-center">
      <?php foreach ($params['posts'] as $key => $post) : ?>
        <div class="col-12 col-md-8 col-lg-6 col-xl-4">
          <div class="card h-100">
            <a href="/posts/<?= $post->a_id; ?>" alt="lien vers la news">
              <img src="/public/img/news-1.webp" class="card-img-top" alt="image de la news">
              <div class="card-body">
                <h3 class="card-title">
                  <a href="/posts/<?= $post->a_id ?>">
                    <?= htmlspecialchars($post->a_titre); ?>
                  </a>
                </h3>
                <p class="card-text">
                  <?= htmlspecialchars($post->getExcerpt($limit = 200)); ?>
                </p>
              </div>
              <div class="card-footer d-flex justify-content-between">
                <div>
                  <i class="bi bi-clock"></i>
                  <small><?= htmlspecialchars($post->getCreatedAt()); ?></small>
                </div>
                <div>
                  <i class="bi bi-card-text"></i>
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
    </div>



  </section>

  <nav aria-label="navigation pour la pagination" class="d-flex justify-content-center">
    <ul class="pagination">

      <li class="page-item"><a class="page-link link-dark" href="#">Précédent</a></li>
      <li class="page-item active" aria-current="page">
        <a class="page-link bg-danger border-0" href="#">1</a>
      </li>
      <li class="page-item"><a class="page-link link-dark" href="#">2</a></li>
      <li class="page-item"><a class="page-link link-dark" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link link-dark" href="#">Suivant</a>
      </li>
    </ul>
  </nav>
</main>