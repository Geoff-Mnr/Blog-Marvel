





  <main class="d-flex">
    <div class="d-flex flex-column flex-shrink-0 p-3 bg-light vh-100" style="width: 350px;">
      <a href="/" class="d-flex flex-column align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <img src="/public/img/logo.webp" class="w-50" alt="">
        <h1 class="fs-4">Administration</h1>
      </a>
      <hr>
      <ul class="mb-auto">
        <li class="d-flex">
            <a href="#home" class="btn btn-dark btn-cta col-10 d-flex justify-content-center"><i class="bi bi-house me-2s"></i>home</a>
        </li>
      </ul>
      <hr>
      <div class=" d-flex justify-content-center">
        <div class="btn btn-dark">Se deconnecter</div>
      </div>
    </div>

    <div class="container vh-100 p-3">
      <h2 class="fs-4 mb-5">Gérez vos articles</h2>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titre</th>
            <th scope="col">publié le</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($params['posts'] as $key => $post) : ?>
            <tr>
              <th scope="row"><?= $post->a_id; ?></th>
              <td><?= $post->a_titre; ?></td>
              <td><?= $post->getCreatedAT(); ?></td>
              <td class="d-flex">
                <a href="/admin/posts/edit/<?= $post->a_id; ?>" class="btn btn-danger btn-cta mx-1">Modifier</a>
                <form action="/admin/posts/delete/<?= $post->a_id; ?>" method="POST">
                  <button type="submit" onclick="return confirm('Etes vous sûr de vouloir supprimer cet article')" class="btn btn-dark btn-cta">supprimer</button>
                </form>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

  </main>
