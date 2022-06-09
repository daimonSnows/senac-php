<?php
session_start();
require_once 'conexao.php';

$email = trim($_POST['email'] ?? '');
$senha = trim($_POST['senha'] ?? '');

if(empty($email) || empty($senha)){
    header('location: index.php');

}

$stms = $bd->prepare("SELECT senha FROM usuarios WHERE id = :email");
$stms->bindParam(':email', $email);
$stms->execute();
$val = $stmt->fetch(PDO::FETCH_ASSOC);

if(password_verify($senha, $val['senha'])){//verificação de senhas

    $_SESSION['id'] = $email;
    header('location: index.php');

}else{
    echo "Credenciais inválidas<br><br><a href='index.php'>Voltar</a>";
}