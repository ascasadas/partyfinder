<?php

try {
  $login = $_POST['login'];
  $senha = $_POST['senha'];
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];

  $host = 'localhost';
  $user = 'root';
  $pass = '';
  $dbname = 'cadastro';

  $connect = mysqli_connect($host, $user, $pass, $dbname);


  $query_select = "SELECT 'login' FROM usuarios where login = '$login' ;";
  $result = $connect->query($query_select);
  if ($result->num_rows > 0) {
    echo "<script type='text/javascript'>alert('Login jã existente')javascript;window.location='feito.html';</script>";

  } else {
    $sql  = "INSERT INTO usuarios(`login`,senha,nome,telefone) values('$login','$senha','$nome','$telefone')";
    $query_run = mysqli_query($connect, $sql);
    echo "<script> type='text/javascript'>alert('Login Cadastro concluido com sucesso!')";
    echo "<javascript;window.location='index.html';</script>";

    header("Location: index.html");

    // if($query_run)
    // {
    //   echo"<script> type='text/javascript'>alert('Login já existente')";
    //   echo "javascript;window.location='index.html';</script>";        } 
    //     else
    //     {
    //         echo"<script type='text/javascript'>alert('Falha no cadastro')";
    //         echo "javascript;window.location='index.html';</script>";
    //     }  
  }
} catch (Exception $ex) {
  echo $ex->getMessage();
}

/*$login = $_POST['login'];
$senha = MD5($_POST['senha']);
$connect = mysqli_connect('localhost', 'root', "", "cadastro");

$query_select = "SELECT login FROM usuarios WHERE login = '$login'";
$select = mysqli_query($query_select, $connect);
$array = mysqli_fetch_array($select);
$logarray = $array['login'];

if ($login == "" || $login == null) {
  echo "<script language='javascript' type='text/javascript'>
    alert('O campo login deve ser preenchido');window.location.href='
    cadastro.html';</script>";
} else {
  if ($logarray == $login) {

    echo "<script language='javascript' type='text/javascript'>
        alert('Esse login já existe');window.location.href='
        cadastro.html';</script>";
    die();
  } else {
    $query = "INSERT INTO usuarios (login,senha) VALUES ('$login','$senha')";
    $insert = mysqli_query($query, $connect);

    if ($insert) {
      echo "<script language='javascript' type='text/javascript'>
          alert('Usuário cadastrado com sucesso!');window.location.
          href='login.html'</script>";
    } else {
      echo "<script language='javascript' type='text/javascript'>
          alert('Não foi possível cadastrar esse usuário');window.location
          .href='cadastro.html'</script>";
    }
  }
}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="cadastrojaexiste.css">

</head>
<body>
  <form method="POST" action="../TELA_DE_LOGIN/login.html">
  <input id="btnjaexiste" type="submit" value="Tela de login" id="cadastrar" name="cadastrar" link="login.html">
  

<div id="jaexiste"><h1> 
Esse cadastro ja existe Por favor retorne a tela anterior
 
</h1></div>

<div id="DivLoginTotal">
        <div id="LinhaPretaAmarela">
            <div id="DecorçãoPreta"></div>
            <div id="Decorçãoamarela"></div>
            <div id="DecorçãoFundo"></div>
            <div id="DecorçãoLaranja"></div>
        </div>



        <div id="DivCentro">

            <div id="DivGridEsquda"> 
                <div id="LinhaLaranjaEsquerda"></div>
                <div id="LinhaLaranjaEsquerda"></div>
                <div id="LinhaAmarelaEsquerda"></div>
                <div id="LinhaAmarelaEsquerda"></div>
                <div id="LinhaAmarelaEsquerda"></div>
                <div id="LinhaCinzaEsquerda"></div>
                <div id="LinhaAmarelaEsquerda"></div>
                <div id="LinhaCinzaEsquerda"></div>
                <div id="LinhaAmarelaEsquerda"></div>
                <div id="LinhaCinzaEsquerda"></div>
                <div id="LinhaCinzaEsquerda"></div>
            </div>
            
            <div id="DivLogin">
                <div id="DivLoginAjuste">

                    
            

                </div>
                <div id="DivFormsLogin">

                </div>


            </div>

            <div id="DivGridDireita"> 
                <div id="LinhaCinzaDireita"></div>
                <div id="LinhaCinzaDireita"></div>
                <div id="LinhaCinzaDireita"></div>
                <div id="LinhaAmarelaDireita"></div>
                <div id="LinhaAmarelaDireita"></div>
                <div id="LinhaLaranjaDireita"></div>
                <div id="LinhaCinzaDireita"></div>
                <div id="LinhaLaranjaDireita"></div>
                <div id="LinhaCinzaDireita"></div>
                <div id="LinhaLaranjaDireita"></div>
            </div>

        </div>


        </div>

    </div>
    
</body>
</html>




