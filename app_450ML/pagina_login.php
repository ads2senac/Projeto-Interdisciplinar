<?php
 
$email = (isset($_COOKIE['CookieEmail'])) ? base64_decode($_COOKIE['CookieEmail']) : '';
$senha = (isset($_COOKIE['CookieSenha'])) ? base64_decode($_COOKIE['CookieSenha']) : '';
$lembrete = (isset($_COOKIE['CookieLembrete'])) ? base64_decode($_COOKIE['CookieLembrete']) : '';
$checked = ($lembrete == 'SIM') ? 'checked' : '';
 
?>
<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        
        <title>Login - 450ml</title>

        <link href="css/reset.css" rel="stylesheet" >
        <link href="css/cabecalho-rodape.css" rel="stylesheet">
        <link href="css/login.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@500&display=swap" rel="stylesheet">
        
               
    </head>

    <body>
        <header>
            <div class="pre-cabecalho">
                <nav>
                    <ul class="navegacao">
                        <li><a href="sobre.html">Sobre</a></li>
                        <li><a href="contato.html">Contato</a></li>
                    </u>
                </nav>
            </div>

            <div class="cabecalho">
                <img id="logo-cabecalho" src="imagens\logo.png" alt="Logo do app 450ml">                
            </div>
        </header>

        <main>
            <div class="login-opcao">
                    <input id="usuario" type="submit" value="Login Doador" class="botao">           
                    <input id="instituicao" type="submit" value="Login Instituição" class="botao">
            </div>

            <img id="capa" src="imagens\capa.jpg" alt="Imagem simbolizando uma doação de sangue">            

            <form action="php/login.php" method="POST">
                <section class="login-usuario">
                    <legend>Login doador:</legend>
                    <input placeholder="E-mail" type="email" id="email" name="email" value="<?=$email?>" class="input-padrao" required>
                    <input placeholder="Senha" type="password" id="senha" name="senha" value="<?=$senha?>" class="input-padrao" required>
                    <br>
                    
                    <label class="checkbox">
                        <input type="checkbox" id="lembrete" name="lembrete" value="SIM" class="input-padrao" <?=$checked?>>
                        Lembrar-me
                    </label>                    

                    <input type="submit" value="Login" class="botao">

                    <nav>
                        <ul class="navegacao-login">
                            <li><a href="cadastro.html">Cadastre-se</a></li>
                            <li><a href="senha.html">Esqueci a senha</a></li>
                        </u>
                    </nav>    
                </section>
            </form> 
            
            <form>
                <section class="login-instituicao">
                    <legend>Login instituição:</legend>
                    <input placeholder="E-mail" type="email" id="email" class="input-padrao" required>
                    <input placeholder="Senha" type="password" id="senha" class="input-padrao" required>
                    <br>
                    
                    <input type="submit" value="Login" class="botao">
                    <br>

                    <label class="checkbox">
                    <input type="checkbox" class="input-padrao" checked>
                    Lembrar-me
                    </label>
                    
                    <nav>
                        <ul class="navegacao-login">
                            <li><a href="cadastro-instituicao.html">Cadastre-se</a></li>
                            <li><a href="senha.html">Esqueci a senha</a></li>
                        </u>
                    </nav>    
                </section>
            </form>            
        </main>
        
        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/login.js"></script>

        <footer>
            <img id="logo-rodape" src="imagens\logo.png" alt="Logo do app 450ml">
            <p class="copyright">&copy; Copyright 450ml - 2020
        </footer>
    </body>
</html>