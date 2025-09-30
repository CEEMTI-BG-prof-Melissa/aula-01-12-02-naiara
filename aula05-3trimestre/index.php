<html>
    <head>
        <title> Aula 05 PHP</title>
    </head>
    <body>
        <?php
        $n1= 2;
        $n2= $_GET["x"];

        echo "<br> Os valores informados são $n1 e $n2 <br>";
        echo "<br> O valor absoluto de $n2 é " .abs($n2);
        echo "<br> O resultado $n2 <sup> $n1</sup> é  " .pow($n2,$n1);
        echo "<br> A  raiz quadrada de $n2 é igual á " .sqrt($n2);
        echo "<br> O número $n2 arredondado é igual á" .round($n2);
        echo "<br> O número $n2 arredondado para cima é igual á " .ceil($n2);
        echo "<br> O número $n2 arredondado para baixo é igual á " .floor($n2);
        echo "<br> A parte inteira de $n2 é igual á " .intval($n2);
        echo "<br> Um pirulito custa R$ " .number_format($n1, 2);
        echo "<br>"
        ?>
    </body>
</html>
