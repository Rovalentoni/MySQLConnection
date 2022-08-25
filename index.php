<?php

Class Router {

function __construct() {
define('INCLUDE_PATH', __DIR__);

include_once(INCLUDE_PATH . '/connection.php');
include_once(INCLUDE_PATH . '/Service/service.php');
}


}

new Router();

function showListDb() {
    include_once (INCLUDE_PATH . '/View/view.php');
    $showList = new Service;
    $infoDb = $showList->selectSqlSave('SELECT * from test_table');
    

}

showListDb();
?>

<!-- //Fazer a divisão de camadas. Service, rota e view.  Chamar a service para buscar os dados. A view faz um foreach nos dados já buscados e a rota mata vagabundo. -->