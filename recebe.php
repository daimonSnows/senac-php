<?php
$usuario = $_POST['usuario'];
$repeticao = $_POST['repeticoes'];

//$repeticao = $repeticao > 1000 ? 1000 : $repeticao;

for($i = 0 ; $i < $repeticao && $repeticao < 1000 ; $i++ ){

    echo "$usuario<br>";

    //if ($i > 1000) break;
}

echo "FIM";