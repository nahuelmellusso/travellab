<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Travel-lab</title>

    <link rel="stylesheet" type="text/css" href="assets/css/foundation.css" />
     <link rel="stylesheet" type="text/css" media="screen"  href="assets/css/estilo.css" />
     <link rel="stylesheet" type="text/css" media="screen"  href="assets/css/estilo-med.css" />
     <link rel="stylesheet" type="text/css" media="screen"  href="assets/css/estilo-large.css" />
     <link rel="stylesheet" type="text/css" href="assets/css/demo.css" />
     <link rel="stylesheet" type="text/css"  href="assets/css/style.css" />

    <script src="assets/js/vendor/modernizr.js"></script>
    <script src="assets/js/modernizr.custom.63321.js"></script>
   


  </head>
  <body>
    
    
  
   <div class="row">
       <div  id="qs" class="small-4 medium-8 medium-offset-1 large-8 large-offset-1 borde-bt columns"><a href="quienes">Quienes somos</a></div>
       <div class="small-4 medium-1 large-1 columns borde-bt contct borde-izquierda qs"><a href="contacto">Cont&aacute;ctenos</a></div>
       <div class="small-4 medium-1 medium-pull-1 large-1 large-pull-1 borde-bt borde-izquierda columns">  
         <div class="row">
           <div class="small-6 medium-6 large-6 columns " ><a href="http://www.facebook.com/travellabmdp" target="_blank" class="fb"  ></a></div>
           <div class="small-6 medium-6 large-6  columns " ><a  href="http://www.twitter.com/TravellabMdq" target="_blank" class="tw" ></a></div>
         </div>
     </div>  
   </div>

    <div class="row">
    	<div class="small-12 medium-12 large-12 columns ">
    		<a href="home"><img class="marg-logo" data-interchange="([../public/assets/img/travel-logo.png, (default)], [../public/assets/img/travel-logo.png, (small)], [../public/assets/img/travel-logo.png, (medium)]"></a>
    	</div>
    </div>

    <div class="row">
      <div class="medium-11 large-11 columns menu-inicio">
        <div class="row">
          <div class="medium-1  medium-offset-4  large-1 large-offset-4 columns">
            <a class="miabl active" href="">Inicio</a>
          </div>
          <div class="medium-1 large-1 columns">
            <a class="miabl" href="">Destinos</a>
          </div>
          <div class="medium-1 large-1 columns">
            <a class="miabl" href="">Bodas</a>
          </div>
          <div class="medium-1 large-1 columns">
            <a class="miabl" href="">Seguros</a>
          </div>
          <div class="medium-2 large-2 columns">
            <a class="miabl-l " href="">Medios de pago</a>
          </div>
          
        </div>
      </div>
    </div>

    <div class="row marg-barra">
      <div class="small-12 medium-3 medium-offset-1 large-3 large-offset-1 columns menu">
        <div class="row collapse">
            <div class="small-2 small-offset-1 medium-2 large-2 columns">
              <label class="menu-label">¿D&oacute;nde?</label>
            </div>
            <div class="small-6 medium-6 large-6 columns">             
              <input type="text"  placeholder="Ingresa un destino">
            </div>
            <div class="small-2 small-pull-1 medium-2 large-2  columns put">                
            </div>
        </div>
      </div>


      <div class="small-12 medium-3 large-3 columns menu">
        <div class="row collapse">
          <div class="small-2 medium-2 large-2 small-offset-1 columns">
            <label class="menu-label">¿Cuando?</label>
          </div>
          <div class="small-3 medium-3 large-3 columns">             
            <input type="date"  placeholder="Ingresa un destino">
          </div>
          <div class="small-3 medium-3 large-3 columns">             
            <input type="date"  placeholder="Ingresa un destino">
          </div>
          <div class="small-2 medium-2 small-pull-1 large-3 columns cal">                
        </div>
      </div>
    </div>

     <div class="small-12 medium-3 large-3 columns menu">
        <div class="row collapse">
          <div class="small-2 small-offset-1 medium-2 large-2 columns">
            <label class="menu-label">¿Precio?</label>
          </div>
          <div class="small-3 medium-3 large-3 columns">             
            <input type="text"  placeholder="Ingresa un destino">
          </div>
          <div class="small-3 medium-3 large-3 columns">             
            <input type="text"  placeholder="Ingresa un destino">
          </div>
          <div class="small-2 small-pull-1 medium-3 large-3 columns pre">                
        </div>
      </div>
    </div>

    <div class="small-12 medium-1 medium-pull-1 large-1 large-pull-1 columns  menu">
      <div class="row">
        <div class="small-6 medium-12 large-12 small-centered pad-menu columns">
          <a class="buscar-rojo" role="button" href="">Buscar</a>
        </div>      
      </div>
    </div>


    </div>
     <div class="row">   
      <div id="mi-slider" class="mi-slider medium-12 large-12 columns">
      
          <ul>
            <?php foreach ($paquete as $pack){ ?>
              <li>
                <div class="row">
                  <div class="large-12  columns">
                    <div class="row">
                      <div class="large-12 vineta">
                        <a href="#"><img src="../public/assets/img/irlanda.jpg" alt="img09"></a>
                        <p class="vineta-tit"><?php  $pack->titulo  ?></p>
                        <p class="vineta-tit vineta-tit-marg">Salidas en Agosto</p>
                        <p class="vineta-dia">8 dias / 7 noches</p>
                        <div class="row">
                          <div class="large-8  columns">
                            <p class="vineta-persona">x pers. en base doble</p>
                            <p class="vineta-precio">$Ar3300</p>
                          </div>
                          <div class="large-4  columns ">
                            <a class="vineta-info" href="">+INFO</a>
                          </div>
                          
                        </div>
                        <div class="large-12 vineta-borde-top columns">
                            <p class="vineta-oferta">Esta oferta finaliza en </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
             <?php } ?>   

          </ul>
        


         
           


          <ul>
              <li><a href="#"><img src="../public/assets/img/9.jpg" alt="img09"><h4>Casual</h4></a></li>
              <li><a href="#"><img src="../public/assets/img/10.jpg" alt="img10"><h4>Luxury</h4></a></li>
              <li><a href="#"><img src="../public/assets/img/11.jpg" alt="img11"><h4>Sport</h4></a></li>
          </ul>
            

          <ul>
              <li><a href="#"><img src="../public/assets/img/9.jpg" alt="img09"><h4>Casual</h4></a></li>
              <li><a href="#"><img src="../public/assets/img/10.jpg" alt="img10"><h4>Luxury</h4></a></li>
              <li><a href="#"><img src="../public/assets/img/11.jpg" alt="img11"><h4>Sport</h4></a></li>
          </ul>
        
          <nav>
              <a href="#">OFERTA</a>
              <a href="#">MAS VISTOS</a>
              <a href="#">ECONOMICOS</a>
              
          </nav>
        
        

      </div>
     


    </div>

     <div class="row">

        <div class="small-12 medium-4 large-4 columns reco">
          <p class="rec-tit">RECOMENDAMOS</p>
          <p class="rec-vin marg">Empresas vinculadas</p>
          <ul class="no-bullet">
            <li><a class="naranjos text-centered" href="#"></a></li>
            <li><a class="travel text-centered" href="#"></a></li>
          </ul>
        </div>


        <div class="small-12 medium-4 large-4 columns borde-enlace alt reco ">
               <p class="rec-tit">SECCIONES</p>
                 <div class="row">
                    
                        <div class="small-3 small-offset-2 medium-4 medium-offset-2 large-4 large-offset-2  columns">
                          <ul class="text-center no-bullet seccion-lista">
                            <li><a href="quienes">Quienes somos</a></li>
                            <li><a href="contacto">Contactanos</a></li>
                            <li><a href="#">Ofertas</a></li>
                            <li><a href="#">Destinos</a></li>                     
                          </ul>
                        </div>
                        <div class="small-3 small-pull-2 medium-4 medium-pull-2 large-4 large-pull-2 columns">
                            <ul class="text-center no-bullet seccion-lista">                       
                              <li><a href="#">Info &uacute;til</a></li>
                              <li><a href="#">Beneficios</a></li>
                              <li><a href="#">Hoteles</a></li>                     
                              <li><a href="#">A&eacute;reos</a></li>
                            </ul>
                        </div> 
                                 
                 </div>
           
                 <div class="small-6 small-offset-3 medium-12 medium-offset-0 large-12 large-offset-0 borde-fb-tw-rojo otro-enl columns">
                    <p class="rec-tit">OTROS ENLACES</p>
                      <div class="row">
                          <div class="small-8 small-offset-2 medium-12 medium-offset-0  large-12 large-offset-0 columns">
                            <ul class="text-center no-bullet seccion-lista">                       
                                <li><a href="#">Cambio del d&iacute;a</a></li>
                                <li><a href="#">El clima</a></li>
                            </ul>
                          </div>
                      </div>
                   </div>     
         </div>
       

         <div class="small-12 borde medium-4 large-4 alt reco columns">
              <p class="rec-tit">NEWSLETTER</p>
              <p class="new-ngr">Todas las ofertas en tu casilla de entrada</p>
              <p class="news">Suscribite a nuestro newsletter semanal y<br>
              obten&eacute; las &uacute;ltimas ofertas y novedades</p>
                <div class="row"> 
                  <div class="small-8 medium-8 large-8 columns" style="margin-left:12px;">
                    <input type="email" placeholder="Email">
                  </div>
                  <div class="small-2 medium-2 large-2 rojo small-centered columns">
                    <a href="" role="button" class="rojo boton-rojo">Suscribirme</a>
                  </div>
                  <div class="small-6 medium-8 large-8 small-pull-3 borde-enlace pad-fb-tw-rojo columns">
                    <ul class="text-center no-bullet">
                      <li><a class="fb-rojo" href="#"></a></li>
                      <li><a class="tw-rojo" href="#"></a></li>                      
                    </ul>
                  </div>  
                </div>
          </div>
            <div class="small-12  medium-12 large-12 columns">
              <p class="data-fiscal">2014.TRAVELLAB.Operadores tur&iacute;sticos desde 1989|<span>E.V.Y.T.LEG.10122 DISP.050/99</span></p>
            </div>
      </div> <!-- aca termina el row inicial -->


       <!--  <div class="row">
          <div class="small-12  medium-12  columns">
            <p class="data-fiscal">2014.TRAVELLAB.Operadores tur&iacute;sticos desde 1989|<span>E.V.Y.T.LEG.10122 DISP.050/99</span></p>
          </div>
        </div>
   -->
   
      
     
    <script src="assets/js/vendor/jquery.js"></script>
    <script src="assets/js/vendor/jquery.catslider.js"></script>

    <script src="assets/js/foundation.min.js"></script>
    <script src="assets/js/foundation/foundation.orbit.js"></script>
    
    <script>
      $(function() {

        $( '#mi-slider' ).catslider();

      });
    </script>

     

    <script>
      $(document).foundation();
    </script>
    
  
   

  </body>
</html>
