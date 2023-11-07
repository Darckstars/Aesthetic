<?php
   session_start();
   include_once('dados.php');
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];

    $sql = "SELECT * FROM agendar WHERE email LIKE '$logado'";

    $result = $conexao->query($sql);

    

    
?>





<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu agendamento</title>
    <link rel="stylesheet" href="./styles/style.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>

        body{
            text-align: center;
            background-color: #AD00F4;
            color: #ffffff;
        }
        .table-bg{
            background: rgba(0,0,0,0.3);
            border-radius: 15px 15px 0 0;
        }

    </style>

</head>
<body>
    
<header class="cabecalho">
        <nav class="cabecalho__menu1">
          <a class="cabecalho__menu__logo" href="">
            <image src="./assets/AESTHETIC.png">
          </a>
          <section class="cabecalho__menu2">
           <a class="cabecalho__menu__link" href="sistema.php">Agendar</a>
           <a class="cabecalho__menu__link" href="sair.php">Sair</a>
          </section>
        </nav>
      </header>
      <br><br>
      <?php
        echo "<h1>Bem vindo(a)! $logado<h1>";
    ?>

    <div class="m-5">
        <table class="table text-white table-bg">
         <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Email</th>
                <th scope="col">Data</th>
                <th scope="col">Hora</th>
                <th scope="col">...</th>
            </tr>
        </thead>
        <tbody>
       
            <?php 
                while($user_data = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>".$user_data['id']."</td>";
                    echo "<td>".$user_data['email']."</td>";
                    echo "<td>".$user_data['data']."</td>";
                    echo "<td>".$user_data['hora']."</td>";
                    echo "<td>
                    
                    <a class='btn btn-sm btn-primary' href='edit.php?id=$user_data[id]' title='Editar'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                        <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                    </svg>
                    </a> 

                    <a class='btn btn-sm btn-danger' href='delete.php?id=$user_data[id]' title='Deletar'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                    <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                                </svg>
                            </a>

                    </td>";
                    echo "<tr>";

                }
            ?>

        </tbody>
        </table>
    </div>
    


</body>
</html>