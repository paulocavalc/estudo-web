<?php

    include_once('database/dados.php');
    $data = ContaDAO::get_all('contas');

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
        .container {
            display: flex;
            flex-direction: column;
            height: 100vh;
            justify-content: center;
            align-items: center;
        }
        h1 {
            color: #e65100;
            margin-bottom: 20px;
        }
        .table {
            width: 800px;
            text-align: center;
            border: 3px solid #5d4037;
            margin-top: 20px;
            background-color: #5d4037;
        }
        .table tr {
            height: 30px;
            background-color: #f5f5f5;
        }
        .table thead {
            height: 40px;
        }
        .exit {
            padding: 10px 50px;
            text-decoration: none;
            margin-top: 40px;
            text-transform: uppercase;
            outline: none;
            border: none;
            background-color: #3e2723;
            color: #ffffff;
            font-weight: 500;
            font-size: 18px;
            border-radius: 4px;
            letter-spacing: 1px;
            cursor: pointer;
            opacity: 1;
            transition: 0.3s each;
        }
        .exit:hover {
            opacity: 0.9;
        }
        .edit {
            text-decoration: none;
            color: #00059b;
            font-weight: bold;
            margin-right: 20px;
            transition: 0.3s; 
        }
        .delet {
            text-decoration: none;
            color: #d50000;
            font-weight: bold;
            transition: 0.3s;
        }
        .alert {
            color: #388e3c;
        }
        .result-success {
            margin-bottom: 10px;
        }
        .black {
            color: #000000;
            font-size: 17px;
        }
        .corelogin {
            width: 800px;
            padding: 3px;
            text-align: center;
            border: none;
            background-color: #c8e6c9;
            border-radius: 2px;
        }
        .coreupdate {
            width: 800px;
            padding: 3px;
            text-align: center;
            border: none;
            background-color: #c8e6c9;
            border-radius: 2px;
        }
        .coredelete {
            width: 800px;
            padding: 3px;
            text-align: center;
            border: none;
            background-color: #ffcdd2;
            border-radius: 2px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Resultado do Processamento</h1>
        <div class="result-success">
            <?php
                // Login realizado com sucesso!
                if(isset($_GET['success'])) {
                    $ls = $_GET['success'];
                    echo '<div class="corelogin"><p class="black">'.$ls.'</p></div>';
                }
            ?>
            <?php
                // Contas update com sucesso!
                if(isset($_GET['update'])) {
                    $up = $_GET['update'];
                    echo '<div class="coreupdate"><p class="black">'.$up.'</p></div>';

                }
            ?>
            <?php
                // Contas delete com sucesso!
                if (isset($_GET['del'])) {
                    $del = $_GET['del'];
                    echo '<div class="coredelete"><p class="black">'.$del.'</p></div>';
                }
            ?>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>USUÁRIO</th>
                    <th>E-MAIL</th>
                    <th>SENHA</th>
                    <th>OPÇÕES</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $key => $conta) : ?>
                    <tr>
                        <th scope="row"><?= $key + 1 ?></th>
                        <td><?= $conta['usuario'] ?></td>
                        <td><?= $conta['email'] ?></td>
                        <td><?= $conta['senha'] ?></td>
                        <td>
                            <a href="update.php?editor_id=<?= $conta['id'] ?>" class="edit">Editor</a>
                            <a href="delete.php?delete_id=<?= $conta['id'] ?>" class="delet">Apagar</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <a href="logout.php" class="exit" onclick="sair()">Sair</a>
    </div>
    
    <script>
        function sair() {
            window.confirm("Tem certeza de que deseja sair desta página?");     
        };

        const coreupdate = document.querySelector(".coreupdate");
        const blackupdate = document.querySelector(".black");
        setTimeout(() => {
            coreupdate.style.display = 'none';
            blackupdate.style.display = 'none';
        }, 4000);

        const coredelete = document.querySelector(".coredelete");
        const blackdelete = document.querySelector(".black");
        setTimeout(() => {
            coredelete.style.display = 'none';
            blackdelete.style.display = 'none';
        }, 4000);

        const corelogin = document.querySelector(".corelogin");
        const blacklogin = document.querySelector(".black");
        setTimeout(() => {
            corelogin.style.display = 'none';
            blacklogin.style.display = 'none';
        }, 4000);

    </script>
</body>
</html>