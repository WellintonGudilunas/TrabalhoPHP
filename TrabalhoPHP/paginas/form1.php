<h1>FORM1</h1>
<?php
//Verifica se o GET existe
    if(isset($_GET['idade'])){
        echo "Os dados Informados Foram: <br>";
        echo "Idade: ".$_GET["idade"]."<br>";
        echo "Pais: ".$_GET["pais"]."<br>";
        echo "Estado: ".$_GET["estado"]."<br>";
        echo "Cidade: ".$_GET["cidade"]."<br>";
        echo "<hr>";



        //Verifica se a variável está vazia
        if($_GET["idade"] == ""){
            echo "---AVISO--- Preencha a sua idade<hr>";
        }
        if($_GET["pais"] == ""){
            echo "---AVISO--- Preencha o seu país<hr>";
        }
        if($_GET["estado"] == ""){
            echo "---AVISO--- Preencha o seu estado<hr>";
        }
        if($_GET["cidade"] == ""){
            echo "---AVISO--- Preencha a sua cidade<hr>";
        }
    } 
    ?>
<form method="get" class = "form">
    <table>
            <input type="hidden" name="p" value="form1">
            <tr>
                <td><label>Idade: </label> </td>
                <td><input class="caixasDeTexto" type="number" name="idade" placeholder="Insira sua idade"></td> <br>
            </tr>
            <tr>
                <td><label>País: </label></td>
                <td><input class="caixasDeTexto" type="text" name="pais" placeholder="Insira seu País"></td><br>
            </tr>

            <tr>
                <td><label>Estado: </label></td>
                <td><input class="caixasDeTexto" type="text" name="estado" placeholder="Insira seu estado"></td>
            </tr> <br>

            <tr>
                <td><label>Cidade: </label></td>
                <td><input class="caixasDeTexto" type="text" name="cidade" placeholder="Insira sua cidade"></td>
            </tr> <br>

            <tr>
                <td><input id="btForm1"  type="submit"></td>
            </tr>
       
    </table>
</form>