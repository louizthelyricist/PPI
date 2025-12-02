<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" action="ch.css">
</head>
<body>
    <form method="get" action="páginainicial.html">
    <fieldset>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET')
    $result= 0;
{
    echo "<legend> Gabarito <br></legend>";
    $m1= $_GET ["m1"];
    if ($m1==1)
    {
        $result++;
        echo "<p class='acerto'>✅ Você acertou a questão 1!</p><br>";
    }
    else 
    {
        echo  "<p class='erro'>❌ Ops, você errou a questão 1. Vamos analisar a resposta certa. <br> <br>
        O valor do uber se concentra em 3 variáveis: F (taxa fixa); T (tempo da corrida) e D (distância percorrida). <br>
O exercício contém 3 valores associados às variáveis: $2,00 como taxa fixa; $0,40 por minuto de viagem e $1,40 por quilômetro rodado.
Porém, somente 2 desses valores dependem das variáveis: o tempo e a distância. Já a taxa fixa já é dada na sua totalidade. <br>
Montando a equação, ficaria:<br>
V= 2,00 + 0,40T + 1,40D <br>
Alternativa correta: B </p>";
    }
     $m2= $_GET ["m2"];
    if ($m2==1)
    {
        $result++;
        echo "<p class='acerto'>✅ Você acertou a questão 2!</p><br>";
    }
    else 
    {
        echo  "<p class='erro'>❌ Ops, você errou a questão 2. Vamos analisar a resposta certa. <br> <br>
        A questão apresenta a informação de que de possui x funcionários, um deles sendo o gerente. Também destaca os salários, dessa maneira: <br>
Funcionários x: 2 diárias de R$80,00 por semana; <br>
Salário do gerente por semana: R$1000,00. <br>
A questão pergunta quanto a empresa terá que pagar seus funcionários em 1 semana. <br>
Sabemos que todos recebem R$160,00 por semana. <br>
O gerente, ao todo, ganha R$1000,00, porém contando com as suas diárias. Ou seja, ele ganha R$840,00 mais R$160 das suas diárias. <br>
O valor total de que a empresa os paga em uma semana se dá pela seguinte fórmula:  <br>
Y= 160x + 840. <br> 
Alternativa correta: D. <br></p>";
    }
     $m3= $_GET ["m3"];
    if ($m3==1)
    {
        $result++;
        echo "<p class='acerto'>✅ Você acertou a questão 3!</p><br>";
    }
    else 
    {
        echo  "<p class='erro'>❌ Ops, você errou a questão 3. Vamos analisar a resposta certa<br><br>
        Lembrando da conversão de unidades: 1m³=1000L <br>
Faremos uma regra de três, para saber quantos litros são necessários para enchermos uma banheira de 0,3m³ <br>
1000L = 1m³ <br>
  X      = 0,3m³ <br>
Resultando em: X = 300L <br>
O enunciado nos mostra que não podemos utilizar 100% da banheira, mas sim, 80%. Teremos de resolver com porcentagem. <br>
Podemos considerar 80% como 80/100= 0,8. <br>
300L*0,8 = 240L <br>
Agora que sabemos quantos litros, tem em 80% de uma banheira de 0,3m³, faremos uma regra de três para descobrir quantos pacotes serão necessários para encher esta banheira.  <br>
1 Embalagem = 2,7L <br>
   X               = 240L <br>
Resultando em: ≈ 89 embalagens  <br> 
Alternativa correta: D </p>";
    }

 $m4= $_GET ["m4"];
    if ($m4==1)
    {
        $result++;
        echo "<p class='acerto'>✅ Você acertou a questão 3!</p><br>";
    }
    else 
    {
        echo  "<p class='erro'>❌ Ops, você errou a questão 3. Vamos analisar a resposta certa<br><br>
        a equação é INVERSAMENTE PROPORCIONAL, então usaremos uma razão com cada k acampanhando cada uma das máquinas e usando o valor total das 3 como referência: <br>
          K/2+K/3+K/5=31.000 <br> Com ela montada, multiplicando os 3 valores, obtemos o valor do denominador da nossa equação, 30. Individuallmente, dividimos cada um deles por 30 e multiplicamos pelo k. <br>
          15K+10K+6K/30=31.000  <br> Agora si, os somamos porém mantendo o 30.  31K/30=31.000. <br>
          Isolando o k, obtemos uma multiplicação: 31K=31.000*30  -->  31K=930.000 -->   K=930.000/31 -->  K=30.000. <br>
          Agora que já resolvemos metade da questão, vamos para a resolução: <br>
          A máquina mais velha tem 5 anos, então, essa será nossa referência para o cálculo. <br>
          K/5=X --> K/5=X <br>
          Alternativa correta: B </p>";

    }
        echo "<h1> Acertos: $result </h1><br>";
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