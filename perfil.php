<?php 
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>

<!DOCTYPE html>
<html lang="pt-br">
<html class="html">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MattersTech</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./public/icons/css/all.css"/>
    <link rel="stylesheet" type="text/css" href="./public/styles/perfil.css"/>
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
      <div id="card_perfil">
        <i class="fas fa-user-circle"></i>
        <div class="user_information">
          <p>Email:</p>
          <p style="text-transform:none;"><?php echo $_SESSION['email']?></p>
        </div>
        <div class="user_information">
          <p>Nome:</p>
          <p style="text-transform:none;"><?php echo $_SESSION['name']?></p>
        </div>
        <div class="user_information">
          <p>Usuário:</p>
          <p style="text-transform:none;"><?php echo $_SESSION['user_name']?></p>
        </div>
        <a id="change_pass_link" href="change-datas.php"><i class="fas fa-edit"></i> Editar Dados</a>
        <div id="perfil_button">
          <a href="./home.php"><i class="fas fa-arrow-left"></i> HOME</a>
          <a href="./logout.php">logout <i class="fas fa-sign-out-alt"></i></a>
        </div>
      <div>
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