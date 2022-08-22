<?php

define('INCLUDE_PATH', __DIR__);

include(INCLUDE_PATH . '/connection.php');
include(INCLUDE_PATH . '/Service/service.php');

function showTable()
{
    include(INCLUDE_PATH . '/connection.php');
    include(INCLUDE_PATH . '/Service/service.php');
    include(INCLUDE_PATH . '/View/view.php');
};

showTable();

?>

<!-- //Fazer a divisão de camadas. Service, rota e view.  Chamar a service para buscar os dados. A view faz um foreach nos dados já buscados e a rota mata vagabundo. -->