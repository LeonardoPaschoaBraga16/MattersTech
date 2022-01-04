<!DOCTYPE html>
<html lang="pt-br">
<html class="html">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mudar senha</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./public/icons/css/all.css"/>
    <link rel="stylesheet" type="text/css" href="./public/styles/forgotpass.css"/>
    <link rel="shortcut icon" href="public/assets/logo.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
<body>
  <!-- HEADER SECTION -->
  <header id="header">
    <h1>MattersTech</h1>
    <img src="./public/assets/logo.png" alt="logo"/>
  </header>

   <!-- MAIN SECTION -->
  <main id="content">
    <form action="sendEmail.php" method="post">
    <i class="fas fa-envelope"></i>
                      
      <?php if (isset($_GET['error']) && $_GET['error']!== ""){?>
      <p class="error"><?php echo $_GET['error'];?></p>
      <?php } ?>

      <?php if(isset($_GET['success'])) { ?>
      <p class="success"><?php echo $_GET['success']; ?></p>
      <?php } ?>

      <label for="username_to_change_pass">Insira seu Nome de Usuário</label>
      <input type="text" id="username_to_change_pass" name="username_to_change_pass"/>

      <div id="changepass_buttons">
        <a href="index.php" id="cnt"><i class="fas fa-arrow-left"></i> voltar</a>
        <button type="submit">enviar</button>
      </div>

    </form>
  </main>
  
  <!-- FOOTER SECTION-->
  <footer>
    <p> &copy;Matterstech 2021</p>
  </footer> 

</body>
</html>