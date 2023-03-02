
<style> 

</style>
<h1>execercio1<h1>

<p>Crie um vetor, como representado abaixo:</p>

<pre>
        +----------+
      0 |  Murilo  |
        +----------+
      1 |    4     |
        +----------+
      2 |    3     |
        +----------+
</pre>
    <p>Após calcule a média fas posições 1 e 2 do vetor e armazene o resultado na posição 3.</p>
    <br>
    <p>Utilize uma estrutura de condição para verficar se a média, armazenamento na posicão 3 e maior ou igual a 6,se for</p>
    <br>
    <p>armazena na posição 4 do vetor a situação "Aprovado". Caso contrário armazene "Reprovado".</p>
<pre>
        +----------+
      0 |  Murilo  |
        +----------+
      1 |    4     |
        +----------+
      2 |    3     |
        +----------+
      3 |   3,5    |
        +----------+
      4 |Reprovado |
        +----------+
    </pre>
    <p>Imprima o vetor utilizando o var_dump</p>

    <?php
    $notas = ["Murilo", 4 ,3];
    $notas[] = (($notas[1] + $notas[2]) / 2 );
if($notas[3]>=6){
    $notas[] ="Aprovado";
}

else{

    $notas[] ="Reprovado"; 
}

var_dump($notas);


    ?>