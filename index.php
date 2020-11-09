<!DOCTYPE html>
<html lang="pt-br">

<head>
   
    <meta charset="UTF-8">
    <title>Tche Games Switch</title>
    <link rel="stylesheet" href="./CSS/estilos.css">
        
</head>


<body> 
    <header>
    <?php
        include('menu.html')
    ?>
    </header>
    <br><br><br><br><br><br><br><br>

    <main>
    
    <div class="container mx-auto">
        <div>
            <h2 class="text-danger">Seja bem-vindo(a)!</h2>
            
            <hr width="50%">
            <br>
        </div>
    
        <div>
            <p>A Tche Games Switch é a sua loja especializada em Nintendo Switch&trade;</p>
            <p>Aqui você encontra todos os últimos lançamentos, os melhores preços e entrega rápida de consoles, jogos e acessórios!</p> 
            <p>Em nosso site e em nossas lojas você sempre tem a sua disposição um antendente especializado para prontamente tirar suas dúvidas.</p>  
            <br><br><br><br>
        </div>

        
    
        <div class="text-center">
            <a href="./produtos.php">                
                <img src="./img/produtos/Consoles/Switch_Azul_Vermelho.jpg" alt="Console" width="250px">                   
                <img src="./img/produtos/Acessorios/Organizador Jogos.jpg" alt="Jogos" width="200px">                    
                <img src="./img/produtos/Acessorios/Pelicula.jpg" alt="Acessórios" width="200px">                    
                <img src="./img/produtos/Acessorios/Charging Dock.jpg" alt="Acessórios" width="200px">                  
            </a>    
        </div>    
    
    </div>

    </main>

    <footer>
    <?php 
        include('rodape.html');
    ?>
    </footer>
   
</body>

</html>
