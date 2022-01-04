<?php
session_start();

include "./src/db/db_conn.php";
include "./src/utils/sendEmailStructure.php";
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

if(isset($_POST['username_to_change_pass'])) {
        
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    $username_to_change_pass = validate($_POST['username_to_change_pass']);
    $data_envio = date('d/m/Y');
    $hora_envio = date('H:i:s');

    if(empty($username_to_change_pass)){
        header("Location: forgotpass.php?error=Insira o nome de usuário");
        exit();
    }
    else {
        $sql = "SELECT * FROM users WHERE user_name='$username_to_change_pass'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) === 1){   
            $row = mysqli_fetch_assoc($result);
            
            $email= $row['email'];
            $username = $row['user_name'];
            $name = $row['name'];
            $password = $row['password'];
            $id = $row['id'];

            $sendEmail = EmailStructure($email, $name, $username,$password, $data_envio, $hora_envio, $id);

            $mail = new PHPMailer();  
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->CharSet = 'UTF-8';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->SMTPAuth = true;
            $mail->Port = 587; 
            $mail->Username = 'matterstech01@gmail.com';
            $mail->Password = 'lgyeatujrjwwsqnw';

            $mail->setFrom('matterstech01@gmail.com', 'matterstech');
            $mail->addReplyTo('matterstech01@gmail.com', 'matterstech');
            $mail->addAddress($email, $name);
            
            $mail->isHTML(true);
            $mail->Subject = 'Mudar Senha';
            $mail->Body    = $sendEmail;
   
            if(!$mail->send()) {
                echo 'Não foi possível enviar a mensagem.<br>';
                echo 'Erro: ' . $mail->ErrorInfo;
            } else {
                header("Location: forgotpass.php?success=Dados enviado para o E-mail cadastrado");
                exit();
            }
        }else {
            header("Location: forgotpass.php?error=Username Incorreto");
            exit();
        } 
    }  
}else{
    header("Location: index.php");
    exit();
}