<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulaire Produits</title>
        <script src="maScript.js" type="text/javascript"></script>
        <link type="text/css" rel="stylesheet" href="CssForm.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <body>
        
        <div class="w3-display-middle w3-bottom"style="max-width:600px" style="display:center">
            
            <form action="Caro.php" method="POST" class="inline-group">
                   <img id="demo"src="../Prueba Solemne 2/Pantalon Homme.jpg" style="margin-left:150px" style="margin-right:150px"class="w3-circle"width="30%" height="30%"alt=""/>
                <section>
                     <div class="gallery">
                         <button onclick="myFunction()" type="button" target="_blank">
                        <img src="../Prueba Solemne 2/Pantalon Homme.jpg" id="im1"alt=""/>
                         </button>
                       </div>
                    <script>
                    function myFunction(){
                         document.getElementById('demo').innerHTML=im1;
                        }
                    </script>
                    
                    
                    <div class="gallery">
                        <a href="" target="_blank">
                            <img src="../Prueba Solemne 2/Pantalon Homme/1.jpg" alt=""/>
                        </a>
                    </div>
                    
                    <div class="gallery">
                        <a href="" target="_blank">
                            <img src="../Prueba Solemne 2/Pantalon Homme/2.jpeg" alt=""/>
                        </a>
                    </div>
                    <div class="gallery">
                        <a href="" target="_blank">
                            <img src="../Prueba Solemne 2/Pantalon Homme/3.jpeg" alt=""/>
                        </a>
                    </div>
                </section>
   
                <div>
                    <select>
                    <option disabled="off">Color</option>
                    <option>Rojo</option>
                    <option>Negro</option>
                    <option>Azul</option>
                </select>
                    
                    <select>
                        <option disabled="">Talla</option>
                        <option>42 S</option>
                        <option>44 M</option>
                        <option>46 l</option>
                        <option>48 XL</option>
                    </select>
                </div>

                    <div>
                        <input type="button" value="Guardar" onclick="myFunction()"/>
                        <input type="submit" value="Comprar"> 
                    </div>
              
            </form>
            
     
        </div>
      


  

      


    </body>
</html>
