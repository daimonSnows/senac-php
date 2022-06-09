<?php

//include não dá erro fatal
//require dá erro fatal
require_once 'funcoes/funcoesAluno.php';

$matricula = $_POST['matricula'];
$aluno = $_POST['aluno'];

if(cadastraAluno(['matricula' => $matricula, 'nome' => $aluno])){

    echo "$aluno, você foi matriculado(a) com sucesso!";

}else{

    echo "$aluno, alguma coisa deu errado :-(";
}

echo "<br><br><a href='dadosUsuario.php'>Cadastrar outro</a>
        &nbsp;&nbsp;&nbsp;
        <a href='listarUsuarios.php'>Listar usuários</a>";
