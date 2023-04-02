<?php
    include_once('database/dados.php');

    if (isset($_GET['editor_id'])) {
        $data = ContaDAO::getById($_GET['editor_id']);
    }
    
    if (isset($_POST['submit'])) {
        var_dump($_POST);
        $update = ContaDAO::update($_POST);
        if ($update == 1) {
            header('Location: result-data.php?update=Contas atualizado com sucesso!');
        } else {
            echo "Erro ao alterar no Banco de Dados";
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
        .area-update {
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
        }
        .login-update {
            background-color: #cacaca;
            border-radius: 10px;
            width: 360px;
            height: 460px;
        }
        .login-update form {
            display: flex;
            flex-direction: column;
            padding: 20px;
        }
        .login-update h2 {
            color: #696969;
            text-align: center;
            text-transform: uppercase;
            font-size: 25px;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all 0.4s ease;
        }
        .login-update h2:hover {
            transform: scale(1.1);
        }
        .login-update span {
            color: #0000ff;
        }
        .login-update label {
            margin-top: 15px;
            font-size: 16px;
            text-transform: capitalize;
        }
        .login-update input {
            margin-top: 4px;
            height: 44px;
            outline: none;
            border: none;
            padding: 12px;
            border-radius: 10px;
            font-size: 15px;
        }
        .login-update .crud {
            font-size: 15px;
            letter-spacing: 1px;
            outline: none;
            border: none;
            margin-top: 30px;
            background-color: #000000;
            color: #ffffff;
            text-transform: uppercase;
            text-decoration: none;
            border-radius: 10px;
            cursor: pointer;
            opacity: 1;
            transition: 0.3s;
        }
        .login-update .crud:hover {
            opacity: 0.9;
        }
        .login-update .blue {
            padding: 10px;
            text-align: center;
            font-size: 15px;
            letter-spacing: 1px;
            outline: none;
            border: none;
            margin-top: 8px;
            background-color: #00059b;
            color: #ffffff;
            text-transform: uppercase;
            text-decoration: none;
            border-radius: 10px;
            cursor: pointer;
            opacity: 1;
            transition: 0.3s;
        }
        .login-update .blue:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <div class="area-update">
        <div class="login-update">
            <form method="POST">
                <h2>Fazer <span>Update</span></h2>
                <?php
                    //$pgsql = "SELECT * FROM contas WHERE id=$id LIMIT 1";
                    //$result = pg_query($conn, $pgsql);
                    //$row = pg_fetch_assoc($result);
                ?>
                <label for="usuario">Usuário</label>
                <input type="text" id="usuario" name="usuario" value="<?php echo $data['usuario']?>">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" value="<?php echo $data['email']?>">
                <label for="senha">Senha</label>
                <input type="text" id="senha" name="senha" value="<?php echo $data['senha']?>">
                <input type="submit" value="Atualizar" class="crud" name="submit">
                <a href="result-data.php" class="blue">Voltar</a>
            </form>
        </div>
    </div>
</body>
</html>