<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <title>Produtos - Tche Games Switch</title>
    <link rel="stylesheet" href="./CSS/estilos.css">
    <script type="text/javascript" src="./JS/scripts.js"></script>

</head>


<body>

    <header>
    <?php
        include('menu.html')
    ?>
    </header>
    <br><br><br><br><br><br><br><br>
    
    <!--
    <nav id="menuLateral">
            
        <h3>Categorias</h3>        

        <ul id="menuLateral">
            <li id="menuLateral" onclick="exibirTodos()">Todos (15)</li><br><br>
            <li id="menuLateral" onclick="exibirCategoria('consoles')">Consoles (6)</li><br><br>
            <li id="menuLateral" onclick="exibirCategoria('jogos')">Jogos (5)</li><br><br>
            <li id="menuLateral" onclick="exibirCategoria('acessorios')">Acessórios (4)</li><br><br>                
        </ul>                  
    
    </nav>    
    -->

    <div class="conteiner">
        <div class="row sidebar-sticky">
        <nav class="col-md-2 d-md-block sidebar">
            <div class="sidebar-sticky">
                <h5 class="d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-danger">
                Categorias             
                </h5><br> 
                <ul class="nav flex-column mb-2">
                <li class="nav-item text-primary" onclick="exibirTodos()">
                    Todos
                </li>                  
                <li class="nav-item text-primary" onclick="exibirCategoria('consoles')">
                    Consoles
                </li>
                <li class="nav-item text-primary" onclick="exibirCategoria('jogos')">
                    Jogos
                </li>
                <li class="nav-item text-primary" onclick="exibirCategoria('acessorios')">
                    Acessórios
                </li>
       
                              
                </ul>
            </div>
        </nav>
    
        

        <main class="col-md-10">
          
           
        <h2 class="text-danger">Nossos produtos</h2>
    
        <hr width="50%">
        <br><br>
    

         

            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "tchegames";

                $conn = mysqli_connect($servername, $username, $password, $database);

                if (!$conn) {
                    die("Problemas de conexão com o banco de dados.<br> ".mysqli_connect_error());
                }

                $sql = "select * from produtos";
                $result = $conn->query($sql);

                If ($result->num_rows >0) {
                    while($rows = $result->fetch_assoc()){                        
            ?>
        
            
            <div class="listaProdutos text-center" id="<?php echo $rows["categoria"]; ?>">        
                <img src="<?php echo $rows["imagem"]; ?>" alt="" width="120px" onmouseover="zoomIn(this)" onmouseout="zoomOut(this)">
                <br>
                <?php echo $rows["descricao"]; ?>
                <p class="precoDesconto"><?php echo $rows["precoCheio"]; ?></p>
                <p class="precoFinal"><?php echo $rows["precoDesconto"]; ?></p>
            </div>
       
               


            <?php
                    }    
                } else {
                    echo "Nenhum produto cadastrado!";
                }
            ?>

        </div>       
            </main>
           
  

    <footer>
    <?php 
        include('rodape.html');
    ?>
    </footer>

</body>

</html>