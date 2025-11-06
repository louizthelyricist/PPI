<?php
$p1 = $_GET ["p1"];
$p2 = $_GET ["p2"];
$a1 = $_GET ["a1"];
$a2 = $_GET ["a2"];
$a3 = $_GET ["a3"];
$a4 = $_GET ["a4"];
$a5 = $_GET ["a5"];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="ch.css">
    <title>Química</title>
</head>
<body>
    <form method="get" action="seq5.php">
    <h1 class="h">Química</h1>
    <fieldset>
        <legend>Questão 1</legend>
    </fieldset>
      <input type="hidden" name="p1" value="<?php echo $p1;?>">
<input type="hidden" name="p2" value="<?php echo $p2;?>">
    <input type="hidden" name="a1" value="<?php echo $a1;?>">
<input type="hidden" name="a2" value="<?php echo $a2;?>">
    <input type="hidden" name="n3" value="<?php echo $n3;?>">
<input type="hidden" name="n4" value="<?php echo $n4;?>">
    <input type="hidden" name="n5" value="<?php echo $n5;?>">
    <a href="gab.php" class="but"> </a>
    </form>
</body>
</html>