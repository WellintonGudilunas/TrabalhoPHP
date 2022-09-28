<h1>FORM3</h1>
<?php

    if(isset($_GET['Numero'])){
        echo "O número que você pediu foi: ".$_GET["Numero"]."<br>";
        $a = (float)$_GET["Numero"];
        $num = 0;   
        // while ($a > $num) {
        //     echo "* | ";
        //     $num++;
        // }
        while ($num <= $a) {
            echo $num. ", ";
            $num++; 
        }
    }

    ?>

    <form method="get" class = "form">
    <input class="caixasDeTexto" type="hidden" name="p" value="form3">
    <label>Insira o numero no qual voce deseja que o <br> sistema exiba uma lista em ordem crescente: </label> 
    <input class="caixasDeTexto" type="number" name="Numero" placeholder="Digite "> <br> <br>
    <input id="btForm3" type="submit">
</form>

