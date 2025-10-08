html>
    <head>
        <title> Aula 07 PHP</title>
    </head>
    <body>
        <?php
            //aula07
            //Naiara
            //08/10/2025

            $num=10;
            echo"Valor inicial : $num";
            <br>
            
            $num+=5;
            echo"<br><br>A soma de 10 mais 5 e : $num";
            <br>

            $num-=2;
            echo"<br>Apos subtrair 2 : $num";
            <br>

            $num*=3;
            echo"<br>Apos multiplica por 3 : $num";
            <br>

            $num/=2;
            echo"<br>Apos dividi por 2 : $num";
            <br>

            ++$num;
            echo"<br><br>Apos Pré-incremento $num";
            echo"<br>Apos Pós-incremento : " .($num++);
            <br>

            --$num;
            echo"<br>Apos Pré-encremento $num";
            echo"<br>Apos Pré-encremento : " .($num--);
            echo"<br><br>Valor final : $num"
            

        ?>
    </body>
</html>
