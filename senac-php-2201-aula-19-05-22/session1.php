<?php
session_start();//controles de sessões

$_SESSION['nome'] = 'Bono';

echo $_SESSION['nome'];