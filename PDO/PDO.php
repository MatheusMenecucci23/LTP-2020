<?php

//PARA RODAR ABRA O ARQUIVO NO BROWSER E COLOQUE O CAMINHO "127.0.0.1/name.php"
//PARA ATUALIZAR OS NOVOS COMANDOS VOCÊ TEM QUE APERTAR F5 OU ATUALIZAR A PÁGINA"

//definindo o acesso
$dns = "mysql:dbname=blog;host=127.0.0.1";
$dbuser="root";
$dbpass="";

//Conectando ao banco
try{
    $pdo= new PDO($dns,$dbuser,$dbpass);
    echo "Conexão estabelecida com sucesso!<br>";
}
catch(Exception $e) {
    echo "Falhou: ".$e->getMessage();
}

//SELECT OU selecionando os dados
try{
    $pdo= new PDO($dns,$dbuser,$dbpass);

    $sql="SELECT * FROM posts";
    $sql= $pdo->query($sql);

    if($sql->rowCount()>0){
        foreach($sql->fetchAll() as $post){
            echo "Título: ".$post["título"]."<br>";
            echo "Autor: ".$post["autor"]."<br>";
            echo "Data: ".$post["data_criado"]."<br>";
            echo "Conteúdo: ".$post["conteúdo"]. "<br>"."<br>";
        }
    }
    else{
        echo "Não há posts cadastrados";
    }
}
catch(Exception $e){
    echo "Falhou: ".$e->getMessage();
}

//INSERT
try{
    $pdo= new PDO($dns,$dbuser,$dbpass);

    $titulo = "Tudo sobre CMS";
    $autor = "Marilene";
    $conteúdo = "bla bla bla bla";
    $data_criado="2019-02-03 00:00:00";

    $sql = "INSERT INTO posts SET título='$titulo', autor='$autor',conteúdo='$conteúdo', data_criado='$data_criado'";
    $sql = $pdo->query($sql);

    echo "Título inserido com sucesso ".$pdo->lastInsertId();
}
catch(Exception $e){
    echo "Falhou: ".$e->getMessage();
}

//UPDATE
try{
    $pdo= new PDO($dns,$dbuser,$dbpass);

    $sql="UPDATE posts SET autor = 'Denny' WHERE autor = 'Marilene'";
    $sql = $pdo->query($sql);

    echo "Autor alterado!";
}
catch(Exception $e){
    echo "Falhou: ".$e->getMessage();
}

//DELETE
try{
    $pdo= new PDO($dns,$dbuser,$dbpass);

    $sql = "DELETE FROM posts WHERE id=6";
    $sql = $pdo->query($sql);

    echo"Post deletado com sucesso";


}
catch(Exception $e){
    echo "Falhou: ".$e->getMessage();
}

?>
