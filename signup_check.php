<?php
session_start();
include "./src/db/db_conn.php";

if(isset($_POST['username']) && isset($_POST['password']) && 
isset($_POST['email']) && isset($_POST['name']) && isset($_POST['confirm'])){
    
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }

    $uname = validate($_POST['username']);
    $pass = validate($_POST['password']);
    $email = validate($_POST['email']);
    $name = validate($_POST['name']);
    $confirm = validate($_POST['confirm']);

    $user_data = 'username='. $uname. '&name='. $name. '&email='. $email;


    if(empty($email)){
        header("Location: register.php?error=Preencha o campo de E-mail&$user_data");
        exit(); 
    }else if(empty($name)){
        header("Location: register.php?error=Preencha o campo de Name&$user_data");
        exit(); 
    }
    else if(empty($uname)){
        header("Location: register.php?error=Preencha o campo de User Name&$user_data");
        exit(); 
    }
    else if(empty($pass)){
        header("Location: register.php?error=Preencha o campo de Password&$user_data");
        exit(); 
    }
    else if(strlen($pass) < 4){
        header("Location: register.php?error=A senha deve conter mais de 4 caracteres");
        exit(); 
    }
    else if(empty($confirm)){
        header("Location: register.php?error=Preencha o campo de Confirm Password&$user_data");
        exit(); 
    }
    else if($pass !== $confirm){
        header("Location: register.php?error=A senha e confirmação de senha não são compatíveis&$user_data");
        exit(); 
    }
    
    else{
        $pass = md5($pass);

        $sql = "SELECT * FROM users WHERE user_name='$uname' ";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){
            header("Location: register.php?error=Esse usuário já existe&$user_data");
            exit(); 
        } else {
            $sql2 = "INSERT INTO users(user_name, password, name, email) VALUES('$uname', '$pass', '$name', '$email')";
            $result2 = mysqli_query($conn, $sql2);

            if($result2){
                header("Location: register.php?success=Conta criada com sucesso! Vá para tela de Login");
                exit();
                
            }else{
                header("Location: register.php?error=Erro desconhecido&$user_data");
                exit(); 
            }
        }
    }

}else{
    header("Location: register.php");
    exit(); 
}
