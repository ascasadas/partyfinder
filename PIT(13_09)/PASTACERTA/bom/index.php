<?php


if(isset($_POST['cadastrar']))
{
  $login = $_POST['login'];
  $senha = $_POST['senha'];
  $nome = $_POST['nome'];
  $email= $_POST['email'];
  $telefone = $_POST['telefone'];

  $host = 'localhost';
  $user = 'root';
  $pass = '';
  $dbname = 'cadastro';

  $connect = mysqli_connect($host,$user,$pass,$dbname);

  $sql  ="INSERT INTO usuarios(`login`,senha,nome,telefone) values('$login','$senha','$nome','$telefone')";
  mysqli_query($connect,$sql);
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



  <!-- HTML  -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cadastro</title>
  <!--
  <link rel="stylesheet" href="PF.css">
  -->
    <link rel="stylesheet" href="styles.css">

</head>
<body>
<table>
        <tr>

            <td><img src="PARTY FINDER.png"></td>
            
            
            
            <td><img src="Home.png">   </td>
            
            
            
            <td><img src="Party.png">   </td>
            
            
            
            <td><img src="Find.png">   </td>
            
            
            
            <td><img src="Login.png">   </td>
            
            
            
            <td><img src="Register.png">   </td>



            <td><img src="Conta.png">   </td>
            
            </tr>
    
            <tr>
                <td colspan="7"><img src="https://s.zst.com.br/cms-assets/2021/05/rpg-de-mesa-capa.jpg"  style="object-fit: cover; max-width:100%;"></td>
                </tr>
                
                <tr>
                <td colspan="7">
                
                <h1>  </H1>
                
                <p> 
                
                    
                </p>
                
                </td>
                
                </tr>
    </table>
    <div id="DivCadastroTotal">
        <div id="LinhaPretaAmarela">
            <div id="Decorção1Preta"></div>
            <div id="Decorção2amarela"></div>
            <div id="Decorção3Fundo"></div>
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
</div>
                </form>
            </div>

            <div id="DivGridDireita"> 
                <div id="LinhaCinzaDireita"></div>
                <div id="LinhaCinzaDireita"></div>
                <div id="LinhaCinzaDireita"></div>
                <div id="LinhaLaranjaDireita"></div>
                <div id="LinhaLaranjaDireita"></div>
                <div id="LinhaLaranjaDireita"></div>
                <div id="LinhaCinzaDireita"></div>
                <div id="LinhaLaranjaDireita"></div>
                <div id="LinhaCinzaDireita"></div>
                <div id="LinhaLaranjaDireita"></div>
            </div>

        </div>


        </div>

    </div>
  <form method="POST">
    <label>NickName</label><input type="text" name="login" id="login"><br>
    <label>Nome:</label><input type="text" name="nome" id="nome"><br>
    <label>E-mail:</label><input type="text" name="email" id="email"><br>
    <label>Telefone:</label><input type="text" name="telefone" id="telefone"><br>
    <label>Senha:</label><input type="password" name="senha" id="senha"><br>

    <input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
    
  
</body>
</html>
