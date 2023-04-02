<?php

    class ContaDAO {

        static function connect() {
            $host = 'localhost';
            $port = '5433';
            $dbname = 'blog_paulo';
            $username = 'postgres';
            $password = '1800';
            $conn = pg_connect("host={$host} port={$port} dbname={$dbname} user={$username} password={$password}");
            if (!$conn) {
                echo "Falha ao conectar ao Banco de Dados";
            }
            return $conn;
        }

        static function get_all($connect) {

            $pgsql = "SELECT * FROM ".$connect;
            $conn = self::connect();
            $result = pg_query($conn, $pgsql);
            if (!$result) {
                echo "Erro ao minerar dados!";
            }
            while ($row = pg_fetch_assoc($result)) {
                $results[] = $row;
            }
            return $results;
        }

        static function getById($id) {

            $pgsql = "SELECT * FROM contas WHERE id= ".$id;
            $conn = self::connect();
            $result = pg_query($conn, $pgsql);
            if (!$result) {
                echo "Erro ao minerar dados!";
            }
            while ($row = pg_fetch_assoc($result)) {
                $results[] = $row;
            }
            return $results[0];
        }

        static function create($data) {

            $usuario=$data['usuario'];
            $email=$data['email'];
            $senha=$data['senha'];
            $pgsql = "INSERT INTO contas(usuario, email, senha) VALUES('$usuario', '$email', '$senha')";
            $conn = self::connect();
            $result = pg_query($conn, $pgsql);
            $rows = pg_affected_rows($result);
            return $rows;
        }

        static function update($data) {

            $id = $_GET['editor_id'];
            $usuario=$data['usuario'];
            $email=$data['email'];
            $senha=$data['senha'];
            $pgsql = "UPDATE contas SET usuario='$usuario', email='$email', senha='$senha' WHERE id= ".$id;
            $conn = self::connect();
            $result = pg_query($conn, $pgsql);
            $rows = pg_affected_rows($result);
            return $rows;
        }

        static function delete($id) {

            $pgsql = "DELETE FROM contas WHERE id= ".$id;
            $conn = self::connect();
            $result = pg_query($conn, $pgsql);
            $rows = pg_affected_rows($result);
            return $rows;
        }
    }
?>