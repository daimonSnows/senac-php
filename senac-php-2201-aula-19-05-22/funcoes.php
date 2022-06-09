<?php

//function cadastraAluno(string $nome, int $matricula = 0):bool //parâmetro não obrigatório
function cadastraAluno(array $aluno):bool
{
    $f = fopen( 'alunos.csv', 'a');
    $escreveu = fwrite( $f, "{$aluno['matricula']};\"{$aluno['nome']}\"\n");
    fclose($f);

    if($escreveu){
        return true;
    }else{
        return false;
    }
}

$funcionou = cadastraAluno(['matricula' => 56373, 'nome' => 'João']);

if($funcionou){
    echo "<br>Aluno cadastrado com sucesso!";
}else{
    echo "<br>Erro ao cadastrar o aluno!";
}

$var = 10;

function soma($var){

    return $var + 10;
}

echo "<br>Variável antes: $var";

soma($var);

echo "<br>Variável depois: $var";