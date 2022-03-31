<?php

echo $_POST['tarefa'];

//Conecta no Banco de Dados
$dsn = 'mysql:dbname=php;host=localhost';
$user = 'root'
$pass = '';

$bd = new PDO($dsn, $user, $pass);
//Fim conecta no banco de dados

$tarefa = $_POST['tarefa'];//Dado inseguro

$stmt = $bd->prepare('INSERT INTO tarefas (descricao) VALUES (:tarefa)';

$stmt->bindParam(':tarefa', $tarefa); //protege Banco de Dados 

if($stmt-> execute() ){
    echo "$tarefa gravada com sucesso";
}else{
    echo "Problema ao grava $tarefa";
}