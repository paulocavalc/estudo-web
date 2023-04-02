<?php

    include_once('database/dados.php');

    if (isset($_GET['delete_id'])) {
        $id = ContaDAO::delete($_GET['delete_id']);
        if ($id == 1) {
            header('Location: result-data.php?del=Contas excluído com sucesso!');
        } else {
            echo "Erro ao excluir no banco de dados!";
        }
    }
    
?>