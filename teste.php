<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudante PHP</title>
</head>
<body>
    
    <?php  
        $variavel = "João Paulo ";
        if (isset($variavel)) {
            echo $variavel."foi aprovado. <br/>";
        } else {
            echo $variavel."foi reprovado. <br/>";
        }

        for ($i=0; $i<10; $i++) {
            echo $i." - <br/>";
        }

        $i = 0;
        while ($i < 10) {
            echo $i++."<br/>";
        }
        $array[0] = 1;
        $array[1] = 2;

        foreach ($array as $conteudo) {
            echo $conteudo.". Boa noite! <br/>";
        }
        print_r($array);
        print_r($_GET);
    ?> 
</body>
</html>