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
 
        ?>
        <tr>
            <td><?php echo $infoList['id']; ?></td> <!-- Cria-se uma variável (infoDb), pega-se o resultado da query SELECT (selectSql) e aplica o método fetch_assoc, que guardará a informação da query na variável infoDb. -->
            <td><?php echo $infoList['ds_name']; ?></td>
            <td><?php echo $infoList['dt_birth']; ?></td>
        </tr>
    <?php //} ?>
</table>


