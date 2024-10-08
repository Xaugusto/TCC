<?php
include('sessao.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/pag_principal.css">
  <title>Minha Loja Online</title>
  <style>
  </style>
</head>
<body>
  <header>
      <h1>Bem-vindo à Minha Loja Online!</h1>
      <nav>
          <a href="#produtos">Produtos</a>
          <a href="carrinho.php">Carrinho</a>
          <a href="cadastro_login.php">Cadastro</a>
          <a href="contato.html">Contato</a>
          <a href="logout.php">Logout</a>
          <?php
          $user = $_SESSION['user'];
          if($user == 1){
            echo "<a href='produtos/consulta.php'>Meus Produtos</a>";
            echo "<a href='clientes/consulta.php'>Clientes</a>";
          }
          ?>
      </nav>
  </header>
  <div class="welcome">
      <p>Explore nossos produtos incríveis e aproveite as melhores ofertas!</p>
  </div>
  <section id="produtos">
      <div class="produtos">    
  <?php
              $conexao = mysqli_connect('localhost', 'root', '', 'tcc_3D');
              if (!$conexao) {
                  die("Erro de conexão: " . mysqli_connect_error());
              }
              $sql = "SELECT * FROM produtos WHERE categoria=1";
              $executar = mysqli_query($conexao, $sql);

              while ($res = mysqli_fetch_array($executar)) {
                  echo "<div class='console'>";
                  echo "<img src='produtos/imagens/" . $res['foto_prod'] . "' alt='" . $res['nome_prod'] . "'>";
                  echo "<h3>" . $res['nome_prod'] . "</h3>";
                  echo "<p>" . $res['descricao'] . "</p>";
                  echo "<p><strong>R$ " . number_format($res['preco'], 2, ',', '.') . "</strong></p>";
                  echo "<form action='add_carrinho.php' method='post'>";
                  echo "<input type='hidden' name='id' value='" . $res['id_prod'] . "'>";
                  echo "<input type='hidden' name='nome' value='" . $res['nome_prod'] . "'>";
                  echo "<input type='hidden' name='preco' value='" . $res['preco'] . "'>";
                  echo "<button type='submit'>Adicionar ao Carrinho</button>";
                  echo "</form>";
                  echo "</div>";
              }

              mysqli_close($conexao);
          ?>
      </div>
  </section>
  <header>
    <h1>Consoles e Acessórios</h1>
    </header>
  <section id="consoles">
      <div class="consoles">
            <?php
              $conexao = mysqli_connect('localhost', 'root', '', 'tcc_3D');
              if (!$conexao) {
                  die("Erro de conexão: " . mysqli_connect_error());
              }
              $sql_2 = "SELECT * FROM produtos WHERE categoria=2";
              $executar = mysqli_query($conexao, $sql_2);

              while ($res = mysqli_fetch_array($executar)) {
                 echo "<div class='console'>";
                  echo "<img src='produtos/imagens/" . $res['foto_prod'] . "' alt='" . $res['nome_prod'] . "'>";
                  echo "<h3>" . $res['nome_prod'] . "</h3>";
                  echo "<p>" . $res['descricao'] . "</p>";
                  echo "<p><strong>R$ " . number_format($res['preco'], 2, ',', '.') . "</strong></p>";
                  echo "<form action='add_carrinho.php' method='post'>";
                  echo "<input type='hidden' name='id' value='" . $res['id_prod'] . "'>";
                  echo "<input type='hidden' name='nome' value='" . $res['nome_prod'] . "'>";
                  echo "<input type='hidden' name='preco' value='" . $res['preco'] . "'>";
                  echo "<button type='submit'>Adicionar ao Carrinho</button>";
                  echo "</form>";
                  echo "</div>";
              }

              mysqli_close($conexao);
          ?>
  </section>

  <footer>
      <p>&copy; 2024 Minha Loja Online. Todos os direitos reservados.</p>
  </footer>

  
</body>
</html>