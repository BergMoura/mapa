<?php 
    include 'dados/produtos.php';
    include 'function/real.php';
 ?>
        
        <div class="banner">
            <img src="img/novo_banner.png" alt="Banner Topo" width="100%">
        </div> <!-- /banner -->
        
        <div class="marmitas">
            
            <h1>Conheça o nosso Menu Especial</h1>
            
            <div class="lista-marmitas">
                
                <?php
                    foreach($produto as $pdt):    
                ?>   
                    <ul>
                        <li>
                            <a href="index.php?p=produto.php&id=<?=$pdt['id']?>">     
                                
                                <img src="<?=$pdt['imagem']?>">    
                                
                                <h4><?=$pdt['nome']?></h4>
                                
                                <div class="preco">
                                    <?=BRL($pdt['valor'])?>
                                </div>
                            </a>
                        </li>
                    </ul>

                <?php 
                    endforeach;
                ?> 
                
            </div><!-- /lista-marmitas -->
        </div><!-- /marmitas -->
        
                    <div class="contato">
            <h3>
                Estamos atendendo em novo número (83) 98807.5510 <br/>
                Peça já o seu prato preferido!
            </h3>
        </div>
        
        <div class="pagamento">
                <img src="img/forma-de-pagamento.png" alt="Formas de Pagamento" width="600px;">
            </div>
        
