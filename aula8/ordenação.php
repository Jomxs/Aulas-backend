<h2>Ordenação - Ordem Alfabética</h2>

<?php
 $nomes =  [
    "Murilo",
    "Poliana",
    "Dalva",
    "Lavínia",
    "Camila",
    "Kauã",

];

//Camila, Dalva, Kauã, Lavínia, Murilo, Poliana
sort($nomes);
echo "<ol>";
for ($i=0; $i <=4 ; $i++) { 
echo "<li>" . $nomes[$i] . "</li>";
}
echo "</ol>";
?>