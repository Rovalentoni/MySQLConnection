<?php

class Cnn
{

    public $mysqli;

    public function __construct($credentials)
    {
        try {
            $this->mysqli = new mysqli($credentials['host'], $credentials['username'], $credentials['password'], $credentials['database'], $credentials['port'],);
        } catch (Exception $exc) {
            echo 'Failed, the error is' . $exc;
        }
    }

    //Método de erro anterior:

    // if (mysqli_connect_errno() != 0) {
    //     echo 'Failed' . $this->mysqli->connect_error;
    // }

    public function givenQuery($param)
    {
        $this->mysqli->query($param);
    }

    public function selectSqlSave($selectParam)
    {
        // $infoDb = [];

        $selectObj = $this->mysqli->query($selectParam);
        while ($info = $selectObj->fetch_assoc()) {
            $infoDb = $info;
        }
        return $infoDb;
    }
}


    //Quanto se instância uma classe, a função construct é executada, portanto, passar as $credentials aqui resulta nelas sendo aplicadas à construct.
