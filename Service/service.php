<?php

//Aqui acontecerá a busca dos dados. 

class Service
{

    protected $mysqliService;

    public function __construct()

    {
        include_once (INCLUDE_PATH . '/connection.php');

        $this->mysqliService = new Cnn([
            'host' => 'localhost',
            'username' => 'root',
            'password' => 3005,
            'database' => 'test',
            'port' => 3306,
        ]);
    }


    public function serviceQuery($query)
    {
       return $this->mysqliService->mysqli->query($query);
    }

    //Salvar as informações do SELECT numa variável. 

    public function selectSqlSave($queryParam)
    {   $info = [];
        $selectObj = $this->mysqliService->mysqli -> query ($queryParam);
        
        while ($infoDb = $selectObj->fetch_assoc()) { //"While isso conseguir ser executado, prosseguir. O fetch_assoc lê uma row por vez e salva na variável como uma array associativa, até a última."
            //  print_r($infoDb);
            $info[] = $infoDb;
        }
        return $info;
    }   
}



/*Funções básicas (exemplos) de cada uma das operações.

INSERT

$insertQuery = 'INSERT INTO test_table (ds_name, dt_birth, ds_gender) VALUES (Rodrigo, 1998-05-30, Male)';

UPDATE 

$updateQuery = 'UPDATE test_table SET ds_name = Gabriel, ds_birth = 1989-09-19, ds_gender = female WHERE ds_name = "Rodrigo"';


DELETE 

$deleteQuery = 'DELETE FROM test_table WHERE ds_name = Rodrigo AND ds_gender = male OR dt_birth = 1998-05-30';


SELECT

$selectQuery = 'SELECT * FROM test_table';

*/