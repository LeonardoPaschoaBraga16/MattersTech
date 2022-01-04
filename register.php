<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <title>MattersTech - Registro</title> 
    <link rel="shortcut icon" href="public/assets/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./public/icons/css/all.css"/>
    <link rel="stylesheet" type="text/css" href="./public/styles/register.css"/>
</head>
<body>
    <!-- Header Section -->
    <header id="register_header">
        <h1>MattersTech</h1>
        <img class="logo" src="./public/assets/logo.png" alt="logo"/>
    </header>

    <!-- Main Section -->
    <main id="register_main">
        <section class="register_content">
            <div id="register_form">
                <form action="signup_check.php" method="post">
                    <i class="fas fa-user-circle"></i>

                    <?php
                        if(isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>


                    <?php
                        if(isset($_GET['success'])) { ?>
                        <p class="success"><?php echo $_GET['success']; ?></p>
                    <?php } ?>


                    <!--EMAIL SAVE-->
                    <label for="email">E-Mail</label>
                    <?php
                        if(isset($_GET['email']) && $_GET['email']!== "") { ?>
                        <input type="email" 
                               id="email"  
                               name="email" 
                               value="<?php echo $_GET['email']; ?>"/>
                    <?php }else{ ?>  
                        <input type="email" 
                               id="email" 
                               name="email"/>
                    <?php }?>

                    <!--NAME SAVE-->
                    <label for="name">Primeiro Nome</label>
                    <?php
                        if(isset($_GET['name']) && $_GET['name']!=="") { ?>
                        <input type="text" 
                               id="name"  
                               name="name" 
                               value="<?php echo $_GET['name']; ?>"/>
                    <?php }else{ ?>  
                        <input type="text" 
                               id="name" 
                               name="name"/>
                    <?php }?>

                    <!--USER NAME SAVE-->
                    <label for="username">Nome de Usuário</label>
                    <?php
                        if(isset($_GET['username']) && $_GET['username']!=="") { ?>
                        <input type="text" 
                               id="username"  
                               name="username" 
                               value="<?php echo $_GET['username']; ?>"/>
                    <?php }else{ ?>  
                        <input type="text" 
                               id="username" 
                               name="username"/>
                    <?php }?>


                    <label for="password">Senha</label>
                    <input type="password" id="password" name="password"/>

                    <label for="confirm">Confirmar Senha</label>
                    <input type="password" id="confirm" name="confirm"/>

                    <button id="register_submit_btn" type="submit">INSCREVER-SE</button>

                    <p id="register_link">Já tem uma conta? <a href="./index.php">ENTRAR</a></p>
                </form>
            </div>
            <div id="register_extras">
                <p id="register_extras_message">Entre na nossa plataforma e aproveite ao máximo de nossos conteúdos sobre tecnologia. Aqui você ficará atualizado das novas notícias e fará você sempre estar preparado para as mudanças constantes que ocorrem em nosso mundo!</p>
                <div id="register_extras_contact">
                    <div id="register_extras_contact_icons">
                        <a href="https://www.instagram.com/matterstech_interdisciplinar/" target="_blank"><i id="instagram" class="fab fa-instagram contact_icon"></i></a>
                        <a href="https://twitter.com/MattersTech1" target="_blank"><i id="twitter" class="fab fa-twitter contact_icon"></i></a>
                        <a href="https://www.facebook.com/MattersTech-102224282293906/?ref=page_internal" target="_blank"><i id="facebook" class="fab fa-facebook contact_icon"></i></a>
                    </div>
                    <p id="register_extras_contact_message">Siga-nos nas redes sociais</p>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer Section -->
    <footer></footer>
</body>
</html>