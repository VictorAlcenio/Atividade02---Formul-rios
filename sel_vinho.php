<!DOCTYPE html>

<html>
<head>
    <title>Sua Submissão</title>
</head>

<body>
    <img src="vinho.jpg" alt="Food Banner" width="368" height="54" />
    <br />

        <?php
            $name = $_POST['name'];
            $cor = $_POST['cor'];
            $comida = $_POST['comida'];

            if($name != null ) {
                print("Obrigado pela sua seleção, $name <hr />");
            }

            if(($cor != null) && ($comida != null)){
                $msg = "Voce realmente aprecia $comida <br />";
                $msg.="- especialmente com um bom vinho $cor";
                print($msg);
            }

        ?>
</body>
</html>
