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
        <input type="hidden" name="q1" value="<?php echo $_GET['q1']; ?>">
        <input type="hidden" name="q2" value="<?php echo $_GET['q2']; ?>">
        <input type="hidden" name="q3" value="<?php echo $_GET['q3']; ?>">
        <input type="hidden" name="q4" value="<?php echo $_GET['q4']; ?>">
    </fieldset>
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
<fieldset>
<input type="submit" value="Próximo">
</fieldset>
</body>