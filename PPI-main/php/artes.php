<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
    echo "Matéria: Artes<br><br>";
    $a1= $_GET ["a1"];
    if ($a1==1)
    {
        echo "Você acertou a questão 1!<br>";
    }
    else 
    {
        echo "Ops, você errou a questão 1. Vamos analisar a resposta certa<br><br>";
    }
    
    $a2= $_GET ["a2"];
    if ($a2==1)
    {
        echo "Você acertou a questão 2!<br>";
    }
    else 
    {
        echo "Ops, você errou a questão 2. Vamos analisar a resposta certa <br>";
    }
    $a3= $_GET ["a3"];
    if ($a3==1)
    {
        echo "Você acertou a questão 3!<br>";
    }
    else 
    {
        echo "Ops, você errou a questão 3. Vamos analisar a resposta certa <br>";
    }
    $a4= $_GET ["a4"];
    if ($a4==1)
    {
        echo "Você acertou a questão 4!<br>";
    }
    else 
    {
        echo "Ops, você errou a questão 4. Vamos analisar a resposta certa <br>";
    }
    $a5= $_GET ["a5"];
    if ($a5==1)
    {
        echo "Você acertou a questão 5!<br>";
    }
    else 
    {
        echo "Ops, você errou a questão 5. Vamos analisar a resposta certa <br>";
    }

}
?>