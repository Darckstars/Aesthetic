<?php
   
    include_once('dados.php');

    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $email = $_POST['email'];
        $data = $_POST['data'];
        $hora = $_POST['hora'];

        $sqlUpdate = "UPDATE agendar 
        SET email= '$email',data='$data',hora='$hora'
        WHERE id= '$id'";
        $result = $conexao->query($sqlUpdate);
        print_r($result);
    }
    header('Location: meu-agendamento.php');

?>