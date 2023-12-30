<?php 
session_start();
require_once('../model/UnidadeDAO.php');
$dao = new UnidadeDAO();
$unidade = $dao->obter_todos();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
    <body>
        <header>
            <img class="logo" src="../img/logo.png" alt="Logo">
            <nav>
                <ul class="nav__links">
                    <li><a href="sevicos.php">SERVIÇOS</a></li>
                    <li>
                        <select id=''>
                            <option>UNIDADES</option>
                            <option value=''></option>  
                        </select>
                    </li>
                    <li><a href="equipe.php"><img src="../img/entrar.png" alt=""></a></li>
                    <li><a href="contatos.php">CONTATOS</a></li>
                </ul>
            </nav>
        </header>
    </body>
</html>