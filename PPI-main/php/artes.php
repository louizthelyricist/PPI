<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" action="css">
</head>
<body>
    <fieldset>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
    echo "Matéria: Artes<br><br>";
    $a1= $_GET ["a1"];
    if ($a1==1)
    {
        echo "<p> Você acertou a questão 1!</p><br>";
    }
    else 
    {
        echo "<p> Ops, você errou a questão 1. Vamos analisar a resposta certa</p><br>";
    }
    
    $a2= $_GET ["a2"];
    if ($a2==1)
    {
        echo "<p> Você acertou a questão 2!</p><br>";
    }
    else 
    {
        echo "<p>Ops, você errou a questão 2. Vamos analisar a resposta certa </p><br>";
    }
    $a3= $_GET ["a3"];
    if ($a3==1)
    {
        echo "<p>Você acertou a questão 3!</p><br>";
    }
    else 
    {
        echo "<p>Ops, você errou a questão 3. Vamos analisar a resposta certa </p><br>";
    }
    $a4= $_GET ["a4"];
    if ($a4==1)
    {
        echo "<p>Você acertou a questão 4!</p><br>";
    }
    else 
    {
        echo "<p> Ops, você errou a questão 4. Vamos analisar a resposta certa </p><br>";
    }
    $a5= $_GET ["a5"];
    if ($a5==1)
    {
        echo "<p> Você acertou a questão 5!</p><br>";
    }
    else 
    {
        echo "<p>Ops, você errou a questão 5. Vamos analisar a resposta certa </p><br>";
    }

}
?>
<style>
body{
    font-size: 28px;
    background-color: #cfafd2ff;
}
@import url('https://fonts.google.com/specimen/Vend+Sans?categoryFilters=Feeling:%2FExpressive%2FCalm');
    legend 
{
    font-family: Vend-Sans;
    font-size: 50px;
    background-color: rgb(182, 148, 214, 0.6);
    border-radius: 15px;
    font-weight: bold;
}
p{
  font-size: 30px;
}
fieldset{
    background-color: white;
    border-radius: 40px;
    padding: 50px;
    width: 65%;
    margin: 0 auto;
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
}

</style>
</fieldset>
</body>
</html>
