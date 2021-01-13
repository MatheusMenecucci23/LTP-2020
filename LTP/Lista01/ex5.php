<?php
/*5. Faça uma página HTML com um formulário, contendo os seguintes itens:
• Nome (input text)
• Email (input text)
• Profissão (select - analista de sistema, programador, técnico de informática, gerente
de redes, gerente de projetos, Administrador de banco de dados)
• Login (input text)
• Senha (input codificado)
• Deseja receber nossas promoções? (check box)
• Botão de confirmação (salvar)
• A ação do formulário deve ser do tipo GET;
Ao exibir os dados no formulário, verificar se os campos abaixo existem e se eles foram
preenchidos:
• nome
• email
• senha
Ao final, deverá imprimir na tela os dados digitados dos campos nome e email*/
if (isset($_GET['nome']) && empty($_GET['nome'])== false){
    if (isset($_GET['email']) && empty($_GET['email'])== false){
        if (isset($_GET['senha']) && empty($_GET['senha'])== false){
            echo "Nome: ".$_GET['nome']."<br>";
            echo "Email: ".$_GET['email'];
        }
        else{
            echo"Senha não encontrada";
        }
    }
    else{
        echo"Email não encontrado";
    }
}
elseif(isset($_GET['nome']) && empty($_GET['nome'])== true){
    echo"Nome não encontrado";
}
?>
<form method="get">
    Insira seu nome:<br>
    <input type="text" name="nome"><br><br>
    Insira seu Email:<br>
    <input type="text" name="email"><br><br>
    Insira sua profissão:<br>
    <select name="select">
        <option value="valor1">Analista de sistema</option> 
        <option value="valor2">Programador</option>
        <option value="valor3">Técnico de informática</option>
        <option value="valor3">Gerente de redes</option>
        <option value="valor3">Gerente de projetos</option>
        <option value="valor3">Administrador de banco de dados</option> 
    </select><br><br>
    Insira seu Login:<br>
    <input type="text" name="login"><br><br>
    Insira seu senha:<br>
    <input type="password" name="senha"><br><br>
    Desja receber nossas promoções? Sim<input type="checkbox" name="sim"><br><br>
    <input type="submit" value="Salvar">
</form>