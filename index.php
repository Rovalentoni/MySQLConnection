<?php

class Router
{

    function __construct()
    {
        define('INCLUDE_PATH', __DIR__);

        include_once(INCLUDE_PATH . '/connection.php');
        include_once(INCLUDE_PATH . '/Service/service.php');

        if (!empty($_GET['f'])) {
            $router = $_GET['f'];
            $this->$router();
        } else $this->showListDb();
    }



    function showListDb()
    {
        include_once(INCLUDE_PATH . '/Service/service.php');
        $showList = new Service;
        $infoList = $showList->list();
        // print_r($infoList);

        include_once(INCLUDE_PATH . '/View/view.php');
    }
}

new Router();


?>

<!-- //Fazer a divisão de camadas. Service, rota e view.  Chamar a service para buscar os dados. A view faz um foreach nos dados já buscados e a rota mata vagabundo. -->