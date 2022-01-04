<?php

if(isset($_GET['pass']) && $_GET['pass'] !== "" && isset($_GET['id']) && $_GET['id']!== "") {
    $pass = $_GET['pass'];
    $id = $_GET['id'];
?>
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
    <link rel="stylesheet" type="text/css" href="./public/styles/changepassforgot.css"/>
    <link rel="shortcut icon" href="public/assets/logo.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
<body>
  <!-- HEADER SECTION -->
  <header id="header">
    <h1>MattersTech</h1>
    <img src="./public/assets/logo.png" alt="logo"/>
  </header>

   <!-- MAIN SECTION -->
  <main id="content">
    <form  action="change-pass-forgot-logic.php" method="POST">
      <i class="fas fa-key"></i>
                      
      <?php if (isset($_GET['error']) && $_GET['error']!== ""){?>
      <p class="error"><?php echo $_GET['error'];?></p>
      <?php } ?>

      <?php if(isset($_GET['success'])) { ?>
      <p class="success"><?php echo $_GET['success']; ?></p>
      <?php } ?>

      <label for="password">Nova senha</label>
      <input type="password" id="password" name="newpass"/>

      <label for="password">Confirmar nova senha</label>
      <input type="password" id="confirm_password" name="confirmnewpass"/>

      <input style="visibility:hidden; opacity:0;" type="input" name="pass" value="<?php echo $pass;?>">
      <input style="visibility:hidden; opacity:0;" type="input" name="id" value="<?php echo $id;?>">

      <div id="changepass_buttons">
        <button type="submit">Mudar</button>
      </div>
    </form>
  </main>
  
  <!-- FOOTER SECTION-->
  <footer>
    <p> &copy;Matterstech 2021</p>
  </footer> 

</body>
</html>
<?php 
}else{
    header("Location: index.php");
    exit();
} 
?>


