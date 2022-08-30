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

    <?php
    foreach ($infoList as $key => $value) {
    ?> <tr>
            <td> <?php echo ($value['id']); ?></td>
            <td> <?php echo ($value['ds_name']);  ?> </td>
            <td> <?php echo ($value['dt_birth']);  ?> </td>
        </tr>
    <?php } ?>

    </tr>
    <?php //} 
    ?>
</table>