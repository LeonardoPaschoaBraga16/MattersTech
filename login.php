<?php
session_start();
include "./src/db/db_conn.php";

if((isset($_POST['username']) && $_POST['username'] !== "") || (isset($_POST['password']) && $_POST['password'] !== "")){
    
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }

    $uname = validate($_POST['username']);
    $pass = validate($_POST['password']);

    if(empty($uname)){
        header("Location: index.php?error=Usuário é necessário");
        exit(); 
    }else if(empty($pass)){
        header("Location: index.php?error=Senha é necessária");
        exit(); 
    }else{
        $pass = md5($pass);

        $sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            
            if($row['user_name'] === $uname && $row['password'] === $pass){
                $_SESSION['email'] = $row['email'];
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['password'] = $row['password'];
                header("Location: home.php");
                echo "Logged in!";
            }else{
                header("Location: index.php?error=Usuário ou Senha Incorreta.");
                exit(); 
            }

        }else{
            header("Location: index.php?error=Usuário ou Senha Incorreta.");
            exit(); 
        }
    }

}else{
    header("Location: index.php?error");
    exit(); 
}


