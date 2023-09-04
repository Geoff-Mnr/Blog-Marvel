<div class="bg-hero">
    <div class="hero-show img-fluid">
        <div class="container-h1">
            <h1 class="display-4"><?= ($params['post']->a_titre); ?></h1>
        </div>
    </div>
</div>

<nav aria-label="breadcrumb" class="container mt-4 mb-4">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/" class="link-dark">Accueil</a></li>
        <li class="breadcrumb-item"><a href="/news" class="link-dark">News</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?= ($params['post']->a_titre); ?></li>
    </ol>
</nav>

<main class="container d-flex justify-content-center">
    <div class="card border-0 mt-5 mb-5">
        <h2 class="card-header rounded mb-3">
            <?= ($params['post']->a_titre); ?>
        </h2>
        <div class="card-body ">
            <span class="card-title"><?php foreach ($params['post']->getTags() as $tag) : ?>
                    <a href="/tags/<?= $tag->t_id ?>" class="btn button-tag fs-6 mb-4 ">
                        <?= htmlspecialchars($tag->t_nom); ?>
                    </a>
                <?php endforeach; ?>
            </span>
            <p class="card-text"><?= ($params['post']->a_contenu); ?></p>
            <div>
                <i class="bi bi-clock"></i>
                <small>Créé le : <?= ($params['post']->getCreatedAt()); ?></small>
            </div>
            <a href="/" class="btn mt-5 button-return"><i class="bi bi-arrow-return-left"></i><span> Retour au blog</span></a>
        </div>
    </div>
</main>