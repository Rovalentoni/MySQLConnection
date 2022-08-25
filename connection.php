<?php

class Cnn
{

    public $mysqli;

    public function __construct($credentials)
    {   try{
        $this->mysqli = new mysqli($credentials['host'], $credentials['username'], $credentials['password'], $credentials['database'], $credentials['port'],);
    } catch(Exception $exc) {
        echo 'Failed, the error is' . $exc;
    }
}

//Método de erro anterior:

        // if (mysqli_connect_errno() != 0) {
        //     echo 'Failed' . $this->mysqli->connect_error;
        // }
    

    
}


    //Quanto se instância uma classe, a função construct é executada, portanto, passar as $credentials aqui resulta nelas sendo aplicadas à construct.

new Cnn([
    'host' => 'localhost',
    'username' => 'root',
    'password' => 3005,
    'database' => 'test',
    'port' => 3306,
]);




