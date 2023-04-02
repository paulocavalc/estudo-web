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
        .area-login {
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .login {
            background-color: #cacaca;
            border-radius: 10px;
            width: 360px;
            height: 410px;
        }
        .login form {
            display: flex;
            flex-direction: column;
            padding: 20px;
        }
        .login h2 {
            color: #696969;
            text-align: center;
            text-transform: uppercase;
            font-size: 28px;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all 0.4s ease;
        }
        .login h2:hover {
            transform: scale(1.2);
        }
        .login span {
            color: #0000ff;
        }
        .login label {
            margin-top: 16px;
            font-size: 16px;
            text-transform: capitalize;
        }
        .login input {
            margin-top: 8px;
            height: 44px;
            outline: none;
            border: none;
            padding: 12px;
            border-radius: 10px;
            font-size: 15px;
        }
        .login .entrar {
            font-size: 15px;
            letter-spacing: 1px;
            margin-top: 27px;
            outline: none;
            border: none;
            background-color: #00059b;
            color: #ffffff;
            text-transform: uppercase;
            cursor: pointer;
            opacity: 1;
            transition: 0.3s;
        }
        .login .entrar:hover {
            opacity: 0.9;
        }
        .login p {
            margin-top: 23px;
            font-size: 13px;
            text-align: center;
        }
        .login p a {
            text-decoration: none;
        }
        .login p a:hover {
            color: #dd2c00;
        }
        .redlogin {
            text-align: center;
        }
        .black {
            color: #d32f2f;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="area-login">
        
        <div class="login">
            <form action="result.php" method="POST">
                <h2>Pau<span>login</span></h2>
                <?php
                    if(isset($_GET['errog'])) {
                        $ls = $_GET['errog'];
                        echo '<div class="redlogin"><p class="black">'.$ls.'</p></div>';
                    }
                ?>
                <label for="email">Email</label>
                <input type="text" name="email" placeholder="Digite seu e-mail...">
                <label for="senha">Senha</label>
                <input type="password" name="senha" placeholder="Digite sua senha...">
                <input class="entrar" type="submit" name="submit" value="Entrar">
                <p>Você ainda não tem uma conta? <a href="create.php">Cadastre-se</a></p>
            </form>
        </div>
    </div>
    <script>
        function entrar() {
            window.alert("Login realizado com sucesso!");
        }
        const redlogin = document.querySelector(".redlogin");
        const blacklogin = document.querySelector(".black");
        setTimeout(() => {
            redlogin.style.display = 'none';
            blacklogin.style.display = 'none';
        }, 4000);
    </script>
</body>
</html>