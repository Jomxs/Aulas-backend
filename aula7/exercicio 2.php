<style>


li{
 color: #008b8b;
 font-family: Helvetica;



}

  </style>


<h1>execercio1<h1>


<p> 
    Crie um vetor com os nomes , conforme exempo abaixo:
</p>
<pre>

        +----------+
      0 |  Murilo  |
        +----------+
      1 | Poliana  |    
        +----------+
      2 |  Dalva   |
        +----------+
      3 | Lavínia  |
        +----------+
      4 |   Kauã   |
        +----------+
      
</pre>
<p>
    Imprima os nomes do vetor em formato de lista ordenada: ex:
        <br>
        1. Murilo<br>
        2. Poliana<br>
        3. .....<br>
</p>
<?php

$nomes = ["Murilo", "Poliana", "Dalva", "Lavínia", "Kauã"];

echo "<ol>";
for ($i=0; $i <=4 ; $i++) { 
echo "<li>" . $nomes[$i] . "</li>";
}
echo "</ol>";
?>