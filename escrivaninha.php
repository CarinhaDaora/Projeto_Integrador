<?php
include "head.php";
include "include/MySql.php";


echo "<h1 class='espacos-h1'>ESCRIVANINHAS</h1>";
echo "<section class='espacos-class'>";
$sql = $pdo->prepare('SELECT * FROM PRODUTOS WHERE idclasse LIKE "6" ');
if ($sql->execute()) {
    $info = $sql->fetchAll(PDO::FETCH_ASSOC);
    foreach ($info as $key => $value) {
    echo "<div>";
    $imagem = $value["imagem"];
    echo '<a href="compras.php"><img style= "width:300px;"src="data:image/jpg;charset=utf8;base64,' . base64_encode($imagem) . '"></a>';
    echo '<h2>'.$value["nome"].'</h2>';
    echo "</div>";   
    }
}
echo "</section>";

include "footer.php"
?>