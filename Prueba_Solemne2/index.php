<?php 
session_start();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="MaCss.css" type="text/css">
        <script src="maScript.js" type="text/javascript"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <title>Prueba Solemne 2</title>
        
    </head>
    <body>
        
         <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
  <!-- Brand -->
  <a class="navbar-brand" href="#"><img src="image/P.png" width="10%" height="12%"alt=""/> asyonStore</a>
  
  

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link btn-danger" href="#" active ><i class="fa fa-bars w3-md"></i>Inicio</a>
    </li>
    <li class="nav-item">
        <a class="nav-link btn-primary" href="#" data-toggle="modal" data-target="#myModal" ><i class="fa fa-male"></i>Conectar</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle btn-primary" href="#" id="navbardrop" data-toggle="dropdown">
          <i class="fa fa-refresh"></i> Catalogo
      </a>
      <div class="dropdown-menu">
          <button class="dropdown-item" type="button">Ropas Hombres</button>
        <a class="dropdown-item" href="Femme">Ropas Mujeres</a>
        <a class="dropdown-item" href="#">Ropas Ninos</a>
      </div>
    </li>
  </ul>
  <div class="navbar"> </div>
  
  <form class="form-inline" action="#">
      <div class="input-group" style="float: right">
          <div class="input-group-prepend">
              <span class="input-group-text">@</span>
          </div>
          
          <input type="text" class="form-control" placeholder="Nom d'utilisateur">
          <input type="button" class="w3-btn w3-md w3-teal w3-hover-blue" value="Buscar"><i class="w3-blue fa fa-search "></i>
      </div>
  </form>
  <br/>
  <div>
      <a class="navbar-brand" href="./Productos/Caro.php"><img src="Prueba Solemne 2/Panier.jpg" width="10%" height="10%"alt=""/><span id="demo"class="badge badge-primary">2</span></a>
  </div>
  
        </nav>
        
       <div class="container">
            
            
            
        
        <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    
                    <div class="modal-header">
                        <h4 class="modal-title text-primary" style="text-align: center">Conectar con tu cuenta</h4>
                        
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <div class="modal-body">
                        <form class="form-inline" action="./Vali_Form.php" method="POST">
                            <div class="input-group">
                                <input type="email" placeholder="Tu Correo" class="form-inline" name="Email">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">@exemple.com</span>
                                </div>
                            </div>
                            
                            <div class="input-group">
                                <input class="form-inline" type="password" name="password" placeholder="Tu Contrasena">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">//afds2323</span>
                                </div>
                            </div>
                            <div class="form-control">
                               <input type="submit" class="btn btn-secondary" value="Conectar"> 
                            </div>
                            
                        </form>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
            
        </div>
        
        <div class="row">
            <div class="col-2">
                 <div class="w3-sidebar w3-sidebar-pills w3-card-4 w3-round-xl">
            <a href="#" class="w3-bar-item w3-button">Ropas Hombres</a>
            <a href="#" class="w3-bar-item w3-button">Ropas Mujeres</a>
            <a href="#" class="w3-bar-item w3-button">Ropas Ninos</a>
            <a href="#" class="w3-bar-item w3-button">Ropas Ninas</a>
            <a href="#" class="w3-bar-item w3-button">Equipos Electronicos</a>
            <a href="#" class="w3-bar-item w3-button">Muebles</a>
            <a href="#" class="w3-bar-item w3-button">Productos Farmaceticos</a>
            <a href="#" class="w3-bar-item w3-button">Productos </a>
                 </div>
            </div>
            
            <div id="demo"class="col-10">
                
                  <h1>CATALOGO</h1>
        <!--Premiere partie image-->
        <section 1 id="homme">
      <div  class="gallery">
          <a target="_blank" href="./Productos/Formulaire_Produits.php">
               <img src="Prueba Solemne 2/Pantalon Homme.jpg" alt=""/>
            </a>
            <div class="desc">Pantalon de hombre</div>
            <hr/>
            <div class="desc">20.000 CLP</div>
        </div>   
    
        <div class="gallery">
            <a target="_blank" href="./Productos/Formulaire_Produits.php">
                <img src="Prueba Solemne 2/Chemise Homme.jpg" alt=""/>
            </a>
            <div class="desc">Camiseta de hombre</div>
            <hr/>
            <div class="desc">25.000 CLP</div>
        </div>
    
        <div class="gallery">
            <a target="_blank" href="./Productos/Formulaire_Produits.php">
                <img src="Prueba Solemne 2/Tenis vans Rouge Homme.jpg" alt=""/>
            </a>
            <div class="desc">Zapatos de hombre</div>
            <hr/>
            <div class="desc">45.000 CLP</div>
        </div>
    
