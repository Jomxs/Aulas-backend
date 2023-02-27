<h2></h2>
<hr>
É utilizado para avaliar uma expressão formada
por um conjunto de operadores lógicos.

<ul>
    <li>and |   E</li>
    <li>or  |   Ou</li>
    <li>&&  |   E</li>
    <li>||  |   OU</li>
    <li>!   |   NÂO</li>
    <li>xor |   Ou exclsivo</li>
</ul>

<hr>

<h3>Tabela Verdade - E</h3>

<table border=1>
    <tr>
    <th colspan=3>Tabela do E</th>
    </tr>
    <tr>
        <td style="color:green;">V</td>
        <td style="color:green;">V</td>
        <td style="color:green;">V</td>
    </tr>
    <tr>
        <td style="color:green;">V</td>
        <td style="color:red;">F</td>
        <td style="color:red;">F</td>
    </tr>
    <tr>
        <td style="color:red;">F</td>
        <td style="color:green;">V</td>
        <td style="color:red;">F</td>
    </tr>
    <tr>
        <td style="color:red;">F</td>
        <td style="color:red;">F</td>
        <td style="color:red;">F</td>
    </tr>
</table>

<br>
<br>

<strong>Exemplo</strong>
Murilo disse a Bruna que iria ao parque se:
<ol>
    <li>Domingo estivese sol;</li>
    <li>Tivesse realizado todas as atividas do IF.
</li>
</ol>

<?php
    $condicao1 = true;
    $condicao2 = false;
    $acao_murilo = $condicao1 && $condicao2;
    var_dump($acao_murilo);
?>
 <br>
 <hr>
    <h3>Tabela Verdade - OU</h3>
 <table border=1>
    <tr>
    <th colspan=3>Tabela do OU</th>
    </tr>
    <tr>
        <td style="color:green;">V</td>
        <td style="color:green;">V</td>
        <td style="color:green;">V</td>
    </tr>
    <tr>
        <td style="color:green;">V</td>
        <td style="color:red;">F</td>
        <td style="color:green;">V</td>
    </tr>
    <tr>
        <td>F</td>
        <td style="color:green;">V</td>
        <td style="color:green;">V</td>
    </tr>
    <tr>
        <td style="color:red;">F</td>
        <td style="color:red;">F</td>
        <td style="color:red;">F</td>
    </tr>
</table>

<strong>Exemplo</strong>
Murilo disse a Bruna que iria ao parque se:
<ol>
    <li>Domingo estivese sol;</li>
    <li>Tivesse realizado todas as atividas do IF.
</li>
</ol>

    <?php
    $condicao1 = true;
    $condicao2 = false;
    $acao_murilo = ($condicao1 or $condicao2);
    var_dump($acao_murilo);
?>


<br>
<hr>

<h3>Tabela Verdade - NÃO</h3>
 <table border=1>
    <tr>
    <th colspan=3>Tabela do NÂO</th>
    </tr>
    <tr>
        <td style="color:green;">V</td>
        <td style="color:red;">F</td>
    </tr>
    <tr>
        <td style="color:red;">F</td>
        <td style="color:green;">V</td>
    </tr>
</table>
<strong>Exemplo</strong>
Murilo é um cara legal :
<br>

    <?php
    $condicao1 = true;
    $acao_murilo = !$condicao1;
    var_dump($acao_murilo);
?>
