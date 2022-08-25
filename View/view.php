<?php


//Aqui acontecerá a view dos dados.

?>
<table style="font-family:arial, sans-serif;border-collapse: collapse; width: 50%; border:1px solid #dddddd; margin:30px; text-align:center; margin-left: auto;
  margin-right: auto;">

    <tr>
        <td>ID</td>
        <td>Nome</td>
        <td>Data de Nascimento</td>
    </tr>
    <?php 
        $showList = new Service;
        $info = $showList->selectSqlSave('SELECT * from test_table');
        // print_r($info);
        // while ($infoDb = $showlist->serviceQuery('SELECT * FROM test_table') -> fetch_assoc()) {
        ?>
        <tr>
            <td><?php echo $info['id']; ?></td> <!-- Cria-se uma variável (infoDb), pega-se o resultado da query SELECT (selectSql) e aplica o método fetch_assoc, que guardará a informação da query na variável infoDb. -->
            <td><?php echo $info['ds_name']; ?></td>
            <td><?php echo $info['dt_birth']; ?></td>
        </tr>
    <?php //} ?>
</table>


