<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="ch.css">
</head>
<body>
    <form method="get" action="index.html">
<fieldset>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET')
    $result= 0;

    {
$a1 = $_GET ["a1"];
$a2 = $_GET ["a2"];
$a3 = $_GET ["a3"];
$a4 = $_GET ["a4"];
$a5 = $_GET ["a5"];
echo "<legend>Gabarito</legend>";

    $a1= $_GET ["a1"];
    if ($a1==1)
    {
        $result++;
        echo "<p class='acerto'>✔ Você acertou a questão 1!</p>";
    }
    else 
    {
        echo  "<p class='erro'>✖ Ops, você errou a questão 1. Vamos analisar a resposta certa:<p>
        <p>Freud analisou efeitos do consciente e do inconsciente, como delírios,  sonhos e traumas. A vanguarda que utiliza alguns dos seus conceitos é o Surrealismo,  retratando em suas obras o inconsciente através de sonhos e delírios.<br> 
Portanto, alternativa correta: A. </p>";
    }
    
    $a2= $_GET ["a2"];
    if ($a2==1)
    {
         $result++;
        echo "<p class='acerto'>✔ Você acertou a questão 2!</p>";
    }
    else 
    {
        echo  "<p class='erro'>✖ Ops, você errou a questão 2. Vamos analisar a resposta certa:</p>
		<p> O Dadaísmo, pelo contrário de muitas interpretações, não é uma forma  de vandalismo nem de roubo de artes já feitas. O Dadaísmo é uma resposta a singularidade da  sociedade, da mesmice.  <br>
Marcel queria respostas, queria provocar o público a enxergar além do óbvio, além do que  parecia ser. <br> Por isso, a alternativa correta é a: D. </p>";
    }
    $a3= $_GET ["a3"];
    if ($a3==1){

     $result++;
        echo "<p class='acerto'>✔ Você acertou a questão 3!</p>";
    }
    else 
    {
        echo  "<p class='erro'>✖ Ops, você errou a questão 3. Vamos analisar a resposta certa: </p>
		<p>  As máscaras africanas foram o alvo de estudo de Picasso para incorporar nessa obra. Essas máscaras eram ligadas a rituais espirituais e culturais de povos africanos e sua estética desafiou de fato a sociedade. <br>
		Alternativa correta: A. </p>";
    }
    $a4= $_GET ["a4"];
    if ($a4==1)
    {
    $result++;
        echo "<p class='acerto'>✔ Você acertou a questão 4!</p>";
    }
    else 
    {
        echo  "<p class='erro'>✖ Ops, você errou a questão 4. Vamos analisar a resposta certa:</p>
    
		<p>O expressionismo utiliza a arte primitiva, a primeira que fazemos. Seja os  bonecos de palitinho ou a árvore de bolinhas. O expressionismo foca em expressar  sentimentos e não em fazer obras “perfeitas”. Por isso, uma das suas características são as  figuras deformadas e a estética “grotesca”, o abandono da ideia de que para uma obra ser boa teria que ser limpa e com traços finos. <br>
		Alternativa correta: C. </p>";
    }
    $a5= $_GET ["a5"];
    if ($a5==1)
    { $result++;
        echo "<p class='acerto'>✔ Você acertou a questão 5!</p>";
    }
    else 
    {
        echo  "<p class='erro'>✖ Ops, você errou a questão 5. Vamos analisar a resposta certa</p>
		<p> O abstracionismo por ser uma arte que não retrata a realidade como uma fotografia e sim com formas, expressões, sentimentos ou racionalidades, possui as vertentes lírica e geométrica. A lírica representa emoções, a música. Já a geométrica é feita cuidadosamente, com cálculos e raciocínio para melhor interpretação da obra.
		<br> Alternativa correta: C.</p>";
    }
    echo "<h1>Acertos: $result</h1>";
    
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
.erro
{
	background-color: rgba(189, 2, 2, 0.7);
	color: black;	
    border-radius: 15px;
	font-weight: bold;
}
.acerto
{
    background-color: rgba(13, 148, 13, 0.6);
	color: black;	
    border-radius: 15px;
	font-weight: bold;
}
</style> 
<input type="submit" value="Rebobinar">

</fieldset>
</form>
</body>
</html>
