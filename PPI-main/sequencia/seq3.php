<?php
$p1 = $_GET ["p1"];
$p2 = $_GET ["p2"];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="ch.css">
    <title>Física</title>
</head>
<body>
    <form method="get" action="seq4.php">
    <h1 class="h">Física</h1>
    <fieldset>
        <legend>Questão 1</legend>
    </fieldset>
        <input type="hidden" name="p1" value="<?php echo $p1;?>">
<input type="hidden" name="p2" value="<?php echo $p2;?>">
    <a href="seq4.php">
        <button>Próximo</button>
    </a>
</form>
</body>
</html>