<?php

class Router
{

    function __construct()
    {
        define('INCLUDE_PATH', __DIR__);

        include_once(INCLUDE_PATH . '/connection.php');
        include_once(INCLUDE_PATH . '/Service/service.php');
    }

    function router() {
        if(!empty($_GET['f'])) {
            $router = $_GET['f'];
            $this->$router();
        } 
    }
}

new Router();

function showListDb()
{
    include_once(INCLUDE_PATH . '/Service/service.php');
    $showList = new Service;
    $infoList = $showList->list('SELECT * FROM test_table');
    include_once(INCLUDE_PATH . '/View/view.php');

}

showListDb();
?>

<!-- //Fazer a divisão de camadas. Service, rota e view.  Chamar a service para buscar os dados. A view faz um foreach nos dados já buscados e a rota mata vagabundo. -->