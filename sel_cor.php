<!DOCTYPE html>
<html>
<head>
    <title>Seletor de Cores Interativo</title>
</head>

<body>
    <h2>Seletor de Cores Interativo</h2>
    <?php

        $r = $_POST['red'];
        $g = $_POST['green'];
        $b = $_POST['blue'];

        $rgb = $r . ',' . $g . ',' . $b;
    ?>
    R: <?php print $r; ?>
    G: <?php print $g; ?>
    B: <?php print $b; ?>
    <br /><br />
    <div style="widht:150px; height: 150px; background-color: rgb(<?php print $rgb; ?>)" /></div>
</body>
</html>
