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


<h2>Estrutura de repetição for</h2>
<p>
    Utilizada para repetir uma sequência de 
    instruções por um número predeterminado 
    de vezes.
</p>

<p>
    <pre>
        for(inicio; condição; passo){
            //instruções a serem repetidas
        }
    </pre>
</p>
<div class="container"  align="center" color_style="#0000ff">
    <?php
        //valor inicial; condição parada; step - passo
   for($contador = 1; $contador <= 10; $contador++){
    echo "<div>";
    for($contador2 = 1; $contador2 <= 10; $contador2++){
        echo " $contador x $contador2 = " . $contador * $contador2 . "<br>";
    }
    echo "</div>";
    }


   
?>
</div>
