<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Química e Física</title>
    <link rel="stylesheet" action="css">
</head>
<body>
    <form method="get" action="index.html">
    <fieldset>
    
<?php
echo "<h1 class='h'> Química </h1>";
if ($_SERVER['REQUEST_METHOD'] == 'GET')
    $result= 0;
{
    echo "<legend> Gabarito <br></legend>";
    $q1= $_GET ["q1"];
    if ($q1==1)
    {
        $result++;
        echo "<p class='acerto'>✔ Você acertou a questão 1!</p><br>";
    }
    else 
    {
        echo  "<p class='erro'>✖ Ops, você errou a questão 1. Vamos analisar a resposta certa. <br><br></p>
<p>a) Flotação e decantação.<br>
Incorreta: A flotação serve para separar misturas heterogêneas de sólidos com densidades diferentes, porém nesse caso temos uma mistura líquido-líquido heterogênea.  <br>
<br>
b) Decomposição e centrifugação.<br>
Incorreta: A decomposição é um método que serve para modificar e transformar uma substância em outra, o que não é o caso desse exercício. Já a centrifugação serve para separar misturas heterogêneas onde os componentes possuem densidades diferentes. <br>
<br>
c) Floculação e separação magnética.<br>
Correta: A floculação é boa nessas circunstâncias pois ao se misturar LCC, que possui uma composição muito parecida com o petróleo, com água, se formam “flocos”. Nenhum dos dois se dissolvem na água, mas sim se juntam, facilitando a remoção final somente dada pelo próximo método de separação: Separação magnética, podendo ser utilizada para “atrair” esses flocos (o petróleo principalmente) com um imã pois os pesquisadores misturaram ao LCC nanopartículas magnéticas. Removendo então o petróleo da água.<br>
<br>
 d) Destilação fracionada e peneiração.<br>
Incorreta: A destilação fracionada é um processo utilizado para separar misturas homogêneas com componentes com pontos de ebulição diferentes, enquanto a peneiração é um processo que utiliza o tamanho dos componentes no seu método de separação. Como não podemos nem peneirar.<br>
<br>
 e) Dissolução fracionada e magnetização.<br>
Incorreta: A magnetização neste caso somente com a dissolução fracionada.<br></p>";
    }
    
    
$q2= $_GET ["q2"];
    if ($q2==1)
    {
         $result++;
        echo "<p class='acerto'>✔ Você acertou a questão 2!</p><br>";
    }
    else 
    {
        echo  "<p class='erro'>✖ Ops, você errou a questão 2. Vamos analisar a resposta certa.<br> <br></p>
<p> Comentário: Para recapitular, devemos distinguir as partículas de água do sal.<br>
O sal é uma composição iônica formada por Nitrogênio e Hidrogênio mais um elemento x, formando uma ligação com íons, enquanto a água é uma ligação dipolo-dipolo.<br>
<br>
 a) Ligações iônicas.<br>
Incorreta: Não ocorre uma ligação química entre as moléculas de água e as partículas presentes no ar atmosférico.<br>
<br>
 b) Interações dipolo-dipolo.<br>
Incorreta: Ocorreria se o processo envolvesse somente moléculas polares.<br>
<br>
 c) Interações dipolo-dipolo induzido.<br>
Incorreta: As moléculas são polares, então não há como ser dipolo-dipolo induzido.<br>
<br>
 d) Interações íon-dipolo.<br>
Correta: É a que ocorre pois no processo existem íons que podem interagir com moléculas polares, pois ambas as substâncias (iônica e polar) possuem cargas.<br>
<br>
 e) Ligações covalentes.<br>
Incorreta: Não ocorre uma ligação química entre as moléculas de água e as partículas presentes no ar atmosférico.<br>
<br>

        
        <br></p>";
    }
        $q3= $_GET ["q3"];
    if ($q3==1)
    {
         $result++;
        echo "<p class='acerto'>✔ Você acertou a questão 3!</p><br>";
    }
    else 
    {
        echo  "<p class='erro'>✖ Ops, você errou a questão 3. Vamos analisar a resposta certa.<br> <br></p>
 <p>Comentário: Para essa questão, podemos fazer por eliminação já que: <br>
a) Flotação.<br>
b) Levigação.<br>
Incorretas: Essas 2 são utilizadas para separar sólidos com densidades diferentes.<br>
<br>
c) Ventilação.<br>
Incorreta: Seu método é através da diferença de massa, utilizando corrente de ar.<br>
<br>
d) Peneiração.<br>
Incorreta: Separação através da diferença de tamanho de partícula.<br>
<br>
e) Centrifugação.<br>
Correta: É um método de separação de misturas sólido-líquido ou líquido-líquido, onde o componente mais denso desce até o fundo do recipiente e o menos denso sobe. Normalmente utilizada como auxiliar na decantação.<br>

