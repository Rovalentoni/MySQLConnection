





<?php 


    $cnn = new mysqli('127.0.0.1', 'root', '3005','test', 3306);

    $host = '127.0.0.1';
    $username = 'root';
    $password = '3005';
    $database = 'test';
    $port = 3306;

    if (mysqli_connect_errno()) {
        echo 'Failed to connect';
        exit();
    } else 'Connection Success';

   $Result = $cnn->query('INSERT INTO test_table (
        ds_name,
        dt_birth,
        ds_country,
        do_gender,
        nr_age
        ) VALUES (
            "Rodrigo",
            "1998-05-30",
            "Brazil",
            "M",
            24
        )');

        $cnn->query('SELECT * FROM test_table');

    echo ("resultado:".$Result);

    

   // $connection = new mysqli ('localhost', 'username(root if default)','password (none if default)', 'NomeDoBanco','1234 (porta)' );
            //ao querer fazer uma query disso, usa-se o método da instância da classe my sqli

?>