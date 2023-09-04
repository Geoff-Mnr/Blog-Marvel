<?php

namespace App\Controllers\Admin;

use App\Models\Post;
use App\Controllers\Controller;
use App\Models\Tag;

class PostController extends Controller
{
    /*Récupérer l'ensemble des <posts>*/
    public function index()
    {
        $f_prefix = 'a_';
        $posts = (new Post($this->getDB()))->all($f_prefix);
        return $this->view('admin.post.index', compact('posts'));
    }


    /*post à envoyer au modèle pour supression*/

    public function destroy(int $id)
    {
        $f_prefix = 'a_';
        $post = new Post($this->getDB());
        $result = $post->destroy($id, $f_prefix);

        if ($result) {
            return header('Location: /admin/posts');
        }
    }

    /*permet de passer à la vue le bon post à mofifier en fonction de l'id*/
    public function edit(int $id)
    {
        $f_prefix = 'a_';
        $ft_prefix = 't_';
        $post = (new Post($this->getDB()))->findById($id, $f_prefix);
        $tags = (new Tag($this->getDB()))->all($ft_prefix, $filter = false);
        return $this->view('admin.post.edit', compact('post', 'tags'));
    }

    /**
     * Post à envoyer au modèle pour
     * mise à jour.
     * 
     * @param $id
     * Identifiant du post à envoyyer
     * à la méthode update du model
     * pour mise à jour.
     */
    public function update(int $id)
    {
        $f_prefix = 'a_';
        $post = new Post($this->getDB());
        $tags = array_pop($_POST);
        $result = $post->update($id, $_POST, $f_prefix, $tags);

        if ($result) {
            return header('Location: /admin/posts');
        }
    }
}
