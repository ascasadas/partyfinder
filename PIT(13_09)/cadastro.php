<?php

$login = $_POST['login'];
$senha = MD5($_POST['senha']);
$connect = mysqli_connect('localhost','root',"","cadastro");

$query_select = "SELECT login FROM usuarios WHERE login = '$login'";
$select = mysqli_query($query_select,$connect);
$array = mysqli_fetch_array($select);
$logarray = $array['login'];

  if($login == "" || $login == null){
    echo"<script language='javascript' type='text/javascript'>
    alert('O campo login deve ser preenchido');window.location.href='
    cadastro.html';</script>";

    }else{
      if($logarray == $login){

        echo"<script language='javascript' type='text/javascript'>
        alert('Esse login já existe');window.location.href='
        cadastro.html';</script>";
        die();

      }else{
        $query = "INSERT INTO usuarios (login,senha) VALUES ('$login','$senha')";
        $insert = mysqli_query($query,$connect);
 
        if($insert){
          echo"<script language='javascript' type='text/javascript'>
          alert('Usuário cadastrado com sucesso!');window.location.
          href='login.html'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>
          alert('Não foi possível cadastrar esse usuário');window.location
          .href='cadastro.html'</script>";


        }
      }
    }
?>
<!-- html -->
<form method="POST" action="cadastro.php">
<label>NickName:</label><input type="text" name="login" id="login"><br>
<label>Senha:</label><input type="password" name="senha" id="senha"><br>
<label>Email:</label><input type="text" name="login" id="login"><br>
<label>Nome:</label><input type="text" name="login" id="login"><br>
<label>Telefone:</label><input type="text" name="login" id="login"><br>


<input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">

</body>
</html>