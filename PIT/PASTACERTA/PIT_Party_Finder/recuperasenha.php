<?php
   require('../conexao.php');

    $tel = $_POST["telefone"];
 //SELECT para verificar se o Usuario esta cadastrado no banco
 $query_select = "SELECT * FROM usuarios  WHERE login = '$tel';";
 $result = $connect->query($query_select);

 if($result->num_rows >0){ //se as informacoes batem com alguma entrada da tabela:
     $row = $result->fetch_assoc();  //pega a entrada da tabela selecionada
        echo "Sua senha : ".$row['telefone'];
    
    }
    else{
        echo "<script type='text/javascript'>alert('Esse telefone não existe');"; //alert em JS de erro
        echo "javascript:window.location='recuperasenha.html';</script>";
    }



?>