<?php
session_start();
$_SESSION['nome'] = null;
session_destroy();
echo "Logout realizado com sucesso!";
header('location:cadastro_login.php');
?>  