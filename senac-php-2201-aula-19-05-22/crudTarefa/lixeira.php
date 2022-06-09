<?php

require 'controleDeAcesso.php';
require_once 'conexa.php';

//apagar para sempre ou restaurar

if(isset($_POST['id'])){

    $id = preg_replace(`/\D/`, '', $_POST['id']);

    if($_GET['a'] == 'r'){//restaura

        $stmt = $bd->query("UPDATE tarefas SET apagado = 0 WHERE id = $id");
        $stmt->execute();
        echo "Tarefa $id restaurada<br>";

    }elseif($_GET['a'] == 'a'){// apaga para sempre
    
        $stmt = $bd->query("DELETE FROM tarefas WHERE id = $id");
        $stmt->execute();
        echo "Tarefa $id Apagada para sempre!";
    }
}

$stmt = $bd->query('SELECT id, descricao, imagem FROM tarefas WHERE apagado =1');

$stmt->execute();

while($registro = $stmt->fetch(PDO::FETCH_ASSOC)){

    $excluidos[] = $registro;

}

include 'lixeiraView.php'