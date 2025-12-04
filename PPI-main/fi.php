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
        <form method="get" action="index.html">
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
