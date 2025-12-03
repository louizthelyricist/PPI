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
    echo "<p> Questão 1. <br> 
    
A) qualidade imperecível do mundo.<br>
	Errada: Em nenhum momento o texto cita “qualidade”.<br>
 B) degradação material da natureza. <br>
	Errada: Não é citado em nenhum dos fragmentos sobre degradação.<br>
 C) imobilidade imanente do universo.<br>
	Errada: Pelo o contrário, Heráclito, pensava justamente na mobilidade do universo.<br>
 D) distribuição dicotômica do cosmos.<br>
	Correta: Para responder esta questão, precisamos ter um conhecimento prévio sobre a principal idéia de Heráclito: “Nos mesmos rios entramos e não entramos, somos e não somos.” Esta percepção nos mostra como o mundo é mutável, e movimentado. Também dizendo que “o bem e o mal, andam lado a lado”, que o certo e o errado, estão de certa forma conectados.<br>
E) desordem incontornável das coisas.<br>
	Errada: Heráclito nos mostra que o universo, por mais que confuso, possui uma ordem. <br></p>";
    $h1= $_GET ["h1"];
    if ($h1==1)
    {
        $result++;
        echo "<p class='acerto'>✅ Você acertou a questão 1!</p><br>";
    }
    else 
    {
        echo  "<p class='erro'>❌ Ops, você errou a questão 1. Analise a resposta certa em cima.</p><br>";
    }
    echo "<p> Questão 2. <br>
     A) tirania, oligarquia e república.<br>
	Errada: Nem toda república é exatamente democrática. O voto pode ser do povo, mas não quer dizer que o que aconteça no partido ou até mesmo na eleição é pro povo.<br>
 B) burocracia, autarquia e império.<br>
	Errada: A burocracia é uma forma de governo com um grupo de pessoas e não só uma.<br>
 C) ditadura, autocracia e anarquia.<br>
	Errada: A anarquia não representa nenhuma dessas 3 formas de governo porque a anarquia é a ausência de poder e governo.<br>
 D) plutocracia, tecnocracia e demagogia.<br>
	Errada: A plutocracia não é exatamente o governo de um e sim de uma classe e para ela. A plutocracia prioriza e estabelece condições valiosas financeiramente para a classe mais rica.<br>
 E) monarquia, aristocracia e democracia.<br>
	Correta: A monarquia exerce o governo de um, seja ele governador ou imperador, governando sozinho. A aristocracia é um governo feito por uma seletiva de pessoas entre as “melhores” da população. Por fim, a democracia é o governo do povo e para o povo, um dos seus princípios sendo a igualdade.<br>
    <br></p>";
     $h2= $_GET ["h2"];
    if ($h2==1)
    {
        $result++;
        echo "<p class='acerto'>✅ Você acertou a questão 2!</p><br>";
    }
    else 
    {
        echo  "<p class='erro'>❌ Ops, você errou a questão 2. Analise a resposta certa em cima.</p><br>";
    }
    echo "<p> Questão 3. <br>
     A) sistema de crenças, conforme a proposta kantiana de objetividade do conhecimento.<br>
Errada: Não envolve religião nem sistema de crenças.<br>
 B) campo dos absolutos, semelhante ao entendimento medieval dos Universais.<br>
Errada: Campo dos absolutos é um conceito desenvolvido para explicar o comportamento do universo e não do comportamento humano.<br>
 C) domínio da lógica, consoante a compreensão aristotélica nos Analíticos.<br>
Errada:A compreensão aristotélica nos Analíticos fala sobre dedução e não eloquência ou argumentação.<br>
D) paradigma da racionalidade, alinhado ao modelo cartesiano de método.<br>
Errada: O modelo cartesiano de método está ligado a resolução de problemas através da lógica e racionalidade, não envolve críticas sobre a persuasão do homem. <br>
 E) âmbito da persuasão, análogo às críticas platônicas aos sofistas.<br>
Correta: Esta é uma questão sobre interpretação e um mínimo conhecimento base. A reflexão "radical" do autor sobre a arte da eloquência, ou melhor, da persuasão, limitando-se a criticar a mentira enfeitada que encanta e engana tantas pessoas. O ato de crítica também se refere às críticas platônicas aos sofistas, que espalhavam mentiras disfarçadas de conselhos para o povo, enganando-os e Platão os questionava, duvidando acerca da verdade dos seus argumentos.<br>
<br></p>";
     $h3= $_GET ["h3"];
    if ($h3==1)
    {
        $result++;
        echo "<p class='acerto'>✅ Você acertou a questão 3!</p><br>";
    }
    else 
    {
        echo  "<p class='erro'>❌ Ops, você errou a questão 3. Analise a resposta certa em cima.</p><br>";
    }
    echo "<p> Questão 4> <br>
     A) Aplicação de meios para atingir um fim.
Correta:
O texto diz que o governo deve promover a felicidade da sociedade, para isso institui punições como fim para evitar que alguma pessoa prejudique essa sociedade de alguma forma.
B) Imposição de regras para estabelecer um dever
Resposta errada
A imposição de regras não está relacionada com estabelecer deveres, pelo menos não no texto.
as regras são impostas para busca de felicidade
 C) Sobreposição de princípios para fundamentar um direito.
Resposta errada
não há sobreposição de princípios, o texto sugere que punições são meios para que a sociedade siga de acordo com leis para que tenham sua felicidade,não para fundamentar um direito.
 D) Criação de parâmetros para reconhecer uma prescrição.
Resposta errada
Pode até haver,sim, parâmetros, mas não com finalidade de reconhecer uma prescrição.
 E) Elaboração de convenções para referendar um costume.
Resposta errada
Uma convenção pode ser um bom aspecto para uma sociedade, mas não com o objetivo de referendar um costume.

    "
     $h4= $_GET ["h4"];
    if ($h4==1)
    {
        $result++;
        echo "<p class='acerto'>✅ Você acertou a questão 4!</p><br>";
    }
    else 
    {
        echo  "<p class='erro'>❌ Ops, você errou a questão 4. Analise a resposta certa em cima.</p><br>";
    }
     $h5= $_GET ["h5"];
    if ($h5==1)
    {
        $result++;
        echo "<p class='acerto'>✅ Você acertou a questão 5!</p><br>";
    }
    else 
    {
        echo  "<p class='erro'>❌ Ops, você errou a questão 5. Analise a resposta certa em cima.</p><br>";
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


</style>
</fieldset>
</form>
</body>
</html>