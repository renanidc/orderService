
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>OrderService</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">  
    <style> 
        body { padding-top: 60px; overflow-y: scroll;} 
        .navbar-fixed-top,
        .navbar-fixed-bottom { background-color: white;}
    </style>
  </head>
  <body>
      <?php
        $container = $_REQUEST["action"];
       ?>
     <div class="navbar navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">OrderService  
          </a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Início</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuários <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="index.php?action=useradd">Novo Usuário</a></li>
                <li><a href="index.php?action=userlist">Listar Usuários</a></li>
              </ul>
            </li>
            <!-- Somente será exibido se o usuário for administrador -->  
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Soluções/Produtos <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Cadastrar Solução/Produto</a></li>
                <li><a href="#">Listar Soluções/Produtos</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Chamados <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="index.php?action=calladd">Novo Chamado</a></li>
                <li><a href="index.php?action=calllist">Listar Chamados</a></li>
              </ul>
            </li>
            <li><a href="index.php?action=about">Sobre</a></li>
            <li>  
                <a href="../../index.php">Sair</a> 
            </li>
            <li>
                <a ><span class="text-warning">Olá, bem vindo João Gabriel!</span></a> 
            </li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
   
    <div class="container" id="container">
        
       <?php
            if($container == "useradd"){
                include("../user/add.php");
            }else if($container == "userlist"){
                include("../user/list.php");
            }else if($container == "about"){
                include("../about/about.php");
            }else if($container == "calladd"){
                include("../call/add.php");
            }else if($container == "calllist"){
                include("../call/list.php");
            }
        ?>
    </div>
    <div style="height: 100px;"></div>   
    <footer>
        <div class="navbar navbar-fixed-bottom">
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a ><span class="text-warning"> &COPY; 2014 </span></a> </li>
                    <li ><a href="#">APSOO</a></li>                
                </ul>
            </div>
        </div>    
    </footer>
     
    <script src="../bootstrap/js/jquery.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
