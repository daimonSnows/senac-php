<?php
//Conecta no Banco de Dados
$dsn = 'mysql:dbname=php;host=localhost';
$user = 'root'
$pass = '';

$bd = new PDO($dsn, $user, $pass);
//Fim conecta no banco de dados

//consultar
$stmt = $bd->query("SELECT id, descricao FROM taferas");

//execultar
$stmt-> execute();


echo "<br>";
var_dump($registro);
}

echo '<table border="1">
        <tr>
            <td>ID</td><td>descrição</td><td>statement</td>
        </tr>';

echo '</table>';
//trazer ao usuario
while ($registro = $stmt->fetch(PDO::FETCH_ASSOC));

echo "<tr bgcolor='$color'>
        <td>{$registro['id']}</td>
        <td>{$registro['descricao']}</td>
      </tr>";
}

echo "</table>";