<?php

namespace Router;

use App\Exceptions\NotFoundException;
use Router\Route;

class Router
{
    public $url;
    public $routes = [];

    public function __construct(string $url)
    {
        $this->url = trim($url, '/');
    }

    /** 
    * Enregistrement des routes triées par Request Method
    * Ici en GET.
    *
    * @param string $path
    * Le chemin demandé.
    * 
    * @param string $action
    *L'action (fonction) que l'on va appeler.
    *
    * @return void
    */
    
    public function get(string $path, string $action)
    {
        $this->routes['GET'][] = new Route($path, $action);
    }


      /** 
    * Enregistrement des routes triées par Request Method
    * Ici en POST.
    *
    * @param string $path
    * Le chemin demandé.
    * 
    * @param string $action
    *L'action (fonction) que l'on va appeler.
    *
    * @return void
    */

    public function post(string $path, string $action)
    {
        $this->routes['POST'][] = new Route($path, $action);
    }

    public function run()
    {
        foreach ($this->routes[$_SERVER['REQUEST_METHOD']] as $route)
         {
            if ($route->matches($this->url)){
                return $route->execute();
            }
        }
        throw new NotFoundException(("La page demandée est introuvable"));
    }
}