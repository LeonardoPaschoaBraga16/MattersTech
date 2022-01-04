<?php
include "./src/db/db_conn.php";

if(isset($_POST['newpass']) && isset($_POST['confirmnewpass']) && isset($_POST['pass'])) {
  
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
    
        return $data;
    }

    $newpass = validate($_POST['newpass']);
    $confirmnewpass = validate($_POST['confirmnewpass']);
    $pass = validate($_POST['pass']); 
    $id = validate($_POST['id']);

    if(empty($newpass)){
        header("Location: change-pass-forgot.php?id=$id&pass=$pass&error=Nova Senha necessária");
        exit();
    }else if(empty($confirmnewpass)){
        header("Location: change-pass-forgot.php?id=$id&pass=$pass&error=Confirmação necessária");
        exit();
    }else if($newpass !== $confirmnewpass){
        header("Location: change-pass-forgot.php?id=$id&pass=$pass&error=A senha de confirmação não combina");
        exit();
    }else if( md5($newpass) === $pass){
        header("Location: change-pass-forgot.php?id=$id&pass=$pass&error=Insira Uma senha diferente da Antiga");
            exit();
    }else if(strlen($newpass) < 4){
        header("Location: change-pass-forgot.php?id=$id&pass=$pass&error=A senha deve conter mais de 4 caracteres");
        exit(); 
    }else{

        $sql = "SELECT password FROM users WHERE password='$pass' AND id='$id'";
        $result = mysqli_query($conn, $sql);

        $newpass = md5($newpass);

        if(mysqli_num_rows($result) === 1){
            $sql_2 = "UPDATE users SET password='$newpass' WHERE password='$pass'";
            mysqli_query($conn, $sql_2);
            echo "<script type='text/javascript'>
                    alert('Sua senha foi salva com sucesso!');
                    alert('Você será redirecionado!');
                    window.location = 'index.php';
                </script>";
        }else {
            header("Location: change-pass-forgot.php?id=$id&pass=$pass&error=[ERRO] Credenciais Não constam");
            exit();
        }
    }
}
?>