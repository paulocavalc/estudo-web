<?php
    class Conta {
        
        var $usuario;
        var $email;
        var $senha;
        
        function __construct($usuario, $email, $senha) {
            
            $this->usuario=$usuario;
            $this->email=$email;
            $this->senha=$senha;
        }
    }
?>