<br> </p>";
    }
        $q4= $_GET ["q4"];
    if ($q4==1)
    {
         $result++;
        echo "<p class='acerto'>✔ Você acertou a questão 4!</p><br>";
    }
    else 
    {
        echo  "<p class='erro'>✖ Ops, você errou a questão 4. Vamos analisar a resposta certa.<br> <br></p>
  <p>      Comentário: Para sua resolução precisamos saber a composição do benzeno e do carvão:<br>
Carvão: composto principalmente por carbono, é uma molécula apolar.<br>
Benzeno:  C6H6, uma molécula apolar também. <br>
Com isso, não será possível outra alternativa se não: D) Interações dipolo induzido-dipolo induzido.<br>
<br>
 a) Ligações dissulfeto.<br>
Incorreta: Ligações de dissulfeto são ligações covalentes entre átomos de enxofre.<br>
<br>
 b) Ligações covalentes.<br>
Incorreta: Não ocorre nenhum compartilhamento de pares de elétrons entre o adsorvente e a substância.<br>
<br>
 c) Ligações de hidrogênio.<br>
Incorreta: Não temos hidrogênio ligado a um átomo eletronegativo em nenhum dos componentes.<br>
<br>
 d) Interações dipolo induzido – dipolo induzido.<br>
Correta: Condiz com a interação das moléculas apolares da questão.<br>
<br>
 e) Interações dipolo permanente – dipolo permanente.<br>
