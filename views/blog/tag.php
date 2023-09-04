<div class="bg-hero">
    <div class="hero-tag img-fluid">
        <div class="container-h1">
            <h1 class="display-4 fw-bold ">Tag : <?= ($params['tag']->t_nom); ?></h1>
        </div>
    </div>
</div>
<nav aria-label="breadcrumb" class="container mt-4 mb-4">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/" class="link-dark">Accueil</a></li>
        <li class="breadcrumb-item"><a href="/news" class="link-dark">News</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?= ($params['tag']->t_nom); ?></li>
    </ol>
</nav>

<main class="container">
    <?php foreach ($params['tag']->getPosts() as $key => $post) : ?>
        <div class="card  mt-5 mb-5 card-tag">
            <h2 class="card-header mb-3"><a href="/posts/<?= $post->a_id ?>">
                    <?= htmlspecialchars($post->a_titre); ?></a></h2>
            </h2>
            <div class="card-body ">
                <p><?= htmlspecialchars($post->getExcerpt($limit = 100)); ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</main>