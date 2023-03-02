<style> 
    div{
    border: 1px solid #9a0011;
}
    .container{
        display: grid;
        grid-template-rows: auto auto;
        grid-template-columns: auto auto auto auto auto;
    }
</style>
<h2>Estrutura de repetição while</h2>
<p color_style="#00FFFF">
   Utilizada para repetir uma sequência de 
   instruções, enquanto uma condição for
   verdadeira.
</p>

<p>
    <pre>
       while(início; condição)
        //instruções a serem repetidas 
    </pre>
<div class="container"  align="center" color_style="#0000ff">
<?php
    $a1 = 0;


   while($a1 <=10){
    echo "<div>";
    $a2 = 0;
    while($a2 <=10){
        echo " $a1 x $a2 = " . $a1 * $a2 . "<br>";
       
    }
    echo "</div>";
    }
?>
</div>
