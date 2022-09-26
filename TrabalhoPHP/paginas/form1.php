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
<form method="get">
    <input type="hidden" name="p" value="form1">
    <label>Idade </label> 
    <input type="number" name="idade" placeholder="Insira sua idade:"> <br>

    <label>País </label>
    <input type="text" name="pais"> <br> 

    <label>Estado </label>
    <input type="text" name="estado"> <br>

    <label>Cidade </label>
    <input type="text" name="cidade"> <br>

    <input type="submit">
</form>