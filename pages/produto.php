    <?php 
        include './dados/produtos.php';
        include './function/real.php';

        if(isset($_GET["id"]) && !empty($_GET["id"])) {
            $id = $_GET["id"];
        } else {
          return 0;
        }

        // Nessa seção mostra como o resultado pe exibido
        foreach($produto as $value) {
        if($value["id"] == $id) {
      ?>

    <div class="marmitas-internas">
        
        <div class="img-marmita">
          <img src="<?=$value['imagem']?>" style="height:300px;">              
        </div> 
        
        <div class="info">
          
            <ul>
                <li>
                    <h3><?=$value['nome']?></h3>
                </li>
                
                <li>
                    Preço: <?=BRL($value['valor'])?>
                </li>
                <li>
                    Tipo: <?=$value['tipo']?>
                </li>
                <li>
                    Peso: <?=$value['peso']?>
                </li>
                <li>
                    Descrição: <?=$value['descricao']?>
                </li>
            </ul>
                      
        </div><!-- /info -->
        
        <a href="index.php?p=home.php" class="btn-voltar">Voltar</a>

    </div> <!-- /marmitas -->
    
            <div class="pagamento">
                <img src="img/forma-de-pagamento.png" alt="Formas de Pagamento" width="600px;">
            </div>
    <?php
       }    
      }    
    ?>
