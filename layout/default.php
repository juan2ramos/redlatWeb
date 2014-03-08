<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html lang="es">
    <head> 

        <title><?php echo $title ?></title>

        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="author" content="juan2ramos" />       
        <meta name="description" content="Redlat" />       
        <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1" />

        <link rel="shortcut icon" href="./favicon.ico" />
        <script src="js/prefixfree.min.js"></script>
        <!-- Estilos -->

        <link rel="stylesheet" href="css/normalize.css" />
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/style.css" />        


        
    </head>
    <body>
        <header>
            <figure id="logo">
                <img src="images/logo-redlat.svg" alt="Logo Redlat">
            </figure>
            <nav>
                <ul>
                    <li><a href="que-es"><span>...</span>¿que es?</a></li>
                    <li><a href="historia"><span>...</span>historia</a></li>
                    <li><a href="proyectos"><span>...</span>proyectos</a></li>
                    <li><a href="equipo"><span>...</span>equipo<br>de trabajo</a></li>
                    <li><a href="contacto"><span>...</span>contacto</a></li>
                </ul>
            </nav>
        </header>
        <section id="banner">
            <div class="carousel">
                <div class="slider slider-reservas" id="">
                  <ul class="slides">
                   
                      <li>
                        <span class="caption">
                          <img src="images/slide/banner1.jpg">
                          
                        </span>
                      </li>
                      <li>
                        <span class="caption">
                          <img src="images/slide/banner2.jpg">
                          
                        </span>
                      </li>   
                      <li>
                        <span class="caption">
                          <img src="images/slide/banner3.jpg">
                          
                        </span>
                      </li>                  
                  </ul>
                </div>
            </div>
        </section>
        
        <?php include $fileName; ?>
        <section id="social">
            <ul>
                <li><div class="arrow-prev"></div></li>
                <li><a href=""><img src="images/facebook.svg" alt=""></a></li>
                <li><a href=""><img src="images/twitter.svg" alt=""></a></li>
                <li><a href=""><img src="images/flicker.svg" alt=""></a></li>
                <li><a href=""><img src="images/youtube.svg" alt=""></a></li>
                <li><a href=""><img src="images/instagram.svg" alt=""></a></li>
                <li><div class="arrow-next"></div></li>
            </ul>
        </section>
        <footer>
            <ul id="nav-footer">       
                    <li><a href="que-es"><span>...</span>¿que es?</a></li>
                    <li><a href="historia"><span>...</span>historia</a></li>
                    <li><a href="proyectos"><span>...</span>proyectos</a></li>
                    <li><a href="equipo"><span>...</span>equipo<br>de trabajo</a></li>
                    <li><a href="contacto"><span>...</span>contacto</a></li>        
            </ul>
        </footer>
        <!-- JavaScript -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
    <script src="js/script.js"></script>
    </body>
</html>