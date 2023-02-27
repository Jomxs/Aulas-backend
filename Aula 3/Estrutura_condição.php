<h2>Estrutura de condição</h2>
<hr>

<strong>Exemplo 1</strong>

<p>

 A estrutura de condição é utilizada 
 para avaliar qual instrução deve ser 
 executada, dada uma condição.

Se a condição for verdadeira (true) executa a 
instrução 1, caso contrário executa a instrução 2.


 <pre>
 if(<em>condicao</em>){
    //instrução 1
 }else{
    //instrução 2
 }

 </pre>
</p>

<?php
    /*
    Para passar de ano é necessário tirar no 
    mininmo 6 pontos em cada diciplina. Murilo 
    tirou .... Ele foi aprovado ou não?
    */
    $nota_do_murilo = 7;
    $faltas = 76;

    if($nota_do_murilo >= 6 && $faltas < 75){
        echo "Murilo foi reprovado!!!!!!!!!! >:), yesssssssssss, #love_it";
    }else{
        echo"Murilo foi aprovado, >:(, droga mano, dislike, #não_gostei"; 
    }
    ?>
<br>
<hr>
<br>
<strong>Exemplo 2</strong>
 <p>
 O aluno para ser aprovado o aulono precisa obter 
 nota superior a 6 pontos, para fazer o exame final 
 precisa ter tirado menos que 6 e mais que 3 pontos.
 Notas menores que 3 são reprovações diretas.

</p>

<?php

$nota = 4;
if($nota >= 6){
echo "Aprovado #love_it";
}else if($nota >= 3){
    echo "Faça o exame final, #dislike";
}else if($nota <  3){
    echo"Reprovado >:)";  
}
?>
