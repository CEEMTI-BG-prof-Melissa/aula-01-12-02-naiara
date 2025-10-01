<html>
    <head>
    </head>
        <title>Aula06 </title>
    <body>
        <h3>Operadores de Atribuição</h3>
        <hr>

        <?php
        $a=2;
        $b=$a+5;
        echo "A e igual a $a e B e igual a $b.";
        echo "<br></br>";

        $a=$a+3;
        echo"Agora A é igual a $a.";
        echo"<br></br>";

        $b+=8;
        echo "Agora A e igual $a";
        echo "<br></br>";

        $b-=5;
        echo "Agora B e igual a $b.";
        echo "<br></br>";

        $b*=2;
        echo"Agora Multiplicando o valor de B por 2 e igual a $b.";
        echo"<br></br>";
        
        $b/=10;
        echo"Agora Dividindo o valor de B por 10 e igual a $b.";
        echo"<br></br>";

        $b%=3;
        echo"O resto da divisão do valor de B dividido por 3 e igual a $b.";
        echo"<br></br>";

        $b.=10;
        echo"Concatenando o valor de B com o numero 10 fica igual a $b.";
        echo"<br></br>";
        ?>
    </body>
</html>