Incorreta: Somente ocorre em moléculas polares.<br>
<br>
</p>";
    }
        echo "<h1 class='h'> Acertos de química: $result </h1>";
}
echo "<h1 class='h'> Física </h1>";
{
    $f1= $_GET ["f1"];
    if ($f1==1)
    {
        $result++;
        echo "<p class='acerto'>✔ Você acertou a questão 1!</p>";
    }
    else 
    {
        echo  "<p class='erro'>✖ Ops, você errou a questão 1. Vamos analisar a resposta certa:</p>
		 <p>
    Primeira coisa que devemos fazer é calcular a força peso do bloco B e decompor os vetores do corpo A. </p>
   <p class='central'> <img src='i1.png' alt='imagem central'></p> <br>
       <p> P=m.g <br>
Pb=15Kg.10m/s²=150 N<br>
CO=PaX<br>
CA=PaY<br>
HIP=P<br>
Cosθ= PaY/P<br>
Senθ= PaX/P<br>
PaY = cos 30° . hipotenusa = 50 √3 N  <br>
PaX = sen 30° .hipotenusa = 50N   <br>
PaY = N  <br>
√3 ≈ 1.73 <br>
Agora vamos analisar o diagrama de forças  <br>
Fat = μ.N      <br>
Fra=T-Pax-Fat <br>
Frb=Pb-T      <br>
Fr=Pb-Pax-Fat    <br>
movimento retilíneo = aceleração 0 <br>
0.(Ma + Mb) = Pb-Pax-Fat <br>
Fat = Pb - Pax <br>
Fat = 150N - 50√3N <br>
Neste ponto, vamos calcular a Fat. <br>
Fat = 150N - 86,5N <br>
Fat = 63,5 <br>
63,5N= 50N . μ <br>
63,5N/50N = μ <br>
μ ≈ 1,2. Alternativa correta: B. </p>";
    }

   $f2= $_GET ["f2"];
    if ($f2==1)
    {
        $result++;
        echo "<p class='acerto'>✔ Você acertou a questão 2!</p>";
    }
    else 
    {
        echo  "<p class='erro'>✖ Ops, você errou a questão 2. Vamos analisar a resposta certa:</p>
		 <p>
    Para calcularmos a sua distância devemos lembrar da equação —> W = F . d . cos θ  <br>
   onde: W= trabalho; <br>
   F= força aplicada; <br>
   d= distância; <br>
   θ= angulação. <br>
   substituindo os valores temos: <br>
   800J = 50N . d . cos 45°   <br>
   800J = 50N . √2 / 2 . d <br>
   2 . 800J = 50N . √2 . d  <br>
   √2 ≈ 1,4<br>
   1600J = 50N . 1,4 . d <br>
   1600J = 70 . d <br>
   1600J/ 70 = d <br>
   d = 22, 85 m (despreze a parte fracionária) --> d=22m <br>
   Alternativa correta: D. 
   </p>";
    }


 $f3= $_GET ["f3"];
    if ($f3==1)
    {
        $result++;
        echo "<p class='acerto'>✔ Você acertou a questão 3!</p>";
    }
    else 
    {
        echo  "<p class='erro'>✖ Ops, você errou a questão 3. Vamos analisar a resposta certa:</p>
		 <p>
    Nosso primeiro passo, é ponderarmos como sabemos a energia mínima necessária.<br>
	Podemos fazer isso, sabendo a Energia Potencial gravitacional da rampa<br>
lembre-se: Epg= m.g.h <br>
	Epg=5kg.10m/s².5m <br>
	Epg=250J.<br>
Bom, já sabendo deste valor, conseguimos pressupor que a energia mínima que a mola precisa ter, é a mesma que a rampa possui. Então, Epel=Epg. <br>
	Agora, já temos o valor da Epel, para sabermos a deformação mínima da mola, precisamos apenas “substituir letrinhas”. <br>
	Epel= KX²/2 <br>
	250J=20N/m.X²/2<br>
250J=10N/m.X² <br>
	250J/10N/m=X² <br>
	25m=X² <br>
	√25m=X² <br>
5m=X. Alternativa correta: B.
</p>";
    }

    $f4= $_GET ["f4"];
    if ($f4==1)
    {
        $result++;
        echo "<p class='acerto'>✔ Você acertou a questão 4!</p>";
    }
    else 
    {
        echo  "<p class='erro'>✖ Ops, você errou a questão 4. Vamos analisar a resposta certa:</p>
		 <p> Logo, podemos assimilar que por ser uma lâmpada não pode se mover, então Fr=0. <br>
Decomponha T2 em seus devidos eixos. </p>
 <p class='central'> <img src='i2.png' alt='imagem central'></p> <br>
<p> CO=T2Y <br> 
CA=T2X <br> 
HIP=T2 <br> 
Cosθ= T2X/T2 <br>
Senθ= T2Y/T2 <br>
Para conseguirmos continuar, precisamos fazer algumas relações. Se Fr=0, todas as forças devem se anular. Então T1=T2x e T2Y=P. <br>
T2 . senθ = P <br>
T2.senθ=m.g <br>
Agora basta isolar T2 <br>
T2 = m . g/senθ <br>
Alternativa correta: B.
</p>";
    }

$f5= $_GET ["f5"];
    if ($f5==1)
    {
        $result++;
        echo "<p class='acerto'>✔ Você acertou a questão 5!</p>";
    }
    else 
    {
        echo  "<p class='erro'>✖ Ops, você errou a questão 5. Vamos analisar a resposta certa:</p>
		 <p> A primeira coisa que devemos analisar, são as informações que a questão nos concede: 
 </p>
<p> m=5kg <br>
g=10m/s² <br>
F=50N. <br>
Agora, devemos fazer um diagrama de forças para nos orientarmos melhor. Assim descobrindo que possuímos no sistema: Força Peso, F, e Normal de contato (o que já nos responde uma parte da questão). <br> </p>
 <p class='central'> <img src='i3.png' alt='imagem central'></p> <br>
 <p> Nosso próximo passo é fazer o cálculo da força peso: <br>
P=m.g <br>
P=5Kg.10m/s² - P=50N <br>
Analisando novamente o sistema, vemos que para o bloco, não afundar e nem sair flutuando, Fr=0. Assim sabendo que: <br>
N+F=P. --> N=P-F <br>
N=50Kg - 50N <br>
N=0. <br>
Alternativa correta: E.
</p>";
     }
    }
    echo "<h1 class='h'> Acertos de Fìsica: $result </h1>";
?>
<style>
body{
    font-size: 28px;
    	background-color: #8f9aa5;
}
@import url('https://fonts.googleapis.com/css2?family=Sekuya&display=swap');
.h
{
	font-family: 'Sekuya', sans-serif;
	display: flex;
  	flex-direction: column;
  	align-items: center;
	background-size: 10px;
	border-radius: 200px;
}
@import url('https://fonts.google.com/specimen/Vend+Sans?categoryFilters=Feeling:%2FExpressive%2FCalm');
    legend 
{
    font-family: Vend-Sans;
    font-size: 50px;
    background-color: rgba(93, 146, 221, 0.6);
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
background-color: rgb(9, 57, 189);
  color: rgb(255, 255, 255);                   
  border: none;              
  padding: 20px 350px;        
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
	 background-color:  rgba(8, 61, 209, 0.623);
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
.central
{
    text-align: center;
}
</style> 
<input type="submit" value="Rebobinar">



</fieldset>
</form>
</body>
</html>