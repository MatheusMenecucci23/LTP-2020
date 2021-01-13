<?php
    if(isset($_POST["Email"])&& empty($_POST["Email"]) == false)
    {
        if(isset($_POST["usuario"])&& empty($_POST["usuario"]) == false){
            $email = $_POST["Email"];
            $usuario = $_POST["usuario"];
            echo "Meu Email é:".$email."<br>";

            echo "Meu usuário é:".$usuario;
        }
     
    }
?>
<form method="post">
    Email: <br>
    <input type="text" name="Email"><br><br>
    Usuário: <br>
    <input type="password" name="usuario">
    <br><br>
    <input type="submit" value="entrar">
</form>