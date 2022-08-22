<?php

//Aqui acontecerá a busca dos dados. 


$createSql = $mysqli -> query('INSERT INTO test_table (ds_name, dt_birth, ds_gender) VALUES (Rodrigo, 1998-05-30, Male)');
$updateSql = $mysqli -> query('UPDATE test_table SET ds_name = Gabriel, ds_birth = 1989-09-19, ds_gender = female WHERE ds_name = "Rodrigo"');
$deleteSql = $mysqli -> query ('DELETE FROM test_table WHERE ds_name = Rodrigo AND ds_gender = male OR dt_birth = 1998-05-30');
$selectSql = $mysqli -> query('SELECT * FROM test_table');

    //Salvar as informações do SELECT numa variável. 

           while ($infoDb = $selectSql -> fetch_assoc()) { //"While isso conseguir ser executado, prosseguir. O fetch_assoc lê uma row por vez e salva na variável como uma array associativa, até a última."
            // print_r($infoDb);
           } 


?>