<?php
//Conecta no Banco de Dados
$dsn = 'mysql:dbname=php;host=localhost';
$user = 'root';
$pass = '';

$bd = new PDO($dsn, $user, $pass);
//FIM Conecta no Banco de Dados

$stmt = $bd->query("SELECT id, descricao FROM tarefas");

$stmt->execute();

$color = '';

echo "<table border='1'>
        <tr>
            <td>ID</td><td>Descrição</td>
        </tr>";
       
while($registro = $stmt->fetch(PDO::FETCH_ASSOC)){

    $color = $color == '' ? '#dedede' : '';

    echo "  <tr bgcolor='$color'>
                <td>{$registro['id']}</td>
                <td>{$registro['descricao']}</td>
            </tr>";
}

echo "</table>";
