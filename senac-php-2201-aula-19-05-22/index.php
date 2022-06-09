<?php

//Comentário de linha

/*
Comentário de bloco
*/

define( 'XPTO', 'Valor sempre igual');//Declaração de constante

echo XPTO;//Usando a constante

$num = 2;

$var = '<br>' . "Olá mundo! $num <br>";//O ponto é o operador de concatenação

echo $var;

var_dump($var);

//phpinfo(); Informações importantes, como variáveis de ambiente

//Após o café

$domingo = 'Domingo';
$segunda = 'Segunda-feira';
$terca   = 'Terça-feira';
$quarta  = 'Quarta-feira';
$quinta  = 'Quinta-feira';
$sexta   = 'Sexta-feira';
$sabado  = 'Sábado';

$diaSemana = [  'Dom'  => 'Domingo', //Podemos declarar vetor com array() também 
                'Seg'  => 'Segunda-feira', 
                'Ter'  => 'Terça-feira',
                'Qua'  => 'Quarta-feira', 
                'Qui'  => 'Quinta-feira', 
                'Sex'  => 'Sexta-feira',
                'Sab'  => 'Sábado'];

echo '<br>Hoje é ' . $diaSemana['Seg'];//Exemplo sem interpolação

echo "<br>Hoje é {$diaSemana['Qui']}";//Exemplo com interpolação

$usuario[0] = [ 'nome'=>'Luiz', 
                'senha'=>'123'];
$usuario[1] = [ 'nome'=>'Fer', 
                'senha'=>'321'];
$usuario[2] = [ 'nome'=>'Bono', 
                'senha'=>'627'];          

echo '<table border="1">
        <tr>
            <td>ID</td><td>Nome</td><td>Senha</td>
        </tr>';

foreach( $usuario as $id => $valor){//looping para vetores

    echo '<tr>';
    
    echo "<td>$id</td><td>{$valor['nome']}</td><td>{$valor['senha']}</td>";

    echo '</tr>';
}

echo '</table>';


$dias = [   'Dom' => ['Domingo','Domingo'],
            'Seg' => ['Segunda','Segunda-feira'],
            'Ter' => ['Terça','Terça-feira'],
            'Qua' => ['Quarta','Quarta-feira'],
            'Qui' => ['Quinta','Quinta-feira'],
            'Sex' => ['Sexta','Sexta-feira'],
            'Sab' => ['Sábado','Sábado']];

foreach($dias as $abreviacao => $nomes){

    echo "$abreviacao: {$nomes[0]} ou {$nomes[0]}<br>";
}        

foreach($dias as $abreviacao => [$nomeCurto, $nomeLongo]){

    echo "$abreviacao: $nomeCurto ou $nomeLongo<br>";
}



























