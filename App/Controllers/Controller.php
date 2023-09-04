<?php

namespace App\Controllers;

use Database\DBconnection;


/*Cette classe ne sera jms instanciée*/

abstract class Controller
{
    public function __construct(
        protected DBconnection $db
    ) {
    }
    /*permet de passer le contenu de la vue dans le fichier layout.php qui va contenir le header et le footer*/
    protected function view(string $path, $params = null)
    {
        ob_start();
        $path = str_replace('.', DIRECTORY_SEPARATOR, $path);
        require VIEWS . $path . '.php';
        if ($path === 'blog\404') {
            http_response_code(404);
            die();
        }
        $content = ob_get_clean();
        require VIEWS . 'layout.php';
    }



    protected function getDB(): DBconnection
    {
        return $this->db;
    }
}
