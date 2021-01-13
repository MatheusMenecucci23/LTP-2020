<?php
/*Faça um programa em PHP onde verifica se o valor da variável A é maior ou menor que
o valor da variável B. A mensagem a ser impressa deve ser “A maior que B” ou “A menor
que B”.*/

if(isset($_POST['numa']) && $_POST['numa'] == 0){
    if (isset($_POST['numb']) && empty($_POST['numb'])== false){
        if ($_POST['numa'] > $_POST['numb']){
            echo "A maior que B";
        }
        elseif($_POST["numa"] < $_POST["numb"]){
            echo "A menor que B";
        }
    }
}

if(isset($_POST['numb']) && $_POST['numb'] == 0){
    if (isset($_POST['numa']) && empty($_POST['numa'])== false){
        if ($_POST['numa'] > $_POST['numb']){
            echo "A maior que B";
        }
        elseif($_POST["numa"] < $_POST["numb"]){
            echo "A menor que B";
        }
    }
}
if(isset($_POST['numb']) && $_POST['numb'] == 0){
    if(isset($_POST['numa']) && $_POST['numa'] == 0) {
        echo"são iguais";
    }
}


if (isset($_POST['numa']) && empty($_POST['numa'])== false){
    if (isset($_POST['numb']) && empty($_POST['numb'])== false){
        if($_POST["numa"] > $_POST["numb"]){
            echo "A maior que B";
        }
        if($_POST["numa"] < $_POST["numb"]){
            echo "A menor que B";
        }
        if($_POST["numa"] == $_POST["numb"]){
            echo "A é igual B";
        }
    }
}
?>

<form method="post">
    Numero A:<br>
    <input type="number" name="numa"><br><br>
    Numero B:<br>
    <input type="number" name="numb"><br><br>
    <input type="submit" value="Verificar">
</form>