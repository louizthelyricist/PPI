<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" action="ch.css">
</head>
<body>
    <fieldset>
<?php
$result= 0;
session_start()
        $p1 = $_SESSION["p1"] ?? 0;
        $p2 = $_SESSION["p2"] ?? 0;
        $m1 = $_SESSION["m1"] ?? 0;
        $m2 = $_SESSION["m2"] ?? 0;
        $f1 = $_SESSION["f1"] ?? 0;
        $f2 = $_SESSION["f2"] ?? 0;
        $a1 = $_SESSION["a1"] ?? 0;
        $a2 = $_SESSION["a2"] ?? 0;
        $a3 = $_SESSION["a3"] ?? 0;
        $a4 = $_SESSION["a4"] ?? 0;
        $a5 = $_SESSION["a5"] ?? 0;
        $q1 = $_SESSION["q1"] ?? 0;
        $q2 = $_SESSION["q2"] ?? 0;
        $q1 = $_GET ["q1"];
        $q2 = $_GET["q2"];

if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
    echo "<legend> Potuguês <br></legend>";
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
        echo  "<p class='erro'>❌ Ops, você errou a questão 2. Vamos analisar a resposta certa</p><br>";
    }
    echo "<legend> Matemática <br></legend>";
    if ($m1==1)
     {
        $result++;
        echo "<p class='acerto'>✅ Você acertou a questão 1!</p><br>";
    }
    else 
    {
        echo  "<p class='erro'>❌ Ops, você errou a questão 1. Vamos analisar a resposta certa</p><br>";
    }
    
    if ($m2==1)
    {
        $result++;
        echo "<p class='acerto'>✅ Você acertou a questão 2!</p><br>";
    }
    else 
    {
        echo  "<p class='erro'>❌ Ops, você errou a questão 2. Vamos analisar a resposta certa</p><br>";
    }
    echo "<legend> Física <br></legend>";
    if ($f1==1)
     {
        $result++;
        echo "<p class='acerto'>✅ Você acertou a questão 1!</p><br>";
    }
    else 
    {
        echo  "<p class='erro'>❌ Ops, você errou a questão 1. Vamos analisar a resposta certa</p><br>";
    }
    
    if ($f2==1)
    {
        $result++;
        echo "<p class='acerto'>✅ Você acertou a questão 2!</p><br>";
    }
    else 
    {
        echo  "<p class='erro'>❌ Ops, você errou a questão 2. Vamos analisar a resposta certa</p><br>";
    }
    echo "<legend> Artes <br></legend>";
    if ($a1==1)
     {
        $result++;
        echo "<p class='acerto'>✅ Você acertou a questão 1!</p><br>";
    }
    else 
    {
        echo  "<p class='erro'>❌ Ops, você errou a questão 1. Vamos analisar a resposta certa</p><br>";
    }
    
    if ($a2==1)
    {
        $result++;
        echo "<p class='acerto'>✅ Você acertou a questão 2!</p><br>";
    }
    else 
    {
        echo  "<p class='erro'>❌ Ops, você errou a questão 2. Vamos analisar a resposta certa</p><br>";
    }
    if ($a3==1)
     {
        $result++;
        echo "<p class='acerto'>✅ Você acertou a questão 1!</p><br>";
    }
    else 
    {
        echo  "<p class='erro'>❌ Ops, você errou a questão 1. Vamos analisar a resposta certa</p><br>";
    }
    
    if ($a4==1)
    {
        $result++;
        echo "<p class='acerto'>✅ Você acertou a questão 2!</p><br>";
    }
    else 
    {
        echo  "<p class='erro'>❌ Ops, você errou a questão 2. Vamos analisar a resposta certa</p><br>";
    }
     if ($a5==1)
    {
        $result++;
        echo "<p class='acerto'>✅ Você acertou a questão 2!</p><br>";
    }
    else 
    {
        echo  "<p class='erro'>❌ Ops, você errou a questão 2. Vamos analisar a resposta certa</p><br>";
    }
echo "<legend> Química <br></legend>";
    if ($q1==1)
     {
        $result++;
        echo "<p class='acerto'>✅ Você acertou a questão 1!</p><br>";
    }
    else 
    {
        echo  "<p class='erro'>❌ Ops, você errou a questão 1. Vamos analisar a resposta certa</p><br>";
    }
    
    if ($q2==1)
    {
        $result++;
        echo "<p class='acerto'>✅ Você acertou a questão 2!</p><br>";
    }
    else 
    {
        echo  "<p class='erro'>❌ Ops, você errou a questão 2. Vamos analisar a resposta certa</p><br>";
    }

        echo "<h2>🌟 Total de acertos: $result</h2>";
}
?>