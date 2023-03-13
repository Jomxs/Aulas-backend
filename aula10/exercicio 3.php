<h2> Exercício 3</h2>
<p>
    Criar o vetor abaixo, após imprimir seus
    valores utilizando a estrutura de repertição
    for e foreach.
</p>

<pre>

            +-----------+---+---+
    0       |   Poliana | 7 | 9 |
            +-----------+---+---+
    1       |   Murilo  | 8 | 5 |
            +-----------+---+---+
    2       |   André   | 6 | 7 |
            +-----------+---+---+


            
</pre>





<?php
$aluno1 = array(
        "nome"=> "Poliana",
        "nota1" => 7,
        "nota2" => 9
);
$aluno2 = array(
    "nome"=> "Murilo",
    "nota1" => 8,
    "nota2" => 5
);
$aluno3 = array(
    "nome"=> "André",
    "nota1" => 6,
    "nota2" => 7
);

$dados = [$aluno1, $aluno2, $aluno3];

for ($i=0; $i <=2 ; $i++){
foreach ($dados[$i] as $key => $value) {
   echo $value . " | ";
}
echo "<br>";
}

chirstmas