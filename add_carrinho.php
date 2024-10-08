<?php
include('sessao.php');
//include('topo.php');
$id_prod = $_POST['id'];
$id_cli = $_SESSION['idcli'];
$con = mysqli_connect('localhost','root', '', 'tcc_3D');
$sql = "insert into carrinho (id_cli, id_prod) values ($id_cli, $id_prod)";
$exe = mysqli_query($con, $sql);
if($exe){
	echo"Produto inserido no carrinho";
	header('Location: pagina_principal.php');
}
else{
	echo"erro<br>$sql";
}
echo "<a href='ver_produtos.php'>Comprar mais</a>";
$fecha = mysqli_close($con);
//include"final.html";
?>