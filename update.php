<?php
//Conecta no Banco de Dados
$dsn = 'mysql:dbname=php;host=localhost';
$user = 'root'
$pass = '';

$bd = new PDO($dsn, $user, $pass);
//Fim conecta no banco de dados

//atualizar um registro
$update = $bd->exec("UPDATE
                        Tarefas
                    SET
                        descricao = 'Valor novo')
                    WHERE
                        id = 12");

// fim atualizar um registro

if ($updated){
    echo "registro alterado";
}else {
    echo "erro ao alterar o registro";
}