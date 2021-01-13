<?php
#2. Solicite a entrada de um número e descubra se um número digitado é par ou ímpar.
if(isset($_POST['num']) && $_POST['num'] == 0){
    echo"par";
}
if (isset($_POST['num']) && empty($_POST['num'])== false){
    if($_POST["num"] % 2 == 0) {
        echo "Par";
    }
    if($_POST["num"] % 2 != 0){
        echo "Impar";
    }
 }
?>
<form method="post">
    Numero:<br>
    <input type="text" name="num"><br><br>
    <input type="submit" value="Verificar">
</form>