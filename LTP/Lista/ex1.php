<?php
#fiz essa gambiarra pra dar certo
if(isset($_POST['num']) && $_POST['num'] == 0){
    echo"igual a 0";
}
elseif (isset($_POST['num']) && empty($_POST['num']) == false){
    if($_POST["num"] > 0){
        echo "Positivo";
    }
    elseif($_POST["num"] < 0){
        echo "Negativo";
    }
 }
?>
<form method="post">
     Numero:<br>
    <input type="number" name="num"><br><br>
    <input type="submit" value="Verificar">
</form>
