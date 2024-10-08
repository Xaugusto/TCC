<?php
session_start();
$senha = $_POST['senha'];
$login = $_POST['login'];
$conexao = mysqli_connect('localhost','root','','tcc_3D');
$sql = "SELECT * FROM clientes WHERE email like '$login'
and senha like '$senha'";
$executar = mysqli_query($conexao, $sql);
$res = mysqli_fetch_array($executar);
if($res['nome'] != NULL){
   $_SESSION['nome'] = $res['nome'];
   $_SESSION['idcli'] = $res['id_cli'];
   $_SESSION['user'] = $res['user_type'];
   echo"Logado";
   header('Location: pagina_principal.php');
}
else{
   echo "Login e/ou senha incorretos";
}
$fechar = mysqli_close($conexao);
?>