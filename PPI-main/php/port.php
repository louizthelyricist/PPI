<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
    echo "Matéria: Potuguês <br><br>";
    $p1= $_GET ["p1"];
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
    echo "Acertos: $result";
   
}
?>
