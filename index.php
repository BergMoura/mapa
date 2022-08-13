<!DOCTYPE html>
<html lang="PT-BR">
    
    <head>
        <title>MAPA - EAD Unicesumar 2022</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="style.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@300;700&display=swap" rel="stylesheet"> 
        
    </head>
    
    <body>
        
        <!-- Aqui chama o Header -->
        <?php include 'pages/header.php';?>
        
        <?php 
            $pagina = @$_GET['p'];
            if($pagina == '') {include 'pages/home.php';}
            if($pagina == 'home.php') {include 'pages/home.php';}
            if($pagina == 'contato.php') {include 'pages/contato.php';}
            if($pagina == 'produto.php') {include 'pages/produto.php';}
        ?>  
        
        <!-- Aqui chama o Footer -->
        <?php include 'pages/footer.php';?>
    
    </body>
</html>