<?php
try {
   require('../conexao.php');
    $login = $_POST["login"];
    $senha = $_POST["senha"];
   

    //SELECT para verificar se o Usuario esta cadastrado no banco
    $query_select = "SELECT * FROM usuarios  WHERE login = '$login' AND SENHA = '$senha';";
    $result = $connect->query($query_select);

    if($result->num_rows >0){ //se as informacoes batem com alguma entrada da tabela:
        
        while($row = $result->fetch_assoc()) { //pega a entrada da tabela selecionada
            if(!isset($_SESSION)){session_start();} //inicia uma sessão se a este ponto nao estiver nenhuma sessao iniciada            

           
            $_SESSION['id'] = $row['id'];//n apagar isso por favor
            header('Location: ../PIT_Party_Finder/feito.php'); //envia para página de perfil
        }
    }
    else{
        echo "<script type='text/javascript'>alert('FALHA AO LOGAR! Email ou Senha INCORRETOS!');"; //alert em JS de erro
        echo "javascript:window.location='login.html';</script>";
    }
} catch (Exception $ex) {
    echo $ex->getMessage();
}

?>
