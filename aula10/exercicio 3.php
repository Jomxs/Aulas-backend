<h2> Exercício 2</h2>
<p>
    Criar o vetor abaixo, após imprimir seus
    valores utilizando a estrutura de repertição
    for.
</p>

<pre>

            +----------+
    nome    |   Maria  |
            +----------+
    idade   |    17    |
            +----------+
    altura  | 5.400    |
            +----------+
</pre>





<?php
$vetor1 = ["nome" => "Poliana", "nota1" => 7, "nota2" => 9];
$vetor2 = ["nome" => "Murilo", "nota1" => 8, "nota2" => 5];
$vetor3 = ["nome" => "Andre", "nota1" => 6, "nota2" => 7];
$vetor = $vetor1 + $vetor2 + $vetor3;



for ($i=0; $i <=2 ; $i++) { 
   echo $key."=>".$vetor;
}

for ($i=0; $i <=2 ; $i++) { 
    # code...
}
?>