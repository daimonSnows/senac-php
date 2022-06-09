<?php
//Conecta no Banco de Dados
$dsn = 'mysql:dbname=php;host=localhost';
$user = 'root';
$pass = '';

$bd = new PDO($dsn, $user, $pass);
//FIM Conecta no Banco de Dados

//Atualizar um registro
$updated = $bd->exec(" UPDATE 
                            tarefas 
                        SET 
                            descricao = 'Valor mais novo ainda' 
                        WHERE 
                            id = 12");
//FIM Atualizar um registro

if( $updated ){

    echo "Registro alterado!";
}else{
    echo "Erro ao alterar o registro!";
}