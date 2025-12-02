<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" action="css">
</head>
<body>
    <form method="get" action="páginainicial.html">
    <fieldset>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET')
    $result= 0;
{
    echo "<legend> Gabarito <br></legend>";
    $q1= $_GET ["q1"];
    if ($q1==1)
    {
        $result++;
        echo "<p class='acerto'>✅ Você acertou a questão 1!</p><br>";
    }
    else 
    {
        echo  "<p class='erro'>❌ Ops, você errou a questão 1. Vamos analisar a resposta certa. <br><br>
 a) flotação e decantação. <br>
A flotação serve para separar misturas heterogêneas sólidas ou líquiidas, porém nesse caso temos uma mistura sólida e líquida.
 b) decomposição e centrifugação.<br>
A decomposição é um metodo que serve para modificar e transformar uma substância em outra, o que não é o caso desse exercício. Já a centrifugação serve para separar misturas baseada nas densidades dos componentes.  <br>
 c) floculação e separação magnética.<br>
A floculação é boa nessas circunstâncias pois ao se misturar LCC, que possui uma composição muito parecida com o petróleo, com água, se formam “flocos”. Nenhum dos dois se dissolve, mas sim se juntam,
facilitando a remoção final somente dada pelo próximo método de separação: Separação magnética, podendo ser utilizada para “atrair” esses flocos (o petróleo principalmente) com um imã pois os pesquisadores misturaram ao LCC nanopartículas magnéticas. Removendo
então o petróleo da água. <br>
 d) destilação fracionada e peneiração.<br>
A destilação fracionada é um processo utilizado para separar misturas homogêneas através de vapor enquanto a peneiração é um processo que utiliza o tamanho dos componentes no seu metodo de separação. Como não podemos nem peneirar... <br>
 e) dissolução fracionada e magnetização. <br>
A magnetização nesse caso somente com a disslução fracionada...<br></p>"
    }
    
    
$q2= $_GET ["q2"];
    if ($q2==1)
    {
         $result++;
        echo "<p class='acerto'>✅ Você acertou a questão 2!</p><br>";
    }
    else 
    {
        echo  "<p class='erro'>❌ Ops, você errou a questão 2. Vamos analisar a resposta certa.<br> 
 Para recapitular, devemos distinguir as partículas de água do sal. <br>
 O sal é uma composição iônica formado por Nitrogêio e Hidrogênio
        a) ligações iônicas.<br>
 b) interações dipolo-dipolo. <br>
 c) interações dipolo-dipolo induzido. <br>
 d) interações íon-dipolo.<br>
 e) ligações covalentes.<br>
        
        <br></p>";
    }
        $q3= $_GET ["q3"];
    if ($q3==1)
    {
         $result++;
        echo "<p class='acerto'>✅ Você acertou a questão 3!</p><br>";
    }
    else 
    {
        echo  "<p class='erro'>❌ Ops, você errou a questão 3. Vamos analisar a resposta certa.<br> <br></p>";
    }
        $q4= $_GET ["q4"];
    if ($q4==1)
    {
         $result++;
        echo "<p class='acerto'>✅ Você acertou a questão 4!</p><br>";
    }
    else 
    {
        echo  "<p class='erro'>❌ Ops, você errou a questão 4. Vamos analisar a resposta certa.<br> <br></p>";
    }
        echo "<h1> Acertos: $result </h1>";
}
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