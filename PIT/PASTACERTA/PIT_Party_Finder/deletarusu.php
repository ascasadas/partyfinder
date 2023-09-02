<?php
session_start();
// Configurações do banco de dados
$host = 'localhost';
  $user = 'root';
  $pass = '';
  $dbname = 'cadastro';

// Conexão com o banco de dados
$conn = new mysqli($host, $user, "", $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// ID do usuário que você deseja excluir
$userID = $_SESSION['id'];

// Consulta SQL para excluir o usuário
$sql = "DELETE FROM usuarios WHERE id = $userID";

if ($conn->query($sql) === TRUE) {
    echo "usuario deletado com sucesso";
} else {
    echo "Erro ao deletar o usuário: " . $conn->error;
}

// Fechar a conexão
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="index.html"><button> Fazer cadastro </button></a>
</body>
</html>
