<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Page Title</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        
        <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
        <script src='main.js'></script>
        
    </head>
    <body>
        <main>
            <div class="painel">
                <h2>Instruções</h2>
                <div class="conteudo-painel">
                    <p>Esta aplicação tem como finalidade demonstrar os valores que serão gastos com combustível durante uma viagem, com base no consumo do seu veículo, e com a distância determinada por você.</p>
                    <ul>
                        <li>Alcool</li>
                        <li>Diesel</li>
                        <li>Gasolina</li>
                    </ul>    
                </div>
            </div>
            <div class="painel">
                <h2>Cálculo do valor do consumo - R$</h2>
                <div class="conteudo-painel">
                    <form action="calculo.php" method="post">
                        <label for = "distancia">Distância em KM</label>
                        <input type="number" class="campoTexto" name="distancia">
                        
                        <label for="consumo">Consumo de combustível -KM/L</label>   
                        <input type="consumo" class="campoTexto" name="consumo">

                        <label for="tipo">Qual tipo de combustível você deseja utilizar?</label>
                        <select name="tipo">
                            <option value="gasolina">Gasolina</option>
                            <option value="alcool" selected>Álcool</option>
                            <option value="diesel">Diesel</option>
                        </select>
                        <!--<input type="text" class="campoTexto" name="tipo">-->

                        <button class="butao" type="submit">Calcular</button>
                    </form>
                </div>
            </div>
        </main>
    </body>
</html>