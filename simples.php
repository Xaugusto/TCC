<?php
    $conexao = mysqli_connect('localhost', 'root',  '', 'tcc_3D');
    $sql = "SELECT * FROM produtos";
    $executar = mysqli_query ($conexao, $sql);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Minha Loja Online</title>
</head>
<body>
    <header>
        <h1>Bem-vindo à Minha Loja Online!</h1>
        <nav>
            <a href="#produtos">Produtos</a>
            <a href="carrinho.php">Carrinho</a>
            <a href="cadastro.php">Cadastro</a>
            <a href="contato.php">Contato</a>
        </nav>
    </header>

    <div class="welcome">
        <p>Explore nossos produtos incríveis e aproveite as melhores ofertas!</p>
    </div>
    <section id="produtos">
        <div class="produtos">
            <div class="produto">
                <img src="gtaV.jpeg" alt="Produto 1">
            <?php
            while($res = mysqli_fetch_array($executar)){
            $id = $res['id'];
            echo "
                <h3>".$res['nome']."</h3>
                <p>".$res['descricao']."</p>
                <p><strong>".$res['preco']."</strong></p>
                <button >"Adicionar ao Carrinho"</button>
            </div>";
        } 
        ?>
            "<div class="produto">
                <img src="gtaV.jpeg" alt="Produto 1">
                <h3>".$res['nome']."</h3>
                <p>".$res['descricao']."</p>
                <p><strong>".$res['preco']."</strong></p>
                <button >"Adicionar ao Carrinho"</button>
            </div>";
            <div class="produto">
                <img src="miranha.jpeg" alt="Produto 2">
                <h3>Produto 2</h3>
                <p>Descrição do Produto 2.</p>
                <p><strong>R$ 149,90</strong></p>
                <button onclick="addToCart('Produto 2', 149.90)">Adicionar ao Carrinho</button>
            </div>
            <div class="produto">
                <img src="mortal.jpeg" alt="Produto 3">
                <h3>Produto 3</h3>
                <p>Descrição do Produto 3.</p>
                <p><strong>R$ 199,90</strong></p>
                <button onclick="addToCart('Produto 3', 199.90)">Adicionar ao Carrinho</button>
            </div>
            <div class="produto">
                <img src="kingkong.jpeg" alt="Produto 4">
                <h3>Produto 4</h3>
                <p>Descrição do Produto 4.</p>
                <p><strong>R$ 249,90</strong></p>
                <button onclick="addToCart('Produto 4', 249.90)">Adicionar ao Carrinho</button>
            </div>
            <div class="produto">
                <img src="bully.jpeg" alt="Produto 5">
                <h3>Produto 5</h3>
                <p>Descrição do Produto 5.</p>
                <p><strong>R$ 299,90</strong></p>
                <button onclick="addToCart('Produto 5', 299.90)">Adicionar ao Carrinho</button>
            </div>
            <div class="produto">
                <img src="deffjam.jpeg" alt="Produto 6">
                <h3>Produto 6</h3>
                <p>Descrição do Produto 6.</p>
                <p><strong>R$ 349,90</strong></p>
                <button onclick="addToCart('Produto 6', 349.90)">Adicionar ao Carrinho</button>
            </div>
        </div>
    </section>
    <header>
        <h1>Consoles e Acessórios</h1>
    </header>
    <section id="consoles">
        <h3>Explore nossos consoles e acessórios de jogos!</h3>
        <div class="consoles">
            <div class="console">
                <img src="consoleps2.jpeg" alt="Console 1">
                <h3>Console 1</h3>
                <p>Descrição do Console 1.</p>
                <p><strong>R$ 1.499,90</strong></p>
                <button onclick="addToCart('Console 1', 1499.90)">Adicionar ao Carrinho</button>
            </div>
            <div class="console">
                <img src="consoleps5.jpeg" alt="Console 2">
                <h3>Console 2</h3>
                <p>Descrição do Console 2.</p>
                <p><strong>R$ 1.799,90</strong></p>
                <button onclick="addToCart('Console 2', 1799.90)">Adicionar ao Carrinho</button>
            </div>
            <div class="console">
                <img src="consoleps4.jpeg" alt="Acessório 1">
                <h3>Acessório 1</h3>
                <p>Descrição do Acessório 1.</p>
                <p><strong>R$ 199,90</strong></p>
                <button onclick="addToCart('Acessório 1', 199.90)">Adicionar ao Carrinho</button>
            </div>
            <div class="console">
                <img src="acessorio2.jpeg" alt="Acessório 2">
                <h3>Acessório 2</h3>
                <p>Descrição do Acessório 2.</p>
                <p><strong>R$ 299,90</strong></p>
                <button onclick="addToCart('Acessório 2', 299.90)">Adicionar ao Carrinho</button>
            </div>
            <div class="console">
                <img src="acessorios1.jpeg" alt="Acessório 1">
                <h3>Acessório 1</h3>
                <p>Descrição do Acessório 1.</p>
                <p><strong>R$ 199,90</strong></p>
                <button onclick="addToCart('Acessório 1', 199.90)">Adicionar ao Carrinho</button>
            </div>
            <div class="console">
                <img src="acessorio3.jpeg" alt="Acessório 1">
                <h3>Acessório 1</h3>
                <p>Descrição do Acessório 1.</p>
                <p><strong>R$ 199,90</strong></p>
                <button onclick="addToCart('Acessório 1', 199.90)">Adicionar ao Carrinho</button>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Minha Loja Online. Todos os direitos reservados.</p>
    </footer>

    <script>
        function addToCart(name, price) {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            cart.push({ name, price });
            localStorage.setItem('cart', JSON.stringify(cart));
            alert(`${name} adicionado ao carrinho!`);
        }
    </script>
</body>
</html>

