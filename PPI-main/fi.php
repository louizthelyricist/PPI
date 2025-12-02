<?php
$q1= $_GET ["q1"];
$q2= $_GET ["q2"];
$q3= $_GET ["q3"];
$q4= $_GET ["q4"];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="sequencia/ch.css">
    <title>Física</title>
</head>
<body>
    <form method="get" action="qui.php">
    <h1 class="h">Física</h1>
    <fieldset>
        <legend>Questão 1</legend>
        <input type="hidden" name="q1" value="<?php echo $_GET['q1']; ?>">
        <input type="hidden" name="q2" value="<?php echo $_GET['q2']; ?>">
        <input type="hidden" name="q3" value="<?php echo $_GET['q3']; ?>">
        <input type="hidden" name="q4" value="<?php echo $_GET['q4']; ?>">
        <input type="submit" value="Enviar">
    </fieldset>
</body>
</html>