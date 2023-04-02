<?php
    @session_start();
	if (!isset($_SESSION['email']) || $_SESSION['email']=="") {
        header('Location: login.php?erro=true');
		exit();
	}   
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
</head>
<body>
    <div class="container">
        <div class="max-width">
            <h2>Olá, bem vindo, <?php echo $_SESSION['email']?></h2>
            <ul class="menu">
                <li><a href="#">Cadastrar de Cliente</a></li>
                <li><a href="#">Consultar</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
</body>
</html>