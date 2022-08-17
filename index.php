<?php

$host = '127.0.0.1';
$username = 'root';
$password = '3005';
$database = 'test';
$port = 3306;

// $mysqli = new mysqli('127.0.0.1', 'root', '3005','test', 3306);


$mysqli = new mysqli($host, $username, $password, $database, $port);

$sqlResult = $mysqli->query('SELECT * FROM test_table');

// $infoDb = $sqlResult->fetch_assoc();

?>

<table style="font-family:arial, sans-serif;border-collapse: collapse; width: 50%; border:1px solid #dddddd; margin:30px; text-align:center; margin-left: auto;
  margin-right: auto;" >

    <tr>
        <td>ID</td>
        <td>Nome</td>
        <td>Data de Nascimento</td>
    </tr>
    <?php while($infoDb = $sqlResult->fetch_assoc()) { ?>
    <tr>
        <td><?php echo $infoDb['id']; ?></td> <!-- Cria-se uma variável (infoDb), pega-se o resultado da query SELECT (sqlResult) e aplica o método fetch_assoc, que guardará a informação da query na variável infoDb. -->
        <td><?php echo $infoDb['ds_name']; ?></td>
        <td><?php echo $infoDb['dt_birth']; ?></td>
    </tr>
<?php } ?>
</table>

<?php

while ($infoDb = $sqlResult->fetch_assoc() /*leu mamou.*/)

    if (mysqli_connect_errno()) {
        echo ('Failed to connect' . $mysqli->connect_error);
        exit();
    } else echo 'Connection Success';


$mysqli->query('SELECT * FROM test_table');













/*
echo ("resultado:" . $Result);



 $connection = new mysqli ('localhost', 'username(root if default)','password (none if default)', 'NomeDoBanco','1234 (porta)' );
ao querer fazer uma query disso, usa-se o método da instância da classe my sqli


 $Result = $mysqli->query('INSERT INTO test_table (
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
         */
?>