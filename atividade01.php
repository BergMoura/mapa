<!DOCTYPE html>
<html lang="PT-BR">
   
    <head>
        
        <title>Atividade 01 - Unicesumar</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <style>
            
            @import url('https://fonts.googleapis.com/css2?family=Rubik:wght@600&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Dosis:wght@300&family=Rubik:wght@600&display=swap');
            
            body {
            background-color: azure;
            font-family: tahoma;
            }

            .container {
                width: 800px;
                margin: 0 auto;
                text-align: center;
                padding: 5px;
            }

            .container h1 {
                background-color: #005488;
                padding: 18px 15px 15px 15px;
                font-family: 'Rubik', sans-serif;
                font-size: 32px;
                color: #ffffff;
                border-radius: 10px;
            }

            .container h2 {
                width: 600px;
                margin: 0 auto;
                font-family: 'Rubik', sans-serif;
                font-size: 23px;
                color: black;
                background-color: #cccccc;
                border-bottom: 5px solid #005488;
                padding: 15px 10px 10px 10px;
                border-radius: 10px;
            }
            
            .container h3 {
                font-family: 'Dosis', sans-serif;
                font-size: 22px;
                color: grey;
            }
            
            footer {
                background-color: #005488;
                padding: 1px;
                color: #ffffff;
                font-family: 'Dosis', sans-serif;
                font-size: 19px;
                border-radius: 10px;
            }
        </style>
        
    </head>
    <body>
        
        <div class="container">
            <h1>
                POSTO UNICESUMAR
            </h1>
            
            <!--Resolução da Atividade 01 -->
            <h2>
                <?php
                    $etanol = 4.87;
                    $gasolina = 5.59;
                    $abastecer = 50;
                    $porcentagem = $etanol / $gasolina;
                    $gasto_etanol = $etanol * 50;
                    $gasto_gasolina = $gasolina * 50;

                    //Exibir a Tabela de Preços na Tela
                    echo "TABELA DE PREÇOS <br />";
                ?>
            </h2>
                
            <h3>
                <?php
                    echo "Etanol: R$ $etanol";
                    echo "   │ Gasolina: R$ $gasolina <br / >";
                    
                    // Utilizei o nunmer_format para exibir apenas 2 casas após a vírgula
                    $formato_porcentagem = number_format($porcentagem, 2, ",",".");
                    echo "Diferença percentual (%): $formato_porcentagem <br />";
                ?> 
            </h3>    
                
            <h2>
                <?php
                // Exibir a mensagem sobre sugestão de abastecimento
                    echo "SUGESTÃO DE ABASTECIMENTO <br/>";
                ?>
            </h2> 

            <h3>    
                <?php
                    //Condições para escolha
                    if ($porcentagem < 0.70) {
                        echo "Olá Juliana, tudo bem? Seja bem vinda! <br/><br/>";
                        echo "Hoje compensa abastecer seu carro com ETANOL. <br/>";
                        echo "Motivo: A porcentagem está abaixo de 0.70% <br/><br/>";
                        
                        $gasto_etanol = number_format($gasto_etanol, 2, ",",".");
                        echo "Custo de abastecimento para 50 litros: R$ $gasto_etanol";
                    }
                    if ($porcentagem > 0.70) {
                        echo "Olá Juliana, tudo bem? Seja bem vinda! <br/><br/>";
                        echo "Hoje não compensa abastecer seu carro com Etanol. <br/> Motivo: A porcentagem está acima de 0.70% <br/><br/>";
                        echo "Sugestão: Abasteça o seu carro com GASOLINA. <br/>";
                        
                        $gasto_gasolina = number_format($gasto_gasolina, 2, ",",".");
                        echo "Custo de abastecimento para 50 litros: R$ $gasto_gasolina";
                    }
                ?>
            </h3>
                
            <footer>
                <h4>
                    &copy;Programação BackEnd I - 2022.   │   R.A. 1941679-5
                </h4>
            </footer> 
                
        </div><!--End Container-->
        
    </body>
</html>
