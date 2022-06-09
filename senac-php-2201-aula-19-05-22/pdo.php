<?php
//Conecta no Banco de Dados
$dsn = 'mysql:dbname=php;host=localhost';
$user = 'root';
$pass = '';

$bd = new PDO($dsn, $user, $pass);
//FIM Conecta no Banco de Dados

//INSERT 
$inseriu = $bd->exec('  INSERT INTO tarefas 
                            (descricao) 
                        VALUES 
                            ("Mais uma tarefa inserida")');
//FIM INSERT

if( $inseriu ){
    echo "GRAVOU!";
}else{
    echo "Ai meu Deus, não gravou!";
}

//DELETE 
$apagou = $bd->exec('   DELETE FROM 
                            tarefas 
                        WHERE 
                            id = 18');
//FIM DELETE

if( $apagou ){
    echo "APAGOU!";
}else{
    echo "Ai meu Deus, não apagou!";
}
