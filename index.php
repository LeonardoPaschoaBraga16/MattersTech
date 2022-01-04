<?php 
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
    header("Location: home.php");
    exit();
}else{
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <title>MattersTech - Login</title>
    <link rel="shortcut icon" href="public/assets/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./public/icons/css/all.css"/>
    <link rel="stylesheet" type="text/css" href="./public/styles/login.css"/>
</head>
<body>
    <!-- Header Section -->
    <header id="login_header">
        <h1>MattersTech</h1>
        <img class="logo" src="./public/assets/logo.png" alt="logo"/>
    </header>

    <!-- Main Section -->
    <main id="login_main">
        <section class="login_content">
            <div id="login_extras">
                <p id="login_extras_message">Entre na nossa plataforma e aproveite ao máximo de nossos conteúdos sobre tecnologia. Aqui você ficará atualizado das novas notícias e fará você sempre estar preparado para as mudanças constantes que ocorrem em nosso mundo!</p>
                <div id="login_extras_contact">
                    <div id="login_extras_contact_icons">
                        <a href="https://www.instagram.com/matterstech_interdisciplinar/" target="_blank"><i id="instagram" class="fab fa-instagram contact_icon"></i></a>
                        <a href="https://twitter.com/MattersTech1" target="_blank"><i id="twitter" class="fab fa-twitter contact_icon"></i></a>
                        <a href="https://www.facebook.com/MattersTech-102224282293906/?ref=page_internal" target="_blank"><i id="facebook" class="fab fa-facebook contact_icon"></i></a>
                    </div>
                    <p id="login_extras_contact_message">Siga-nos nas redes sociais</p>
                </div>
            </div>
            <div id="login_form">
                <form action="login.php" method="post">
                    <i class="fas fa-user-circle"></i>
                    

                    <?php if (isset($_GET['error']) && $_GET['error']!== ""){?>
                        <p class="error"><?php echo $_GET['error'];?></p>
                    <?php } ?>
                    <label for="username">Nome de Usuário</label>
                    <input type="text" id="username" name="username"/>
                    <label for="password">Senha</label>
                    <input type="password" id="password" name="password"/>

                    <div id="forgot_password_link">
                        <a href="forgotpass.php"><small>Esqueceu a Senha?</small></a>
                    </div> 

                    <button  type="submit" id="login_submit_btn">ENTRAR</button>

                    <a id="singup_link" href="./register.php">INSCREVER-SE</a>
                </form>
            </div>
        </section>
    </main>

    <!-- Footer Section -->
    <footer></footer>
</body>
</html>

<?php 
}
?>