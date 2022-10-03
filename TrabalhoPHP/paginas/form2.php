<h1>FORM2</h1>
<?php 
    if(isset($_GET['PrimeiroNumero'])){

        echo "Primeiro numero digitado: ".$_GET["PrimeiroNumero"]."<br>";
        echo "Segundo numero digitado: ".$_GET["SegundoNumero"]."<br>";
        echo "Terceiro numero digitado: ".$_GET["TerceiroNumero"]."<br>";
        echo "Quarto numero digitado: ".$_GET["QuartoNumero"]."<br>";
        echo "<hr>";
    
        $a = (float)$_GET["PrimeiroNumero"];
        $b = (float)$_GET["SegundoNumero"];
        $c = (float)$_GET["TerceiroNumero"];
        $d = (float)$_GET["QuartoNumero"];
        $soma =  $a + $b + $c + $d;
        $menos = $a - $b - $c - $d;
        $vezes = $a * $b * $c * $d;
        echo "<br> A soma entre $a, $b, $c e $d é: $soma";
        echo "<br> A subtração entre $a, $b, $c e $d é: $menos";
        echo "<br> A multiplicação entre $a, $b, $c e $d é: $vezes <hr>";

        //Verifica se a variável está vazia
        if($_GET["PrimeiroNumero"] == ""){
            echo "---AVISO--- Preencha o primeiro campo<hr>";
        }
        if($_GET["SegundoNumero"] == ""){
            echo "---AVISO--- Preencha o segundo campo<hr>";
        }
        if($_GET["TerceiroNumero"] == ""){
            echo "---AVISO--- Preencha o terceiro campo<hr>";
        }
        if($_GET["QuartoNumero"] == ""){
            echo "---AVISO--- Preencha o quarto campo<hr>";
        }
    }
?>

<form method="get" class = "form">
    <input type="hidden" name="p" value="form2">
    <label>Numero 1: </label> 
    <input class="caixasDeTexto" type="number" name="PrimeiroNumero" placeholder="dfe98wa"> <br>

    <label>Numero 2: </label>
    <input class="caixasDeTexto" type="number" name="SegundoNumero"> <br> 

    <label>Numero 3: </label>
    <input class="caixasDeTexto" type="number" name="TerceiroNumero"> <br>

    <label>Numero 4: </label>
    <input class="caixasDeTexto" type="number" name="QuartoNumero"> <br>

    <input id="btForm2" type="submit">
</form>