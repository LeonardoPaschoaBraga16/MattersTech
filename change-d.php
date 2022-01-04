<?php 
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

    include "./src/db/db_conn.php";

    if(isset($_POST['newemail']) && isset($_POST['newname']) && isset($_POST['np'])  && isset($_POST['c_np'])) {
        
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
    
            return $data;
        }
        $newemail = validate($_POST['newemail']);
        $newname = validate($_POST['newname']);
        $op = $_SESSION['password'];
        $oldname = $_SESSION['name'];
        $oldemail = $_SESSION['email'];
        $np = validate($_POST['np']);
        $c_np = validate($_POST['c_np']);
        $id = $_SESSION['id'];

        $sql = "SELECT password FROM users WHERE id='$id' AND password='$op'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) === 1){
            
            if(!empty($newname) || !empty($newemail) || !empty($np)){
                $changesDid = 0;
                if(!empty($newname) && $newname !== $oldname){
                    if(strlen($newname) < 3){
                        header("Location: change-datas.php?error=Nome deve conter mais de 3 caractéres");
                        exit(); 
                    }else{
                        $sql_name = "UPDATE users SET name='$newname' WHERE id='$id'";
                        mysqli_query($conn, $sql_name);

                        $_SESSION['name'] = $newname;
                        $changesDid++;
                    }
                }
                if(!empty($newemail) && $newemail !== $oldemail){
                    
                    $sql_email = "UPDATE users SET email='$newemail' WHERE id='$id'";
                    mysqli_query($conn, $sql_email);
    
                    $_SESSION['email'] = $newemail;  
                    $changesDid++; 
                }


                if(!empty($np)){
                    if(strlen($np) < 4){
                        header("Location: change-datas.php?error=A senha deve conter mais de 4 caractéres");
                        exit(); 
                    }
                    $np = md5($np);
                    $c_np = md5($c_np);

                    if($np !== $c_np){
                        header("Location: change-datas.php?error=A senha de confirmação não combina");
                        exit();
                    }

                    if($op === $np){
                        header("Location: change-datas.php?error=Insira Uma senha diferente da Antiga");
                        exit();
                    }


                    $sql_2 = "UPDATE users SET password='$np' WHERE id='$id'";
                    mysqli_query($conn, $sql_2);

                    $_SESSION['password'] = $np;
                    $changesDid++;
                }
                if($changesDid === 0){
                    header("Location: change-datas.php?error=Nenhum Dado foi alterado!");
                    exit();
                }else{
                    header("Location: change-datas.php?success=Dados Alterados com Sucesso!");
                    exit();
                }
                
            }else{
                header("Location: change-datas.php?error=Preencha os Campos Corretamente");
                exit();
            }   
        }else {
            header("Location: change-datas.php?error=[ERROR] Tente Mais Tarde!");
        exit();
        }
        
    }else{
        header("Location: change-datas.php");
        exit(); 
    }      
}else{
    header("Location: index.php");
    exit();
}