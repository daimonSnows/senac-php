<?php
//Conecta no Banco de Dados
$dns = 'mysql:dbname=php;host=localhost';
$user = 'root';
$pass = '';

$bd = new PDO($dsn, $user, $pass);
//FIM conecta Banco de Dados

//INSERT

if($bd->exec('INSERT INTO tarefas (descricao) VALUES ("Mais um tarefa")'))
{
    echo "GRAVOU!";
}else{
    echo "Ai meu Deus!";
}
//FIM INSERT

if($bd->exec('DELETE FROM tarefas WHERE id = 18'))
{
    echo "APAGOU";
}else{
    echo "NÃO APAGOU";