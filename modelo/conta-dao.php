<?php
    include_once("modelo/conta-vo.php");
    Class ContaDao {
        
        static $contaLogin = array();
        static function entrar($usuario, $email, $senha) {

            array_push(self::$contaLogin, new Conta("joao", "joao@gmail.com", "joao123"));
            array_push(self::$contaLogin, new Conta("cida", "cida@gmail.com", "cida123"));

            foreach(self::$contaLogin as $contaLogin) {
                
                if ($contaLogin->usuario=$usuario && $contaLogin->email=$email && $contaLogin->senha=$senha) {
                    return $contaLogin;
                }
            }
            return null;
        }
    }
?>