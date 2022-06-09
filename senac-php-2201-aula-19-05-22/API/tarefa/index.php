<?php
require_once '../../crudTareda/conexa.php';

$metodo = $_SERVER['REQUEST_METHOD'];

if($_SERVER['REQUEST_METHOD'] == 'GET'){ //se o requisitante usar método GET

    $strSql = '';

    if(isset($_GET['id'])){

        $id = preg_replace('/\D/', '', $_GET['id']);
        $strSql = "WHERE id = $id";
    }

    $stmt = $bd->query('SELECT id, descricao, imagem, apagado FROM tarefas ' . $strSql);
    $stmt->execute();

    $saida = [];

    while($registro = $stmt->fetch(PDO::FETCH_ASSOC)){

        if($registro['apagado'] ! = 0){
            
            if(isset[$_GET['id']]) exit(http_response_code(204));

            continue;

        }

        $saida [] = $registro;

    }

    if( count($saida) <= 0){

        http_response_code(404);

        echo json_encode($saida);
        exit();
    }

    http_response_code(200);

    echo( json_encode($saida));

    exit();
}
//FIM se o requisitante usar o método GET

//se o requisitante usar o método POST ou PUT
if($metodo == 'POST' || $metodo == 'PUT'){

    $tarefa =json_decode( file_get_contents('php://input'));

    if(json_last_error_msg() == JSON_ERROR_NONE ){

        
        echo json_encode(['erro' => 'JSON invalido']);

        exit( http_response_code(400));

    }
    if(!isset($tarefa->descricao || !isset($tarefa->imagem))){
        
        echo json_encode(['erro' => 'campos obrigatorios: descricao e imagem']);

        exit( http_response_code(400));

    }

    $stmt = $bd->prepare('INSERT INTO tarefas (descricao, imagem) VALUES (:descricao, :imagem');
    $stmt->bindParam(':descricao', $tarefa->descricao);
    $stmt->bindParam(':imagem', $tarefa->imagem);
    $stmt->execute();
    $id = $bd->lastInsertid();

    echo json_encode(['id' => $id]);

    exit( http_response_code(200));
}

//FIM se o requisitante usar o método POST ou PUT

//se o requisitante usar o método DELTE
if($metodo == 'DELETE'){

    if( !isset($_GET['id'])){

        echo json_encode(['erro' => "id nao fornecido"]);
        exit( http_response_code(400));

    }

    $id = preg_replace('/\D/', '', $_GET['id']);

    $stmt = $bd->query("UPDATE tarefas SET apagado = 1 WHERE id = $id");
    if($stmt->execute()){

        exit( http_response_code(200));

    }else{

        exit(http_response_code(500));
    }

}

if($metodo == 'PATCH'){
    
    $tarefas = json_decode(file_get_contents('php://input'));

    if( json_last_error() != JSON_ERROR_NONE ){

        echo json_encode(["erro" => "JSON invalido"]);
        exit(http_response_code(400));
    }
    if( !isset($tarefas->descricao) || !isset($tarefas->imagem)){

        echo json_encode(["erro" => "Campos obrigatorios: Descricao e Imagem"]);
        exit(http_response_code(400));
    }

    $stmt = $database->prepare("UPDATE tarefas 
                                SET descricao = :descricao, imagem = :imagem
                                WHERE id = :id AND apagado = 0");

    $stmt->bindParam(':descricao', $tarefas->descricao);
    $stmt->bindParam(':imagem', $tarefas->imagem);
    $stmt->bindParam(':id', $tarefas->id);

    if($stmt->execute()){
        exit(http_response_code(200));
    }else{
        exit(http_response_code(500));
    }
}

//FIM se o requisitante usar o método DELETE

//Retorna código de erro método não permitído
http_response_code(405);