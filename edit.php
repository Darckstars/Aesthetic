<?php
      include_once('dados.php');

      if(!empty($_GET['id']))
      {
          $id = $_GET['id'];
          $sqlSelect = "SELECT * FROM agendar WHERE id= $id";
          $result = $conexao->query($sqlSelect);
          if($result->num_rows > 0)
          {
              while($user_data = mysqli_fetch_assoc($result))
              {
                  
                  $email = $user_data['email'];
                  $data = $user_data['data'];
                  $hora = $user_data['hora'];

              }
          }
          else
          {
              header('Location: sistema.php');
          }
      }
      else
      {
          header('Location: sistema.php');
      }
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
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
            font-size: 20px;
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
            top:-70px;
            font-size: 20px;
            color: #F500E1;
            
        }

        #data{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }

        #update {
            background-color: #F500E1;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
        }
        
        #update:hover{
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
          <a class="cabecalho__menu__logo" href="">
            <image src="./assets/AESTHETIC.png">
          </a>
          <section class="cabecalho__menu2">
           <a class="cabecalho__menu__link" href="meu-agendamento.php">Meu agendamento</a>
           <a class="cabecalho__menu__link" href="sair.php">Sair</a>
          </section>
        </nav>
      </header>

    <?php
        echo "<h1><h1>";
    ?>
    
    <div class="box">
        <form action="saveEdit.php" method="POST">
            <fieldset>
                <legend><b>Tela De Agendamento</b></legend>
                <br>

                <div class="inputBox">
                    <input type="text" name="email" id="nome" class="inputUser" value="<?php echo $email ?>" required>
                    <label for="email" class="labelInput"> Email </label>
                </div>
                <br><br>

                <div>
                    <label for="data"> <b>Data</b></label>
                    <input type="date" name="data" id="data" value="<?php echo $data ?>" required >
                </div>   
                <br><br>

                <div class="inputBox">
                    <input type="text" name="hora" id="hora" class="inputUser" value="<?php echo $hora ?>" required>
                    <label for="hora" class="labelInput"> Hora </label>
                </div>
                <br><br>

               <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="submit" name="update" id="update">
               
                

            </fieldset>
        </form>

   </div>
</body>
</html>