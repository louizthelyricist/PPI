<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="ch.css">
</head>
<body>
    <form method="get" action="páginainicial.html">
<fieldset>
<?php
echo "Português:";
if ($_SERVER['REQUEST_METHOD'] == 'GET')
    $result= 0;
$p1= $_GET ["p1"];
    if ($p1==1)
     {
        $result++;
        echo "<p class='acerto'>✅ Você acertou a questão 1!</p><br>";
    }
    else 
    {
        echo  "<p class='erro'>❌ Ops, você errou a questão 1. Vamos analisar a resposta certa</p><br>";
    }
  $p2= $_GET ["p2"];
    if ($p2==1)
    {
        $result++;
        echo "<p class='acerto'>✅ Você acertou a questão 2!</p><br>";
    }
    else 
    {
        echo  "<p class='erro'>❌ Ops, você errou a questão 2. Vamos analisar a resposta certa. <br><br>
        Ao abordar a história e as lembranças da avó, o uso da locução “antes de” representa passado, mudança. O lembrete de alguém que já não vive da mesma forma e não lembra de quase nada, mas ainda sim ninguém a esqueceu. Não é somente uma comparação de lembranças, ela ressalta memórias que redefiniram todo seu presente. <br>
        Alternativa correta: C) Ressalta fatos que ressignificam o momento presente. <br> </p>";
    }
{
	$a1 = $_GET ["a1"];
$a2 = $_GET ["a2"];
$a3 = $_GET ["a3"];
$a4 = $_GET ["a4"];
$a5 = $_GET ["a5"];
echo "<legend>Gabarito</legend>";
echo "<p> Artes:</p>";
}
    $a1= $_GET ["a1"];
    if ($a1==1)
    {
        $result++;
        echo "<p class='acerto'>✅ Você acertou a questão 1!</p><br>";
    }
    else 
    {
        echo  "<p class='erro'>❌ Ops, você errou a questão 1. Vamos analisar a resposta certa</p><br>";
    }
    
    $a2= $_GET ["a2"];
    if ($a2==1)
    {
         $result++;
        echo "<p class='acerto'>✅ Você acertou a questão 2!</p><br>";
    }
    else 
    {
        echo  "<p class='erro'>❌ Ops, você errou a questão 2. Vamos analisar a resposta certa</p><br>";
    }
    $a3= $_GET ["a3"];
    if ($a3==1){

     $result++;
        echo "<p class='acerto'>✅ Você acertou a questão 3!</p><br>";
    }
    else 
    {
        echo  "<p class='erro'>❌ Ops, você errou a questão 3. Vamos analisar a resposta certa</p><br>";
    }
    $a4= $_GET ["a4"];
    if ($a4==1)
    {
    $result++;
        echo "<p class='acerto'>✅ Você acertou a questão 4!</p><br>";
    }
    else 
    {
        echo  "<p class='erro'>❌ Ops, você errou a questão 4. Vamos analisar a resposta certa</p><br>";
    }
    $a5= $_GET ["a5"];
    if ($a5==1)
    { $result++;
        echo "<p class='acerto'>✅ Você acertou a questão 5!</p><br>";
    }
    else 
    {
        echo  "<p class='erro'>❌ Ops, você errou a questão 5. Vamos analisar a resposta certa</p><br>";
    }
    echo "<h1>Acertos: $result</h1>";
?>
<style>
body{
    font-size: 28px;
    background-color: #b6cbe7ff;
}
@import url('https://fonts.google.com/specimen/Vend+Sans?categoryFilters=Feeling:%2FExpressive%2FCalm');
    legend 
{
    font-family: Vend-Sans;
    font-size: 50px;
    background-color: rgb(182, 148, 214, 0.6);
    border-radius: 15px;
    font-weight: bold;
    animation: piscarsuave 3s infinite;
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
@keyframes piscarsuave {
  5%   { background-color: rgba(182, 148, 214, 0.6); }
  25%  { background-color: rgba(228, 9, 111, 0.7); }
  50% {background-color: rgba(228, 9, 38, 0.7); }
  75% {background-color: rgba(177, 82, 206, 0.7); }
  100%   { background-color: rgba(182, 148, 214, 1); }
    
}
input[type="submit"]
{
background-color: rgba(37, 185, 24, 0.479);
  color: rgb(0, 0, 0);              
  border: none;              
  padding: 20px 450px;        
  border-radius: 20px;        
  cursor:pointer ;           
  font-family: Vend-Sans;
  font-size: 22px;
  transition: background-color 0.5s ease, transform 0.6s ease;
  display: block;
  margin: 20px auto;
}
input[type="submit"]:hover
{
	 background-color:  rgb(194, 210, 175, 0.6); 
	 transform: scale(1.05);
}
h1
{
   text-align: center;
   font-size: 20px;
}

</style>
<input type="submit" value="Rebobinar">

</fieldset>
</form>
</body>
</html>
