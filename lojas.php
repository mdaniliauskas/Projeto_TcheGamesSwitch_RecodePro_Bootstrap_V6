<!DOCTYPE html>
<html lang="pt-br">
    
<head>

    <meta charset="UTF-8">
    <title>Nossas lojas - Tche Games Switch</title>
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

    <div class="container">
            
        <h2 class="text-danger">Nossas lojas</h2>
        <br>

        <p>Venha conhecer nossa loja mais próxima de você!</p>
        <br><br><br>

        <div class="text-center">
            <ul>
                <li>
                    <h3 class="text-primary">São Paulo (Matriz)</h3>
                    <p>Avenida Paulista, 2000</p>
                    <p>São Paulo - SP</p>
                    <p>(11) 222222-2222</p>
                    <p><a href="mailto:atendimento.sampa@tchegames.com.br">atendimento.sampa@tchegames.com.br</a></p>
                    <br><br>
                </li>

                <li>
                    <h3 class="text-primary">Rio de Janeiro</h3>
                    <p>Avenida Getúlio Vargas, 1100</p>
                    <p>Rio de Janeiro - RJ</p>
                    <p>(21) 222222-2222</p>
                    <p><a href="mailto:atendimento.rio@tchegames.com.br">atendimento.rio@tchegames.com.br</a></p>
                    <br><br>
                </li>

                <li>
                    <h3 class="text-primary">Porto Alegre</h3>
                    <p>Avenida Alberto Bins, 250</p>
                    <p>Porto Alegre - RS</p>
                    <p>(51) 222222-2222</p>
                    <p><a href="mailto:atendimento.poa@tchegames.com.br">atendimento.poa@tchegames.com.br</a></p>                
                </li>            
            </ul>
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