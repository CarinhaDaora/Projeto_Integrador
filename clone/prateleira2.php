<?php
include "head2.php";
include "../include/MySql.php";

echo "<h1 class='espacos-h1'>PRATELEIRAS</h1>";
echo "<section class='espacos-class'>";
$sql = $pdo->prepare('SELECT * FROM PRODUTOS WHERE idclasse LIKE "1" ');
if ($sql->execute()) {
    $info = $sql->fetchAll(PDO::FETCH_ASSOC);
    foreach ($info as $key => $value) {
    echo "<div>";
    $imagem = $value["imagem"];
    echo '<a href="#"><img style= "width:300px;"src="data:image/jpg;charset=utf8;base64,' . base64_encode($imagem) . '"></td>';
    echo '<h2>'.$value["nome"].'</h2>';
    echo "</div>";   
    }
}
echo "</section>";

include "footer2.php"
?>