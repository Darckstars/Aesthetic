<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <link rel="stylesheet" href="./styles/style.css"> 
    
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, #F500E1, #AD00F4);
        }
        div{
            background-color: rgba(0, 0, 0, 0.6);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 70px;
            border-radius: 15px;
            color: white;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        .inputSubmit{
            background-color: #F500E1;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
        }

        .inputSubmit:hover{
            background-color: #AD00F4;
            cursor: pointer;
        }
        header{
            padding: 1% 25%;
        }
        
    </style>
</head>
<body>

<header class="cabecalho">
        <nav class="cabecalho__menu1">
          <a class="cabecalho__menu__logo" href="index.html">
            <image src="./assets/AESTHETIC.png">
          </a>
          <section class="cabecalho__menu2">
           <a class="cabecalho__menu__link" href="agendamento.html">Agendamento</a>
           <a class="cabecalho__menu__link" href="tela-de-cadastro.php">Cadastro</a>
           <a class="cabecalho__menu__link" href="login.php">Login</a>
          </section>
        </nav>
      </header>

   
    <div>
        <h1>Login</h1>
            <form action="testLogin.php" method="POST">
                <input type="text" name="email" placeholder="Email">
                <br><br>
                <input type="password" name="senha" placeholder="Senha">
                <br><br>
                <input class = "inputSubmit" type="submit" name="submit" value="Enviar">
    </div>
</body>
</html>