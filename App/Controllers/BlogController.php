<?php

namespace App\Controllers;

use App\Models\Tag;
use App\Models\Post;
/*Cette classe hérite de controller*/

class BlogController extends Controller
{
    public function index()
    {
        
        
        $posts = (new Post($this->getDB()))->getLatestPosts();
        return $this->view('blog.index', compact('posts'));
    }

    public function films()
    {
        return $this->view('blog.films');
    }

    public function news()
    {
        $f_prefix = 'a_';
        $posts = (new Post($this->getDB()))->all($f_prefix);

        return $this->view('blog.news', compact('posts'));
    }

    public function contact()
    {
        return $this->view('blog.contact');
    }

    public function show(int $id)
    {
        $f_prefix = 'a_';
        $post = (new Post($this->getDB()))->findById($id, $f_prefix);

        return $post ? $this->view('blog.show', compact('post')) : $this->view('blog.404');
    }


    /*retourne la vue située dans le dossier blog tag.php*/
    public function tag(int $id)
    {
        $f_prefix = 't_';
        $tag = (new Tag($this->getDB()))->findByid($id, $f_prefix);
        /*si le tag n'existe pas*/
        return $tag ? $this->view('blog.tag', compact('tag')) : $this->view('blog.404');
    }

}
