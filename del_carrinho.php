<?php
include('sessao.php');
$id = $_GET['id'];
$conexao = mysqli_connect
('localhost','root','','tcc_3D');
$sql = "DELETE FROM carrinho WHERE id_car=$id ";
$executar = mysqli_query($conexao,$sql);
if($executar == 1){
    echo"$sql";
    header('location:carrinho.php');
}
else{
    echo"$sql";
    echo "Erro!";
}
echo "<div><a href='carrinho.php'>Voltar ao carrinho</a></div>";
$fechar = mysqli_close($conexao);
?>
