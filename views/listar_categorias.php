<?php 
require_once "header.php"
?>

<table class ="table table-striped">
<tr>
    <th>Id</th>
    <th>Descritivo</th>
</tr>
<?php
    //percorre toda a matriz com os dados
    foreach($retorno as $dado){
        echo "<tr>";
        echo "<td>{$dado->id_categoria}</td>";
        echo "<td>{$dado->descricao}</td>";
        echo "</tr>";

    }
?>
</table>