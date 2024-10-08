<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Minha Loja Online</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_cadastro.css">
    <script defer src="js/main.js"></script>
</head>
<header class="header">
    <h1>Bem-vindo à Minha Loja Online!</h1>
    <nav>
        <a href="contato.html">Contato</a>
    </nav>
</header>

    <div class="container right-panel-active">
        <!-- Cadastro -->
        <div class="container__form container--signup">
            <form action="cadastro_sql.php" class="form" id="form1" method="post">
                <h2 class="form__title">Cadastrar</h2>
                <input type="text" placeholder="Usuário" name="nome" class="input" required />
                <input type="text" placeholder="Email" name="email" class="input" required />
                <input type="password" placeholder="Senha" name="senha" class="input" required />
                Tipo de Usuário <select name="user">
                    <?php
                            $con = mysqli_connect('localhost', 'root', '', 'tcc_3D');
                            $sql = "select * from usuario order by tipo asc";
                            $exe = mysqli_query($con, $sql);
                            while($res = mysqli_fetch_array($exe)){
                                $id = $res['id_user '];
                                $nome = $res['tipo'];
                                echo "<option value='$id'>$nome</option>";
                            }
                            $fechar = mysqli_close($con);
                            ?>
                </select><br>
                <input type="submit">
            </form>
        </div>
    
        <!-- Login -->
        <div class="container__form container--signin">
            <form action="login.php" class="form" id="form2" method="post">
                <h2 class="form__title">Entrar</h2>
                <input type="email" name="login"placeholder="Email" class="input" required />
                <input type="password" name="senha"placeholder="Senha" class="input" required />    
                <input type="submit">
            </form>
        </div>
    
        <!-- Sobreposição -->
        <div class="container__overlay">
            <div class="overlay">
                <div class="overlay__panel overlay--left">
                    <button class="btn" id="signIn">Entrar</button>
                </div>
                <div class="overlay__panel overlay--right">
                    <button class="btn" id="signUp">Cadastrar</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>