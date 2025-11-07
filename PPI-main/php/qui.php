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
    $q1= $_GET ["q1"];
$q2 = $_GET ["q2"];
    $result= 0;
{
    echo "Matéria: Artes<br><br>";
    $q1= $_GET ["q1"];
    if ($q1==1)
    {
        $result++;
        echo "<p class='acerto'>✅ Você acertou a questão 1!</p><br>";
    }
    else 
    {
        echo  "<p class='erro'>❌ Ops, você errou a questão 1. Vamos analisar a resposta certa</p><br>";
    }
    
    $q2= $_GET ["q2"];
    if ($q2==1)
    {
         $result++;
        echo "<p class='acerto'>✅ Você acertou a questão 2!</p><br>";
    }
    else 
    {
        echo  "<p class='erro'>❌ Ops, você errou a questão 2. Vamos analisar a resposta certa</p><br>";
    }
    
    echo "Acertos: $result";
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