<?php

require "../vendor/autoload.php";

use Router\Router;
use App\Exceptions\NotFoundException;
use Whoops\Handler\PrettyPageHandler;

$whoops = new \Whoops\Run;
$whoops->pushHandler(new PrettyPageHandler);
$whoops->register();

/*Définition des constantes*/
define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR);
define('DB_NAME', 'marvel');
define('DB_HOST', '127.0.0.1');
define('DB_USER', 'admin');
define('DB_PASSWORD', 'Pw_marvel');

/*mise en route du router*/
$router = new Router($_GET['url']);

/*frontend*/
$router->get('/', 'App\Controllers\BlogController@index');
$router->get('/news', 'App\Controllers\BlogController@news');
$router->get('/films', 'App\Controllers\BlogController@films');
$router->get('/contact', 'App\Controllers\BlogController@contact');
$router->get('/posts/:id', 'App\Controllers\BlogController@show');
$router->get('/tags/:id', 'App\Controllers\BlogController@tag');

/*backend*/
$router->get('/admin/posts', 'App\Controllers\Admin\PostController@index');
$router->post('/admin/posts/delete/:id', 'App\Controllers\Admin\PostController@destroy');
$router->get('/admin/posts/edit/:id', 'App\Controllers\Admin\PostController@edit');
$router->post('/admin/posts/edit/:id', 'App\Controllers\Admin\PostController@update');


/*lancement du routeur*/
try {
    $router->run();
} catch (NotFoundException $e) {
    /*si 404 on catch et on affiche*/
    return $e->error404();
}
