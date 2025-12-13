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
        <p>Um bloco de massa de 10Kg (A) está em um plano inclinado a 30°, pendurado em uma roldana por um bloco de massa de 15Kg (B). Adote a gravidade= 10m/s².</p>
        <p class="central"> <img src="f1.png" alt="imagem central" class="tam"></p>
        <p> Considerando que o sistema está em movimento retilíneo, descubra o coeficiente de atrito de A.</p>
                <label> <input type="radio" name="f1" value="0" required> A) μ≈0.20<br></label>
                <label> <input type="radio" name="f1" value="1"> B) μ≈1,2<br></label>
                <label> <input type="radio" name="f1" value="0"> C) μ≈0.50<br></label>
                <label> <input type="radio" name="f1" value="0"> D) μ≈0.86<br></label>
                <label> <input type="radio" name="f1" value="0"> E) μ≈1.80 </label>

        <input type="hidden" name="q1" value="<?php echo $_GET['q1']; ?>">
        <input type="hidden" name="q2" value="<?php echo $_GET['q2']; ?>">
        <input type="hidden" name="q3" value="<?php echo $_GET['q3']; ?>">
        <input type="hidden" name="q4" value="<?php echo $_GET['q4']; ?>">
</fieldset>
<fieldset>
    <legend> Questão 2 </legend>
    <p> Um corpo se desloca do ponto A ao ponto B com uma força de 50N em um plano inclinado à 45°.</p>
    <p class="central"> <img src="f2.png" alt="imagem central" class="tam"></p>
    <p> Sabendo que o trabalho realizado sobre o corpo é de 800J, descubra sua distância em metros
        (despreze a parte fracionária)</P>
        
                <label> <input type="radio" name="f2" value="0" required> A) 15m<br></label>
                <label> <input type="radio" name="f2" value="0"> B) 28m<br></label>
                <label> <input type="radio" name="f2" value="0"> C) 10m<br></label>
                <label> <input type="radio" name="f2" value="1"> D) 22m<br></label>
                <label> <input type="radio" name="f2" value="0"> E) 35m </label>
            </fieldset>
<fieldset>
    <legend> Questão 3</legend>
    <p>Uma mola possui junto a si uma bolinha de 5Kg. Esta mola tem uma constante de 20N/m. No momento em que for solta, a bolinha estará em movimento. O sistema se situa em um circuito com uma rampa de 5m, como mostrado abaixo:</p>
    <p class="central"> <img src="f3.png" alt="imagem central" class="tam"></p>
    <p> Sabendo dessas informações, responda respectivamente:
Qual a energia mínima necessária da mola para que a bolinha consiga subir a rampa? E qual a deformação mínima para que isso aconteça? (despreze o atrito)</p>
<label> <input type="radio" name="f3" value="0" required>A) 300J. 20Kg<br></label>
                <label> <input type="radio" name="f3" value="1"> B) 250J. 5m<br></label>
                <label> <input type="radio" name="f3" value="0"> C) 25.10¹J. 25N/m<br></label>
                <label> <input type="radio" name="f3" value="0"> D) 100J. 10m<br></label>
                <label> <input type="radio" name="f3" value="0"> E) 500J. 2m </label>
                
            </fieldset>
            <fieldset>
                <legend> Questão 4</legend>
                <p> Uma lâmpada está sendo sustentada por duas cordas. Uma delas (T1) está relacionada ao eixo X, já a outra (T2), está em um ângulo θ ao X. Qual é o valor de T2?</p>
                <p class="central"> <img src="f4.png" alt="imagem central" class="tam"></p>
                        <label> <input type="radio" name="f4" value="0" required> A) T2=T1⋅senθ<br></label>
                        <label> <input type="radio" name="f4" value="1"> B) T2= m.g/senθ <br></label>
                        <label> <input type="radio" name="f4" value="0"> C) T2=T1⋅cosθ<br></label>
                        <label> <input type="radio" name="f4" value="0"> D) T2=P⋅cosθ<br></label>
                        <label> <input type="radio" name="f4" value="0"> E) T2=P/cosθ</label>
            
            </fieldset>
            <fieldset>
                <legend> Questão 5</legend>
                <p> Um bloco na vertical está sendo puxado por uma força F( para cima). O corpo possui uma massa de 5Kg. </p>
                <p class="central"> <img src="f5.png" alt="imagem central" class="tam"></p>
                <p>  Adote g=10m/s². Sabendo que F=50N. Responda respectivamente:
             Possui N? Se tiver, qual o valor?</p>
                        <label> <input type="radio" name="f5" value="0" required> A) Não possui N.<br></label>
                        <label> <input type="radio" name="f5" value="0"> B) Possui, e seu valor é -30. <br></label>
                        <label> <input type="radio" name="f5" value="0"> C) Possui, e seu valor é 0 pois utilizamos a primeira lei de Newton.<br></label>
                        <label> <input type="radio" name="f5" value="0"> D) Utilizando a lei de Hooke, descobrimos que sim, e seu valor é 30J.<br></label>
                        <label> <input type="radio" name="f5" value="1"> E) Possui, e utilizando a terceira lei de Newton, descobrimos que N=0. </label>
            <input type="submit" value="Enviar">
            </fieldset>
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
</form>
</body>
