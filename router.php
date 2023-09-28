<?php
class Router
{
    function __construct()
    {
        define('INCLUDE_PATH', __DIR__);
        include_once(INCLUDE_PATH . '/Service/Service.php');

        if (!empty($_GET['f'])) {
            $router = $_GET['f'];
            $this->$router();
        } else $this->showListDb();
    }

    function showListDb()
    {
        $showList = new Service;
        $infoList = $showList->list();
        echo json_encode($infoList);
    }
}

new Router();
?>
