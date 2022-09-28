<!--Wellinton Rafael Gudilunas e Sabrine Gabriela de Quadros-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
    
<body>
    <h1>Pagina inicial</h1>

<?php
        require_once("./paginas/home.php");

        if(isset($_GET["p"])){
            $page = $_GET["p"];
        } else {
            $page = "home";
        }

        switch($page) {
            case "form1";
                require_once("./paginas/form1.php"); 
            break;
            case "form2": 
                require_once("./paginas/form2.php");
            break;
            case "form3":
                require_once("./paginas/form3.php");
            break;
            default: 
                require_once("./paginas/home.php");
            break;

        }
    ?>
</body>
</html>