<?php
class Service
{
    protected $mysqliService;

    public function __construct()
    {
        include_once ('../connection.php');

        $this->mysqliService = new Cnn([
            'host' => 'localhost',
            'username' => 'root',
            'password' => '3005',
            'database' => 'test',
            'port' => 3306,
        ]);
    }

    public function list() {
        $query = 'SELECT * FROM test_table';
        return $this->mysqliService->selectSqlSave($query);
    }
}
?>
