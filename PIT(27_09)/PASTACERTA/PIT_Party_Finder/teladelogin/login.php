<?php
try {
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'cadastro';

    $connect = new mysqli($host, $user, $pass, $dbname);
    
    $login = $_POST["Login"];
    $senha = $_POST["Senha"];
    $result = $connect->query($query_select);

    $query_select = "SELECT login FROM usuario WHERE login = ? AND senha = ?";
    $stmt = $connect->prepare($query_select);
    $stmt->bind_param("ss", $login, $senha);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        session_start();
        while ($row = $result->fetch_assoc()) {
            $_SESSION['Login'] = $row['login'];
            $_SESSION["Senha"] = $senha;
            header('Location: PIT Party Finder/index.html');
            exit(); // Termina a execução após o redirecionamento
        }
    } else {
        echo "Login ou senha inválidos.";
    }
} catch (Exception $ex) {
    echo $ex->getMessage();
}

echo"pagina é essa"
?>