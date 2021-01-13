<?php
/*4. Crie um programa que pergunte ao usuário seu nome e sua idade. Em seguida verifique
se a idade é maior ou menor que 18, exiba da seguinte forma: Fulano é maior de 18 e tem
XX Anos ou Fulano não é maior de 18 e tem XX Anos.*/
if (isset($_POST['age']) && empty($_POST['age'])== false){
    if (isset($_POST['nome']) && empty($_POST['nome'])== false){
        if($_POST["age"] > 18){
            echo $_POST["nome"]." é maior de 18 e tem ".$_POST["age"]." anos";
        }
        elseif($_POST["age"] < 18 && $_POST["age"] > 0){
            echo $_POST["nome"]." não é maior de 18 e tem ".$_POST["age"]." anos";
        }
        elseif($_POST["age"] < 0){
            echo "Insira uma idade aceitável(maior que 0)";
        }
        else{
            echo $_POST["nome"]." tem ".$_POST["age"]." anos";
        }
    }
}
    
?>
<form method="post">
    Insira seu nome:<br>
    <input type="text" name="nome"><br><br>
    Insira sua idade em anos:<br>
    <input type="number" name="age"><br><br>
    <input type="submit" value="Verificar">
</form>