<?php
class Cnn
{
    public $mysqli;

    public function __construct($credentials)
    {
        $this->mysqli = new mysqli(
            $credentials['host'], 
            $credentials['username'], 
            $credentials['password'], 
            $credentials['database'], 
            $credentials['port']
        );

        if ($this->mysqli->connect_errno) {
            die(json_encode(["error" => "Database connection failed: " . $this->mysqli->connect_error]));
        }
    }

    public function selectSqlSave($selectParam)
    {
        $infoDb = [];
        $selectObj = $this->mysqli->query($selectParam);
        while ($info = $selectObj->fetch_assoc()) {
            $infoDb[] = $info;
        }
        return $infoDb;
    }
}
?>
