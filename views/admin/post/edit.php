
<div class="container">
    <div class="row py-5">
        <div class="col-8">
            <h1 class="mb-5"><i class="bi bi-pencil-square"></i> Modifier : <?= $params['post']->a_titre; ?></h1>
            <form action="/admin/posts/edit/<?= $params['post']->a_id; ?>" method="POST">
                <!-- #region Identifiant de l'auteur -->
                <div class="form-group mb-4">
                    <label for="auteurs_id" class="mb-1">Identifiant de l'auteur</label>
                    <div class="input-group">
                        <div class="input-group-text">
                            <i class="bi bi-lock-fill"></i>
                        </div>
                        <input id="auteurs_id" type="text" class="form-control" name="auteurs_id" value="<?= $params['post']->a_auteurs_id; ?>" tabindex="-1" readonly>
                    </div>
                </div>
                <!-- #endregion -->
                <!-- #region Titre de l'article -->
                <div class="form-group mb-4">
                    <label for="titre" class="mb-1">Titre de l'article</label>
                    <input id="titre" type="text" class="form-control" name="titre" value="<?= $params['post']->a_titre; ?>" autofocus>
                </div>
                <!-- #endregion -->
                <!-- #region Contenu de l'article -->
                <div class="form-group mb-4">
                    <label for="contenu" class="mb-1">Contenu de l'article</label>
                    <textarea id="contenu" name="contenu" id="" cols="30" rows="10" class="form-control"><?= $params['post']->a_contenu; ?></textarea>
                </div>
                <!-- #endregion -->
                <!-- #region Slug de l'article -->
                <div class="form-group mb-4">
                    <label for="slug" class="mb-1">Slug de l'article</label>
                    <div class="input-group">
                        <div class="input-group-text">
                            <i class="bi bi-lock-fill"></i>
                        </div>
                        <input id="slug" type="text" class="form-control" name="slug" value="<?= $params['post']->a_slug; ?>" tabindex="-1" readonly>
                    </div>
                </div>
                <!-- #endregion -->
                <!-- #region Date de création de l'article -->
                <div class="form-group mb-4">
                    <label for="date_creation" class="mb-1">Date de création de l'article</label>
                    <div class="input-group">
                        <div class="input-group-text">
                            <i class="bi bi-lock-fill"></i>
                        </div>
                        <input id="date_creation" type="text" class="form-control" name="date_creation" value="<?= $params['post']->a_date_creation; ?>" tabindex="-1" readonly>
                    </div>
                </div>
                <!-- #endregion -->
                  <!-- #region Tags associés à l'article -->
                  <div class="form-group mb-4">
                    <label for="tags" class="mb-1">Tags de l'article</label>
                    <select id="tags" class="form-select" multiple aria-label="Select multiple des tags" name="tags[]">
                        <?php foreach ($params['tags'] as $tag) : ?>
                            <option value="<?= $tag->t_id; ?>" <?php foreach ($params['post']->getTags() as $postTag) : ?> <?= ($tag->t_id === $postTag->t_id) ? 'selected' : ''; ?> <?php endforeach; ?>><?= htmlspecialchars($tag->t_nom); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <!-- #endregion -->
                <!-- #region Enregistrer les modifications -->
                <button type="submit" class="btn btn-danger btn-cta" onclick="return confirm('Êtes vous sûr de vouloir mettre à jour cet article ?')"><i class="bi bi-check-circle-fill"></i> Enregistrer les modifications</button>
                <!-- #endregion -->
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-2">
            <a href="/admin/posts" class="btn btn-danger btn-cta"><i class="bi bi-file-text-fill"></i> Revenir aux articles</a>
        </div>
    </div>
</div>