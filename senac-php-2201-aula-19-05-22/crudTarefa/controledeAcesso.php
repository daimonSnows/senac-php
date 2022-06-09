<?php
session_start(); // permite acesso a outras paginas web com o login realizado

if(!isset($_SESSION['id'])){
    header('location: login.php');
    exit();

}