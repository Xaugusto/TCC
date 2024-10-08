<?php
        include('sessao.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho - Minha Loja Online</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #f4f4f4, #eaeaea);
            margin: 0;
            padding: 20px;
        }
        header {
            background: #6947ff;
            color: #fff;
            padding: 20px 0;
            text-align: center;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        nav {
            margin: 20px 0;
        }

        nav a {
            color: #fff;
            margin: 0 15px;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s, transform 0.3s;
        }

        nav a:hover {
            color: #ffe135;
            transform: scale(1.1);
        }
        h1 {
            color: #fff;
            font-size: 2.5em;
        }
        .carrinho {
            margin-top: 40px;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        .carrinho-item {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #ccc;
        }
        .carrinho-item button {
            background: #ff6347;
            color: #fff;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            transition: background 0.3s;
            border-radius: 5px;
        }
        .carrinho-item button:hover {
            background: #ffe135;
            color: #333;
        }
        footer {
            text-align: center;
            margin-top: 20px;
            padding: 20px 0;
            background: #333;
            color: #fff;
        }
    </style>
</head>
<body>
    <header>
      <h1>Seu Carrinho</h1>
      <nav>
          <a href="pagina_principal.php">Inicio</a>
          <a href="cadastro_login.php">Cadastro</a>
          <a href="contato.html">Contato</a>
          <a href="logout.php">Logout</a>
      </nav>
  </header>

    <div class="carrinho">
    <h2>Itens no Carrinho</h2>
    <div id="cartItems">
        <?php
        $id_cli = $_SESSION['idcli'];
        $con = mysqli_connect('localhost','root', '', 'tcc_3D');
        $sql = "select * from carrinho, produtos where carrinho.id_cli = $id_cli and carrinho.id_prod=produtos.id_prod";
        $exe = mysqli_query($con, $sql);
        $total = 0;
        while($res = mysqli_fetch_array($exe)){
            $id_car = $res['id_car'];
            $nome = $res['nome'];
            $valor = $res['preco'];
            $total += $valor;
            echo "<div class='carrinho-item'>
                    <span>$nome</span>
                    <span>R$ $valor</span>
                    <a href='del_carrinho.php?id=$id_car'><button>Remover</button></a>
                  </div>";
        }
        echo "<div>Total: <strong>R$ $total</strong></div>";
        $fecha = mysqli_close($con);
        ?>
    </div>
</div>

    <footer>
        <p>&copy; 2024 Minha Loja Online. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
