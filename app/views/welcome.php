<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation | Welcome</title>
    <link rel="stylesheet" href="assets/css/foundation.css" />
     <link rel="stylesheet" href="assets/css/estilo.css" />
    <script src="assets/js/vendor/modernizr.js"></script>
  </head>
  <body>
    
    <div class="row padding borde-bot">
      	<div class="small-4 large-4  columns qs">Quienes somos</div>
      	<div class="small-4 large-4 columns  borde-izquierda qs">Cont&aacute;ctenos</div>
      	<div class="small-4 borde-izquierda columns">	
      		<div class="row">
      			<div class="small-6 large-6 columns " ><a class="fb"  href="#"></a></div>
      			<div class="small-6 large-6  columns " ><a class="tw"  href="#"></a></div>
      		</div>
     	</div>	
    </div>



    <div class="orbit-container">
      <ul data-orbit class="example-orbit orbit-slides-container">
        <li>
          <img src="assets/img/irlanda2.jpg" alt="slide 1" />
          <div class="orbit-caption">
            Caption One.
          </div>
        </li>
        <li class="active">
          <img src="assets/img/irlanda.jpg" alt="slide 1" />
          <div class="orbit-caption">
            Caption Two.
          </div>
        </li>
        <li>
          <img src="assets/img/irlanda3.jpg" alt="slide 1" />
          <div class="orbit-caption">
            Caption Three.
          </div>
        </li>
      </ul>

      <!-- Navigation Arrows -->
      <a href="#" class="orbit-prev">Prev <span></span></a>
      <a href="#" class="orbit-next">Next <span></span></a>

      <!-- Slide Numbers -->
      <div class="orbit-slide-number">
        <span>1</span> of <span>3</span>
      </div>

      <!-- Timer and Play/Pause Button -->
      <div class="orbit-timer">
        <span></span>
        <div class="orbit-progress"></div>
      </div>
    </div>

    <!-- Bullets -->
    <ol class="orbit-bullets">
      <li data-orbit-slide-number="1"></li>
      <li data-orbit-slide-number="2" class="active"></li>
      <li data-orbit-slide-number="3"></li>
    </ol>

        
    <script src="assets/js/vendor/jquery.js"></script>
    <script src="assets/js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
