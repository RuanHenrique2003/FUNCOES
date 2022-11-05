<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade de funções</title>
</head>
<body>

<!-- A) --------------------------------------------------------------------------------------------------------->

<h3>Escreva uma função para: </h3>
<h3>a) Escrever a tabuada de um número passado por parâmetro. Exemplo: se o parâmetro for 2 tabuada(2);</h3>

<?php 

    function tabuada($v){
        echo "<table style=' border:solid 1px black;   background-color:yellow;  text-align:center;  '>";
            for($i = 1; $i < 11; $i++ ){
                $result = $v * $i;
                echo "<tr><td style = 'border:solid 1px black;'>$v   x   $i  =  $result</td></tr>";
            }
        echo "</table>";
    }

    tabuada(2);

?>

<!-- B) --------------------------------------------------------------------------------------------------------->

<h3>b) Inverter o conteúdo de um vetor qualquer. Exemplo: se a entrada for ['a', 'z,'m'] deve devolver ['m','z','a'].</h3>
    
<?php

    $vetor = array("a","z","m");

    function retornar($a)
    {  
        $vetor_reverse = array_reverse($a);
        return $vetor_reverse;
    }

    echo"<pre>";
    print_r($vetor);
    echo"</pre>";

    echo"<pre>";
    print_r(retornar($vetor));
    echo"</pre>";

?>

<!-- C) --------------------------------------------------------------------------------------------------------->

<h3>c) Que receba um vetor com números inteiros e que devolva o maior número existente no vetor.  Use apenas um laço de repetição e instrução if.</h3>

<?php

    $valor = array("11","21","91","41");

    echo"<pre>";
    print_r($valor);
    echo"</pre>";

    echo "O maior valor é o ".max($valor)."";
    
?>

<!-- D) --------------------------------------------------------------------------------------------------------->

<h3>d) formatar um número como CPF (###.###.###-##, onde # representa um dígito). Sugestão: completar com zeros a esquerda se a quantidade de dígitos for menor que 11. Use a função mb_strlen() para descobrir a quantidade de dígitos. E use a função mb_substr() para separar os dígitos para acrescentar os pontos e traço para formatar como CPF.</h3>


<!----------DIGITAR O CPF------------->
<form  method="POST">
    <label>Digite um CPF :</label>
    <input type="number_format" maxlength="11" name ="cpf"  placeholder="___.___.___-__" style="width: 110px;">
    <input type="submit" name="enviar" value="Clique aqui">
</form><br>


<?php   
    function CPFcompleto($numero)
    {   
        $a =  mb_substr($numero,0,3);
        $b =  mb_substr($numero,3,3);
        $c =  mb_substr($numero,6,3);
        $d =  mb_substr($numero,9,2);
        $CPF = $a.".".$b.".".$c."-".$d;
        return "CPF formatado : $CPF";
    }
    
    function CPFincompleto($numero)
    {
        //COMPLETAR COM 0 A ESQUERDA SE A QUANTIDADE DE DÍGITOS FOR MENOR QUE 11
        $add = str_pad($numero, 11, 0, STR_PAD_LEFT);

        $e =  mb_substr($add,0,3);
        $f =  mb_substr($add,3,3);
        $g =  mb_substr($add,6,3);
        $h =  mb_substr($add,9,2);
        $cpf = $e.".".$f.".".$g."-".$h;
        return "CPF formatado : $cpf";
    }



    if(isset($_POST['enviar'])){
        $numero = @ $_POST['cpf'];
        $var = mb_strlen($numero);

        if($var == 11){
            echo CPFcompleto($numero);
        }

        if($var > 0 && $var < 11){
            echo CPFincompleto($numero);
        }   
    }
?>

<!-- E) --------------------------------------------------------------------------------------------------------->

<h3>e) Sabendo que a fórmula para a conversão de uma temperatura em  Fahrenheit para Celsius é: c = (f-32)*5/9, faça uma função em PHP que mostre os valores em Celsius das seguintes temperaturas em Fahrenheit: 90º, 77º, 52º e 12º</h3>

<?php  

    function conversaoParaCelsius($f)
    {   
        //DEIXANDO SOMENTE DUAS CASAS DEPOIS DO .
        $c = number_format(($f-32)*5/9, 1, '.');

        return "<table style= 'border:solid 1px black; width:100px; text-align:center; background-color:yellow;'>
    
                    <th style= 'border:solid 1px black;'>°F</th>
                    <th style= 'border:solid 1px black;'>°C</th>
                    
                    <tr> 
                        <td  style = 'border:solid 1px black;'>$f</td>
                        <td  style = 'border:solid 1px black;'>$c</td>
                    </tr>

                </table>";
    }
    
    echo conversaoParaCelsius(90)."<br>";
    echo conversaoParaCelsius(77)."<br>";
    echo conversaoParaCelsius(52)."<br>";
    echo conversaoParaCelsius(12)."<br>";

?>

<!-- F) --------------------------------------------------------------------------------------------------------->

<h3>f) Desenvolva, em PHP, a função buscaTexto($texto, $busca), sendo $texto uma variável string que contém um texto, e $busca, um array que contém palavras a serem buscadas no texto. Cada vez que uma palavra buscada for localizada, ela deverá ser destacada na cor vermelha. A função deverá retornar o $texto com as palavras destacadas em vermelho. </h3>

<?php  

    function buscarTexto($texto,$busca){
    
    }
    
?>

<!-- G) --------------------------------------------------------------------------------------------------------->

<h3>g) Que receba um vetor de números inteiros e devolva a soma dos valores contidos nesse vetor. Use apenas um laço de repetição e instrução if.</h3>


<?php
    
    function somarValores($a){
        $soma = array_sum($a);
        return "A soma dos valores contidos no vetor é : $soma";
    }

    echo "<pre>";
    echo somarValores($vetor = array(31,41,51,61));
    echo "</pre>";

    echo "<pre>";
    print_r($vetor);
    echo "</pre>";

?>






</body>
</html>