<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividade prática 5 - Funções para strings</title>
</head>

<body>

    <?php 
        $string  = $_POST['texto'];
        $func_predefinida = $_POST['funcString'];
    ?>

    <?php 
        if ($func_predefinida =="strlen") {
            $tex= strlen($string);
        }
        elseif ($func_predefinida =="strrev") {
            $tex=strrev($string);
        }
        elseif ($func_predefinida =="strtoupper") {
            $tex= strtoupper($string);
        }
        elseif ($func_predefinida =="strtolower") {
            $tex= strtolower($string);
        }
        else{
            $tex= ucwords($string);
        }
        print $tex;
    ?>

</body>

</html>
