<?php
    include_once('database/dados.php');

    if (isset($_POST["submit"]) && !empty($_POST["email"]) && !empty($_POST["senha"])) {
        
        $email=$_POST['email'];
        $senha=$_POST['senha'];

        $pgsql = "SELECT FROM contas WHERE email='$email' AND senha='$senha'";
        $conn = ContaDAO::connect();
        $result=pg_query($conn, $pgsql);
       
        if (pg_num_rows($result) < 1) {
            // Erro: e-mail ou senha sem iguais com cadastrar
            header('Location: login.php?errog=E-mail ou senha incorretos.');

        } else {
            // Você já cadastrado com sucesso
            header('Location: result-data.php?success=Login realizado com sucesso!');
        }
    }
    else {
        // Erro: e-mail e senha sem cadastrar
        header('Location: login.php?errog=Todos campos são obrigatório.');
    }
?>