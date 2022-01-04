<?php 
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>

<!DOCTYPE html>
<html lang="pt-br">
<html class="html">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Dados</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./public/icons/css/all.css"/>
    <link rel="stylesheet" type="text/css" href="./public/styles/changedatas.css"/>
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
    <form action="change-d.php" method="post">
    <i class="fas fa-user-edit"></i>
                      
      <?php if (isset($_GET['error'])){?>
      <p class="error"><?php echo $_GET['error'];?></p>
      <?php } ?>

      <?php if(isset($_GET['success'])) { ?>
      <p class="success"><?php echo $_GET['success']; ?></p>
      <?php } ?>

      <label for="newemail">E-mail</label>
      <input type="email" id="email" name="newemail" value="<?php echo $_SESSION['email']?>"/>

      <label for="newname">Nome</label>
      <input type="text" id="newname" name="newname" value="<?php echo $_SESSION['name']?>"/>

      <label for="newpassword">Nova senha</label>
      <input type="newpassword" id="newpassword" name="np"/>

      <label for="confirmnewpassword">Confirmar nova senha</label>
      <input type="confirmnewpassword" id="confirmnewpassword" name="c_np"/>

      <div id="changepass_buttons">
        <a href="perfil.php" id="cnt"><i class="fas fa-arrow-left"></i> Voltar</a>
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