</section>
    <!--Deuxieme Partie image-->
    <section 2>
        <div id="Femme" class="gallery">
            <a target="_blank" href="./Productos/Formulaire_Produits.php">
                 <img src="Prueba Solemne 2/PantalonF.jpeg" alt=""/>
            </a>
            <div class="desc">Pantalon Mujer</div>
            <hr/>
            <div class="desc">5.000 CLP</div>
        </div>   
    
        <div class="gallery">
            <a target="_blank" href="./Productos/Formulaire_Produits.php">
                <img src="Prueba Solemne 2/Chemise Femme.jpeg" alt=""/>
            </a>
            <div class="desc">Camiseta de Mujer</div>
            <hr/>
            <div class="desc">5.000 CLP</div>
        </div>
    
        <div class="gallery">
            <a target="_blank" href="./Productos/Formulaire_Produits.php">
                <img src="Prueba Solemne 2/Tenis Femme.jpeg" alt=""/>
            </a>
            <div class="desc">Zapato de Mujer</div>
            <hr/>
            <div class="desc">15.000 CLP</div>
        </div>
    
    </section>

    <!--Troisieme Partie image-->
    <section 3>
        <div id="Enfant" class="gallery">
            <a target="_blank" href="./Productos/Formulaire_Produits.php">
                     <img src="Prueba Solemne 2/PantalonNinoH.jpg" alt=""/>
            </a>
            <div class="desc">Pantalon de Nino</div>
            <hr/>
            <div class="desc">8.000 CLP</div>
        </div>   
    
        <div class="gallery">
            <a target="_blank" href="./Productos/Formulaire_Produits.php">
                <img src="Prueba Solemne 2/ChemiseEnfantHomme.jpg" alt=""/>
            </a>
            <div class="desc">Camiseta de Nino</div>
            <hr/>
            <div class="desc">25.000 CLP</div>
        </div>
    
        <div class="gallery">
            <a target="_blank" href="./Productos/Formulaire_Produits.php">
                <img src="Prueba Solemne 2/Tenis Nino.jpg" alt=""/>
            </a>
            <div class="desc">Zapatos de Nino</div>
            <hr/>
            <div class="desc">55.000 CLP</div>
        </div>
    
    </section>
     <!--Quatrieme partie-->
    <section 3>
             <div class="gallery">
                 <a target="_blank" href="./Productos/Formulaire_Produits.php">
                     <img src="Prueba Solemne 2/PantalonNino.jpg" alt=""/>
            </a>
            <div class="desc">Pantalon de Nina</div>
            <hr/>
            <div class="desc">30.000 CLP</div>
        </div>   
    
        <div class="gallery">
            <a target="_blank" href="./Productos/Formulaire_Produits.php">
                <img src="Prueba Solemne 2/CHemise Nina.jpg" alt=""/>
            </a>
            <div class="desc">Camiseta de Nina</div>
            <hr/>
            <div class="desc">10.000 CLP</div>
        </div>
    
        <div class="gallery">
            <a target="_blank" href="./Productos/Formulaire_Produits.php">
                <img src="Prueba Solemne 2/Tenis Nina.jpg" alt=""/>
            </a>
            <div class="desc">Zapato de Nina</div>
            <hr/>
            <div class="desc">25.000 CLP</div>
        </div>
    
    </section>
            </div>
        </div>
       
    </body>
</html>
