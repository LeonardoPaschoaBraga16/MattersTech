<?php 

function EmailStructure($email, $name, $username, $password, $data_envio, $hora_envio, $id){
    $arquivo = "
    <html lang='pt-br'>
        <head>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>MattersTech</title>
            <link rel='preconnect' href='https://fonts.googleapis.com'>
            <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
            <link href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,400&display=swap' rel='stylesheet'>
            <link
            rel='stylesheet'
            href='https://use.fontawesome.com/releases/v5.13.0/css/all.css'
            integrity='sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V'
            crossorigin='anonymous'
            />
            <style>
            *{
                margin:0;
                padding:0;
                box-sizing:border-box;
            }
            ul, li, ol{
                list-style: none;
            }
            a{
                text-decoration: none;
                color: #181818;
            }
            button, input{
                outline: none;
                border: none;
            }
            body {
                font-family:'Poppins', sans-serif;
            }
            header{
                width:100%;
                color:#f0f2f5;
                background:#181818;
                display:flex;
                justify-content:flex-start;
                align-items:center;
                padding:1rem;
            }
            main{
                padding:3rem;
            }
            footer{
                margin-top:2rem;
                width:100%;
                text-align:center;
                color:grey;
                font-size:0.9rem;
            }
            </style>
        </head>
        <body >
            <header>
                <h1>Matterstech</h1>
            </header>
            <br/>
            <main>

                <p>Atenção! Não compartilhe esse email, nem o link do botão abaixo com ninguém.
                Através deles será possível mudar a senha de seu usuário. Caso você compartilhe
                esses links, a Matterstech não se responsabiliza em caso de roubo ou fraude de identidade.
                </p>
                
                <br/>
                <p>Email: $email</p>
                <p>Nome de Usuário: $username </p>
                <p>Nome: $name </p>
                <p>Data da solicitação: $data_envio</p>
                <p>Hora da solicitação: $hora_envio</p>
                <br/>
                <h4>CLIQUE NO LINK ABAIXO PARA MUDAR A SENHA</h4>
                <br/>
                <br/>
                <a style='color:#f0f2f5;
                background:hsla(177, 70%, 41%, 1);
                padding:1rem;
                margin-top:1rem;
                width:100%;
                text-align:center;
                ' href='localhost/websites/Inter/change-pass-forgot.php?id=$id&pass=$password'>MUDAR</a>
            </main>
            <footer>
                <p>&copy;Matterstech 2021</p>
            </footer>
        </body>
    </html>
    ";

    return $arquivo;
}

?>