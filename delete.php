<?php

if(!empty($_GET['id']))
      {
        include_once('dados.php');
          $id = $_GET['id'];
          $sqlSelect = "SELECT * FROM agendar WHERE id= $id";
          $result = $conexao->query($sqlSelect);
          if($result->num_rows > 0)
          {
            $sqlDelete = "DELETE FROM agendar WHERE id=$id";
            $resultDelete = $conexao->query($sqlDelete);
          }
        }
        header('location: meu-agendamento.php');

?>