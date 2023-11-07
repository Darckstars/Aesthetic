<?php
    if(isset($_POST['submit']))
    {
    session_start();
    //print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];
        
    

    include_once('dados.php');

    $Nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $data_nasc = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];

    $result = mysqli_query($conexao, " INSERT INTO usuarios (nome,email,senha,data_nasc,cidade) 
    VALUES ('$Nome','$email','$senha','$data_nasc','$cidade')");
  
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Cadastro</title>
    <link rel="stylesheet" href="./styles/style.css"> 

    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, #F500E1, #AD00F4);
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0 , 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
            color: white;
        }
        fieldset{
            border: 3px solid darkmagenta;
        }
        legend{
            border: 1px solid darkmagenta;
            padding: 10px;
            text-align: center;
            background-color: darkmagenta;
            border-radius: 5px;
        }

        .inputbox{
            position: relative;
        }

        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: relative;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition:.5s;
        }
        .inputUser:focus ~ .labelInput,
        .imputUser:valid ~ .labelInput{
            top:-40px;
            font-size: 12px;
            color: #F500E1;
            
        }

        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
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


   <div class="box">
        <form action="tela-de-cadastro.php" method="POST">
            <fieldset>
                <legend><b>Tela De Cadastro</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput"> Nome Completo </label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="nome" class="inputUser" required>
                    <label for="email" class="labelInput"> Email </label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput"> Senha </label>
                </div>
                <br><br>
                <div>
                    <label for="data_nascimento"> <b>Data de Nascimento: </b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" required >
                </div>   
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput"> Cidade </label>
                </div>
                <br><br>
                <input class = "inputSubmit" type="submit" name="submit" value="Enviar">
               
                

            </fieldset>
        </form>

   </div>
</body>
</html>