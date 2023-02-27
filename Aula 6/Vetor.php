<h2>Vetores</h2>
<p>
    São estruturas de armazenamento compostas
    hetereogênadas (1-dim), que podem ser indexadas
    númericamente ou textualmente.
</p>


<?php
//exemplo variável simples
    $nota = 6;
    $nota = 3;
    echo $nota;
    echo "<br>";
//exemplo vetor indexado númericamente
    $notas = [];     //outras forna $notas = array();
    $notas[] = 6;
    $notas[] = 3;
//var_dump($notas);
//imprimir só a primeira nota
    echo ($notas[0] + $notas[1]) / 2;

//Vetores com indice textual
    $notas = [];  //cria um vetor vazio
    $notas["Debora"] = 7;
    $notas["Murilo"] = 7.8;
    $notas["Poliana"] = 9;
    echo "<p></p>";
    echo "A Poliana tirou &nbsp" . $notas["Poliana"];

//imprimindo o conteúdo de um valor númerico
    echo "<br>";
    $valores = [];
    $valores[] = 2;
    $valores[] = 4;
    $valores[] = 8;
    $valores[] = 10;
    $valores[] = 12;
    $valores[] = 14; 
    $valores[] = 16;
 //ou - $valores = [2, 4, 8, 10, 12, 16];

 //imprimindo o conteúdo de um valor númerico
    for($i = 0; $i <= 6; $i++){
    echo $valores[$i]. "<br>";
    }
//somar os valores de um vetor
    echo "<br>";
    $numeros = 0;
    for($i = 0; $i <= 6; $i++){
    $numeros = $numeros + $valores[$i];
    }    
    echo " A soma dos valores é $numeros";
?>