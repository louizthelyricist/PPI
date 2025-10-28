<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
    echo "Matéria: Potuguês <br><br>";
    $p1= $_GET ["p1"];
    if ($p1==1)
    {
        echo "Você acertou a questão 1!<br><br>";
    }
    else 
    {
        echo "Ops, você errou a questão 1. Vamos analisar a resposta certa<br><br>";
    }
    
    $p2= $_GET ["p2"];
    if ($p2==1)
    {
        echo "Você acertou a questão 2!<br>";
    }
    else 
    {
        echo "Ops, você errou a questão 2. Vamos analisar a resposta certa <br>";
    }
    $p3= $_GET ["p3"];
    if ($p3==1)
    {
        echo "Você acertou a questão 3!<br>";
    }
    else 
    {
        echo "Ops, você errou a questão 3. Vamos analisar a resposta certa <br>";
    }
    $p4= $_GET ["p4"];
    if ($p4==1)
    {
        echo "Você acertou a questão 4!<br>";
    }
    else 
    {
        echo "Ops, você errou a questão 4. Vamos analisar a resposta certa <br>";
    }
    $p5= $_GET ["p5"];
    if ($p5==1)
    {
        echo "Você acertou a questão 5!<br>";
    }
    else 
    {
        echo "Ops, você errou a questão 5. Vamos analisar a resposta certa <br>";
    }

}
?>
