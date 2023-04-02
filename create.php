<?php
    include_once('database/dados.php');

    if (isset($_POST['submit'])) {
        if (ContaDAO::create($_POST) == 1) {
            header('Location: login.php');
        } else {
            echo "Erro ao inserir no banco de dados.";
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog João Paulo</title>
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500&display=swap');
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        .area-create {
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
        }
        .login-create {
            background-color: #cacaca;
            border-radius: 10px;
            width: 360px;
            height: 470px;
        }
        .login-create form {
            display: flex;
            flex-direction: column;
            padding: 20px;
        }
        .login-create h2 {
            color: #696969;
            text-align: center;
            text-transform: uppercase;
            font-size: 25px;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all 0.4s ease;
        }
        .login-create h2:hover {
            transform: scale(1.1);
        }
        .login-create span {
            color: #0000ff;
        }
        .login-create label {
            margin-top: 15px;
            font-size: 16px;
            text-transform: capitalize;
        }
        .login-create input {
            margin-top: 4px;
            height: 44px;
            outline: none;
            border: none;
            padding: 12px;
            border-radius: 10px;
            font-size: 15px;
        }
        .login-create .crud {
            font-size: 15px;
            letter-spacing: 1px;
            outline: none;
            border: none;
            background-color: #00059b;
            color: #ffffff;
            text-transform: uppercase;
            text-decoration: none;
            border-radius: 10px;
            margin-top: 30px;
            cursor: pointer;
            opacity: 1;
            transition: 0.3s;
        }
        .login-create .crud:hover {
            opacity: 0.9;
        }
        .login-create .back {
            padding: 10px;
            text-align: center;
            font-size: 15px;
            letter-spacing: 1px;
            outline: none;
            border: none;
            margin-top: 8px;
            background-color: #006f16;
            color: #ffffff;
            text-transform: uppercase;
            text-decoration: none;
            border-radius: 10px;
            cursor: pointer;
            opacity: 1;
            transition: 0.3s;
        }
        .login-create .back:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <div class="area-create">
        <div class="login-create">
            <form method="POST">
                <h2>Fazer <span>Cadastro</span></h2>
                <label for="usuario">Usuário</label>
                <input type="text" id="usuario" name="usuario" placeholder="Digite seu nome de usuário...">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="Digite seu e-mail...">
                <label for="senha">Senha</label>
                <input type="text" id="senha" name="senha" placeholder="Digite sua senha...">
                <input type="submit" value="Cadastrar" class="crud" name="submit" onclick="salvar()">
                <a href="logout.php" class="back">Voltar</a>
            </form>
        </div>
    </div>
    <script>
        function salvar() {
            window.alert("Contas cadastrado com sucesso!");
        }
    </script>
</body>
</html>