
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===========================
    THEME INFO
    =========================== -->
    <meta name="description" content="Obtén ingreso desde internet, a través de esta gran oportunidad que te ofrece la empresa Goarbit, Hasta 200% de tu capital invertido.">
    <meta name="keywords" content="GoarbitInfo, GoArbit, Goarbithn, Ganar En Internet, GanarGratis, ganar en goarbit,ganar goarbit">
    <meta name="author" content="Cybertron Inc.">

    <meta name="google-site-verification" content="E50qhYWfwlxLOLstUlCn6RbEdbe5AdfnXvtJ9GALjaU" />

    <!-- DEVEOPER'S NOTE:
    This is a free Bootstrap powered HTML template from EvenFly. Feel free to download, modify and use it for yourself or your clients as long there is no money involved.
    
    Please don't try to sale it from anywhere; because I want it to be free, forever. If you sale it, That's me who deserves the money, not you :)
    -->

    <!-- ===========================
    SITE TITLE
    =========================== -->
    <title>Auditoria|Interna</title>
    <!-- This is what you see on your browser tab-->

    <!-- ===========================
    FAVICONS
    =========================== -->
    <link rel="icon" href="img/logo.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-ipad-retina.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-iphone-retina.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-ipad.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-iphone.png" />

    <!-- ===========================
    STYLESHEETS
    =========================== -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="index/css/preloader.css">
    <link rel="stylesheet" href="index/css/style.css">
    <link rel="stylesheet" href="index/css/responsive.css">
    <link rel="stylesheet" href="index/css/animate.css">
    <link rel="stylesheet" href="index/css/navbar.css">

    

    <!-- ===========================
    ICONS: 
    =========================== -->
    <link rel="stylesheet" href="index/css/simple-line-icons.css">

    <!-- ===========================
    GOOGLE FONTS
    =========================== -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Antic|Raleway:300">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- ===========================
    GOOGLE ANALYTICS (Optional)
    =========================== -->

    <!--Replace this line with your analytics code-->
    
    <!-- Analytics end-->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4914995162396344"
     crossorigin="anonymous"></script>

</head>

<body data-spy="scroll">
    <div class="container herocontent">
    
        <h4 class="wow fadeInDown" data-wow-duration="3s"><strong>Hola, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Bienvenid@ al sistema de auditoria interna.</strong></h4> 
    </div>

    <header>
        <!-- ===========================
        HERO AREA
        =========================== -->
        <div id="hero">
            <div class="container herocontent">
                <!--<h2 class="wow fadeInUp" data-wow-duration="2s">GoArbit</h2>-->
                 <div class="logo">
                <img src="index/img/logo.png" alt="">
                </div>

                <h3 class="wow fadeInDown" data-wow-duration="3s"><strong>Bienvenido a conocer que es auditoria interna en un entorno empresarial</strong></h3>
                <h4 class="wow fadeInDown" data-wow-duration="3s"><strong>Opten el conocimiento necesario para desarrollar una auditoria eficaz</strong></h4>
            </div>

            <!-- Featured image on the Hero area -->
            <!--<img class="heroshot wow bounceInUp" data-wow-duration="4s" src="img/hero-img.png" alt="Featured Work">-->
                        <!-- 2ND TESTIMONIAL ITEM -->
            <div class="col-md-12 wow bounceIn" data-wow-duration="3s">
                <div class="clientsphoto0">
                    <!--<img src="img/bill.jpg" alt="Bill">-->
                </div>

                <div class="quote0">
                    <blockquote>

                    <section class="awSlider">
                <div  class="carousel slide" data-ride="carousel">
                 <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target=".carousel" data-slide-to="0" class="active"></li>
                  <li data-target=".carousel" data-slide-to="1"></li>
                  <li data-target=".carousel" data-slide-to="2"></li>
                  <li data-target=".carousel" data-slide-to="3"></li>
                  <li data-target=".carousel" data-slide-to="4"></li>
                  <li data-target=".carousel" data-slide-to="5"></li>
                  <li data-target=".carousel" data-slide-to="6"></li>
                  <li data-target=".carousel" data-slide-to="7"></li>
                  <li data-target=".carousel" data-slide-to="8"></li>
                  <li data-target=".carousel" data-slide-to="9"></li>
                  <li data-target=".carousel" data-slide-to="10"></li>


                  
             </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                  <div class="item active">
                    <img src="index/carousel0/0.png">
                    <div class="carousel-caption"></div>
                  </div>
                  <div class="item">
                    <img src="index/carousel0/1.png">
                    <div class="carousel-caption"></div>
                  </div>
                  <div class="item">
                    <img src="index/carousel0/2.png">
                    <div class="carousel-caption"></div>
                  </div>
                  <div class="item">
                    <img src="index/carousel0/3.png">
                    <div class="carousel-caption"></div>
                  </div>
                  <div class="item">
                    <img src="index/carousel0/4.png">
                    <div class="carousel-caption"></div>
                  </div>
                  <div class="item">
                    <img src="index/carousel0/5.png">
                    <div class="carousel-caption"></div>
                  </div>
                  <div class="item">
                    <img src="index/carousel0/6.png">
                    <div class="carousel-caption"></div>
                  </div>
                  <div class="item">
                    <img src="index/carousel0/7.png">
                    <div class="carousel-caption"></div>
                  </div>
                  <div class="item">
                    <img src="index/carousel0/8.png">
                    <div class="carousel-caption"></div>
                  </div>
                  <div class="item">
                    <img src="index/carousel0/9.png">
                    <div class="carousel-caption"></div>
                  </div>
                  <div class="item">
                    <img src="index/carousel0/10.png">
                    <div class="carousel-caption"></div>
                  </div>

                  
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href=".carousel" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">left</span>
                </a>
                <a class="right carousel-control" href=".carousel" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">raight</span>
                </a>
              </div>
        </section>
                    </blockquote>
                    <h5></h5>
                    <p></p>
                </div>

            </div>
        </div>
        <!--HERO AREA END-->

        <!-- ===========================
         NAVBAR START
         =========================== -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                           <span class="sr-only">Toggle navigation</span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                        </button>

                    <a class="navbar-brand" href="#hero">
                        <!--<span class="brandicon icon-grid"></span>-->
                        <img src="index/img/logo1.png" alt="">
                        <!--<span class="brandname">GoArbit</span>-->
                    </a>
                </div>

                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <!--YOUR NAVIGATION ITEMS STRAT BELOW-->
                        <li><a href="#about"><span class="glyphicon glyphicon-question-sign"></span> Que es Audiria</a></li>
                        <li><a href="#services"><span class="glyphicon glyphicon-usd"></span>  Como reducir Gastos</a></li>
                        <li><a href="#portfolio"><span class="glyphicon glyphicon-ok-sign"></span> Como aplico una auditoria</a></li>
                        <li><a href="#testimonials"><span class="glyphicon glyphicon-plus"></span> Informacion Util</a></li>
                        <!--<li><a href="#"><span class="glyphicon glyphicon-hand-right "></span> Otros</a></li>-->
                        
                        <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-hand-right"></span> Otros <span class="caret"></span></a>
                      <ul class="dropdown-menu">

                        <li><a href="errores.php">Errores<span class="icon-dot-single"></span></a></li>
                        <li><a href="revisados.php">Revisados<span class="icon-dot-single"></span></a></li>
                        <li><a href="perfil.php">Perfil<span class="icon-dot-single"></span></a></li>
                        <li><a href="reset-password.php">Cambiar contraseña<span class="icon-dot-single"></span></a></li>
                        <li><a href="logout.php">Cerrar Sesion<span class="icon-dot-single"></span></a></li>
                        <!--<li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>-->
                      </ul>
                    </li>

                        <!--don't forget to replace the email address below with yours-->
                        <!--<li><a href="mailto:you@yourmail.com"><span class="btnicon icon-envelope-open"></span>Contact</a></li>
                        <li class="active"><a href=""><span class="btnicon icon-cloud-download"></span>Download CV</a></li>-->
                    </ul>

                </div>
                <!--.nav-collapse -->
            </div>
        </nav>
        <!--navbar end-->
    </header>
    <!--header end-->

    <!-- ABOUT SECTION END -->
        <div id="about" class="container">
        <div class="sectionhead wow bounceInUp" data-wow-duration="2s">
            <!--<span class="bigicon icon-bubbles"></span>-->
            <!--<h3>GoArbit</h3>-->
                <div class="logo">
                <li><a href=""><img src="index/img/logo.png" alt=""></a></li>
               </div>
            <!--<h4>Expedita nobis natus doloribus blanditiis quos, atque voluptatem, veritatis soluta eveniet ea!</h4>-->
            <hr class="separetor">
        </div>
        <!-- TESTIMONIAL SECTIONHEAD END -->

        <!-- TESTIMONIAL ITEMS START -->
        <div class="row">
            <!-- 1ST TESTIMONIAL ITEM -->
            <div class="col-md-6 wow bounceIn" data-wow-duration="2s">
                <div class="clientsphoto">
                    <!--<img src="img/dan.jpg" alt="Dan">-->
                </div>

                <div class="quote">
                    <blockquote>
                        <strong></strong><p>¿Que es auditoria interna?</p></strong>
                        <h4><p>La auditoría interna es una de las principales herramientas,<strong>para detectar fallas en los procesos cuando aún están en una etapa inicial.</strong> Por lo tanto, es importante que forme parte de la rutina de la institución y se utilice</strong> para prevenir problemas potenciales que puedan afectar su<br><strong>funcionamiento y resultados.</strong></p></h4>
                    </blockquote>

                    <h5></h5>
                    <p></p>
                </div>
            </div>
            <!-- 1ST TESTIMONIAL ITEM END -->

            <!-- 2ND TESTIMONIAL ITEM -->
            <div class="col-md-6 wow bounceIn" data-wow-duration="3s">
                <div class="clientsphoto">
                    <!--<img src="img/bill.jpg" alt="Bill">-->
                </div>

                <div class="quote">
                    <blockquote>
                        <strong><p>¿Cuál es el objetivo de la auditoria interna?</p></strong>
                        <p>El objetivo de una auditoría interna es evaluar en detalle los procesos de una organización, <strong>criterios establecidos por la empresa.</strong> . <br>Esta evaluación ayuda a determinar qué procesos funcionan según lo esperado y cuáles deben modificarse o incluso eliminarse.</strong>.</p>
                    </blockquote>
                    <div></div>

                    <br>
                    
                    <h5></h5>
                    <p></p>
                </div>
            </div>


        </div>
                <div class="myapps row">
                <h5><font color="white">Nuestras Redes Sociales:</font></h5>

                <ul>
                    <!-- FAVORITE APP ICONS START -->
                    <a href="https://www.instagram.com/cybertrhon/"><li><img src="https://img.icons8.com/nolan/128/instagram-new.png"/></li></a>
                     <a href="https://twitter.com/cybertron87"><li><img src="https://img.icons8.com/nolan/96/twitter-squared.png"/></li></a>
                    <a href="https://www.facebook.com/cybert.tron"><li><img src="https://img.icons8.com/nolan/128/facebook.png"/></li></a>
                    <a href="http://tiktok.com/@elflacoese04"><li><img src="https://img.icons8.com/nolan/128/tiktok.png"/></li></a>
                    <a href="https://www.youtube.com/user/elbin0421"><li><img src="https://img.icons8.com/nolan/128/youtube-play.png"/></li></a>
                    <a href="https://wa.me/18327708424"><li><img src="https://img.icons8.com/nolan/128/whatsapp.png"/></li></a>
                    <a href="https://t.me/GoarbitInfo"><li><img src="https://img.icons8.com/nolan/128/telegram-app.png"/></li></a>
            <!-- 2ND TESTIMONIAL ITEM END -->
            <a class="btn btn-default wow fadeInUp" href="" role="button">
            <span class="btnicon icon-social-dribbble"></span>
            <span class="button_text"><strong>Contratar servicio</strong></span>
            </a>
                </ul>
                <!-- FAVORITE APP ICONS END -->
            </div>
    </div>
    <!--=======about2=====-->
     <div id="about1" class="container">
        <div class="sectionhead wow bounceInUp" data-wow-duration="2s">
            <!--<span class="bigicon icon-bubbles"></span>-->
            <li><a href=""><img src="index/img/logo.png" alt=""></a></li>
            <h3></h3>
            <!--<h4>Expedita nobis natus doloribus blanditiis quos, atque voluptatem, veritatis soluta eveniet ea!</h4>-->
            <hr class="separetor">
        </div>
        <!-- TESTIMONIAL SECTIONHEAD END -->

        <!-- TESTIMONIAL ITEMS START -->
        <div class="row">
            <!-- 1ST TESTIMONIAL ITEM -->
            <div class="col-md-6 wow bounceIn" data-wow-duration="2s">
                <div class="clientsphoto">
                    <!--<img src="img/dan.jpg" alt="Dan">-->

                </div>

                <div class="quote">
                    <blockquote>
                        <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" width="560" height="420" src="https://www.youtube.com/embed/-qYuaPy8u1o" title="YouTube video player" frameborder="0" frame-radius="50" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </blockquote>
                    <h5></h5>
                    <p></p>
                </div>
            </div>
            <!-- 1ST TESTIMONIAL ITEM END -->

            <!-- 2ND TESTIMONIAL ITEM -->
            <div class="col-md-6 wow bounceIn" data-wow-duration="3s">
                <div class="clientsphoto">
                    <!--<img src="img/bill.jpg" alt="Bill">-->
                </div>

                <div class="quote">
                    <blockquote>

                    <section class="awSlider">
                <div  class="carousel slide" data-ride="carousel">
                 <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target=".carousel" data-slide-to="0" class="active"></li>
                  <li data-target=".carousel" data-slide-to="1"></li>
                  <li data-target=".carousel" data-slide-to="2"></li>
                  <li data-target=".carousel" data-slide-to="3"></li>
                  <li data-target=".carousel" data-slide-to="4"></li>
                  <li data-target=".carousel" data-slide-to="5"></li>
                  <li data-target=".carousel" data-slide-to="6"></li>
                  <li data-target=".carousel" data-slide-to="7"></li>
                  <li data-target=".carousel" data-slide-to="8"></li>                  
             </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                  <div class="item active">
                    <img src="carousel/1.png">
                    <div class="carousel-caption"></div>
                  </div>
                  <div class="item">
                    <img src="carousel/2.png">
                    <div class="carousel-caption"></div>
                  </div>
                  <div class="item">
                    <img src="carousel/3.png">
                    <div class="carousel-caption"></div>
                  </div>
                  <div class="item">
                    <img src="carousel/4.png">
                    <div class="carousel-caption"></div>
                  </div>
                  <div class="item">
                    <img src="carousel/5.png">
                    <div class="carousel-caption"></div>
                  </div>
                  <div class="item">
                    <img src="carousel/6.png">
                    <div class="carousel-caption"></div>
                  </div>
                  <div class="item">
                    <img src="carousel/7.png">
                    <div class="carousel-caption"></div>
                  </div>
                  <div class="item">
                    <img src="carousel/8.png">
                    <div class="carousel-caption"></div>
                  </div>
                  <div class="item">
                    <img src="carousel/9.png">
                    <div class="carousel-caption"></div>
                  </div>
                  
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href=".carousel" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">left</span>
                </a>
                <a class="right carousel-control" href=".carousel" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">raight</span>
                </a>
              </div>
        </section>
                    </blockquote>
                    <h5></h5>
                    <p></p>
                </div>

            </div>
            <!-- 2ND TESTIMONIAL ITEM END -->

        </div>
                        <div class="myapps row">
                <h5><font color="white">Nuestras Redes Sociales:</font></h5>

                <ul>
                    <!-- FAVORITE APP ICONS START -->
                    <a href="https://www.instagram.com/cybertrhon/"><li><img src="https://img.icons8.com/nolan/128/instagram-new.png"/></li></a>
                     <a href="https://twitter.com/cybertron87"><li><img src="https://img.icons8.com/nolan/96/twitter-squared.png"/></li></a>
                    <a href="https://www.facebook.com/cybert.tron"><li><img src="https://img.icons8.com/nolan/128/facebook.png"/></li></a>
                    <a href="http://tiktok.com/@elflacoese04"><li><img src="https://img.icons8.com/nolan/128/tiktok.png"/></li></a>
                    <a href="https://www.youtube.com/user/elbin0421"><li><img src="https://img.icons8.com/nolan/128/youtube-play.png"/></li></a>
                    <a href="https://wa.me/18327708424"><li><img src="https://img.icons8.com/nolan/128/whatsapp.png"/></li></a>
                    <a href="https://t.me/GoarbitInfo"><li><img src="https://img.icons8.com/nolan/128/telegram-app.png"/></li></a>
            <!-- 2ND TESTIMONIAL ITEM END -->
            <a class="btn btn-default wow fadeInUp" href="" role="button">
            <span class="btnicon icon-social-dribbble"></span>
            <span class="button_text"><strong>Contratar servicio</strong></span>
            </a>
                </ul>
                <!-- FAVORITE APP ICONS END -->

            </div>
    </div>

    <hr>
    <!-- SECTION SEPARETOR LINE -->

    <!-- ===========================
    SERVICE SECTION START
    =========================== -->
    <div id="services" class="container">

        <!-- SERVICE SECTION HEADING START -->
        <div class="sectionhead  row wow fadeInUp">
            <!--<span class="bigicon icon-cup "></span>-->
            <li><a href=""><img src="index/img/logo.png" alt=""></a></li>
            <h3>Auditori Interna vs Externa</h3>
            <hr class="separetor">
        </div>
        <!--SERVICE SECTION HEADING END-->

        <!-- SERVICE ITEMS START -->
        <div class="row">
            <div align="left" class="col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="3s">
                <img src="index/img/s1.png" alt="">
                <h3>Auditoria Ineterna</h3>
                <p><ul><li>La auditoría <strong>interna</strong>.</li>
                    <li>es una actividad autónoma<strong> que depende</strong> únicamente <strong>de la organización</strong> y se utiliza</li>
                    <li>para el<strong> </strong>  <strong> 3</strong> </li>
                    <li>control interno.<strong></strong>.</li>
                    <li></li></ul> </p>
            </div>
            <!-- ITEM END -->

            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="3s">
                <img src="index/img/s2.png" alt="">
                <!--<h4>Android App Design</h4>
                <p>Grinder affogato, dark, sweet carajillo, flavour seasonal aroma single origin cream. Percolator. Eligendi impedit dolores nulla.</p>-->
            </div>
            <!-- ITEM END -->

            <div align="left" class="col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="3s">
                <img src="index/img/s3.png" alt="">
                <h3>Auditoria Externa</h3>
                <p><font color="white">Por otro lado, la auditoría externa no tiene vínculo</font></p>
                <p><ul><li>con la institución auditada y es realizada por profesionales <strong></strong>  <strong></strong> </li>
                    <li> <strong></strong> <strong></strong></li>
                    <li>independientes. <strong></strong></li>
                    <li><strong></strong> <strong></strong></li>
                    <li>Sirve para dar credibilidad a la marca y obtener diversas certificaciones, <strong></strong></li>
                    <li>como el informe de auditoría interna ISO 9001, por ejemplo.</li>
                </ul> </p>
                <div></div>
            </div>
            <!-- ITEM END -->

            <div align="left" class="col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="3s">
                <!--<img src="img/s4.png" alt="">-->
                <h4>Beneficios de la auditoria interna </h4>
                <p><ul><li>Identifica fallas aún en la fase inicial;</li>
                    <li>Señala procesos y actividades que necesitan mejoras;</li>
                    <li>Permite que la gestión tenga control sobre los procesos;</li>
                    <li>Prepara a la organización para auditorías externas para disminuir la posibilidad de fracaso en las certificaciones nacionales e internacionales; <strong></strong>.</li>
                    <li>Proporciona transparencia en todos los sectores auditados;<strong></strong> </li>
                    <li>Fortalece la cultura de mejora continua;<strong></strong></li>
                    <li><strong></strong></li>
                    <li>Promueve la satisfacción de los empleados e inversores, permitiendo que la empresa crezca rápidamente. </li>
                    <li><strong></strong><strong></strong></li>
                    <li></li>
                    <!--<li>Puede Cancelar su contrato cuando usted quiera.</li></ul></p>-->
            </div>
            <!-- ITEM END -->

            <!--<div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="3s">
                <img src="img/s5.png" alt="">
                <h4>Brand Identity Design</h4>
                <p>Grinder affogato, dark, sweet carajillo, flavour seasonal aroma single origin cream. Percolator. Eligendi impedit dolores nulla.</p>
            </div>-->
            <!-- ITEM END -->

            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="3s">
                <!--<img src="img/s6.png" alt="">-->
                <img clas ="zoom"src="" alt="">
                <h4></h4>
                <p></p>
            </div>
            <!-- ITEM END -->
        </div>
        <!-- SERVICE ITEMS END-->
    </div>
   
     <div id="portfolio" class="container">
        <div class="sectionhead wow bounceInUp" data-wow-duration="2s">
            <!--<span class="bigicon icon-bubbles"></span>-->
            <li><a href=""><img src="index/img/logo.png" alt=""></a></li>
            <h3><font color="white">¡Esta es tu mejor oportunidad de mejorar tu empresa!</font></h3>
            <h4></h4>
            <hr class="separetor">
        </div>
        <!-- TESTIMONIAL SECTIONHEAD END -->

        <!-- TESTIMONIAL ITEMS START -->
        <div class="row">
            <!-- 1ST TESTIMONIAL ITEM -->
            <div class="col-md-6 wow bounceIn" data-wow-duration="2s">
                <div class="clientsphoto">
                    <!--<img src="img/dan.jpg" alt="Dan">-->
                </div>

                <div class="quote">
                    <blockquote>
                    <h4>¿Como implementar una auditoria interna?</h4>
                    <p><ul><li>1. Planificación<strong> 2. Informe a tu equipo&nbsp;3. Elabora un cronograma 4. Crea un checklist 5. Elabora el informe</strong>.</li>
                    <br>
                    <div class="embed-responsive embed-responsive-16by9">
                    <p><iframe width="560" height="315" src="https://www.youtube.com/embed/BDI_iH3hPXk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></p></div>
                    
                    </blockquote>
                    <h5></h5>
                    <p></p>
                </div>
            </div>
            <!-- 1ST TESTIMONIAL ITEM END -->

            <!-- 2ND TESTIMONIAL ITEM -->
            <div class="col-md-6 wow bounceIn" data-wow-duration="3s">
                <div class="clientsphoto">
                    <!--<img src="img/bill.jpg" alt="Bill">-->
                </div>

                <div align="left" class="quote">
                    <blockquote>
                    <li>Pasos para implementar una auditoria interna</li>
                    <li>1. Planificación</li>
                    <li>2. Informe a tu equipo</li>
                    <li>3. Elabora un cronograma</li>
                    <li>4. Crea un checklist</li>
                    <li>5. Elabora el informe</li></ul></p>
                    </blockquote>



                    <h5></h5>
                    <p></p>
                </div>
            </div>
            <!-- 2ND TESTIMONIAL ITEM END -->
        </div>
    </div>

    <!-- ===========================
    TESTIMONIAL SECTION START
    =========================== -->
    <div id="testimonials" class="container">
        <div class="sectionhead wow bounceInUp" data-wow-duration="2s">
            <!--<span class="bigicon icon-bubbles"></span>-->
            <li><a href=""><img src="index/img/logo.png" alt=""></a></li>
            <h3><font color="white">Informacion util para auditoria interna</font></h3>
            <h4></h4>
            <hr class="separetor">
        </div>
        <!-- TESTIMONIAL SECTIONHEAD END -->

        <!-- TESTIMONIAL ITEMS START -->
        <div class="row">
            <!-- 1ST TESTIMONIAL ITEM -->
            <div class="col-md-6 wow bounceIn" data-wow-duration="2s">
                <div class="clientsphoto">
                    <!--<img src="img/dan.jpg" alt="Dan">-->
                </div>

                <div class="quote">
                    <blockquote>
                        <p><iframe width="560" height="315" src="https://www.youtube.com/embed/i6pwCBrmN8Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></p>
                    </blockquote>
                    <h5>Fundamentos de Auditoria Interna</h5>
                    <p></p>
                </div>
            </div>
            <!-- 1ST TESTIMONIAL ITEM END -->

            <!-- 2ND TESTIMONIAL ITEM -->
            <div class="col-md-6 wow bounceIn" data-wow-duration="3s">
                <div class="clientsphoto">
                    <!--<img src="img/bill.jpg" alt="Bill">-->
                </div>

                <div class="quote">
                    <blockquote>
                        <p><iframe width="560" height="315" src="https://www.youtube.com/embed/xtJqJPJI2C4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></p>
                    </blockquote>
                    <h5>Informe de auditoria</h5>
                    <p></p>
                </div>
            </div>
            <!-- 2ND TESTIMONIAL ITEM END -->

            <!-- 3RD TESTIMONIAL ITEM -->
            <div class="col-md-6 wow bounceIn" data-wow-duration="3s">
                <div class="clientsphoto">
                    <!--<img src="img/eric.png" alt="Eric">-->
                </div>

                <div class="quote">
                    <blockquote>
                        <p><iframe width="560" height="315" src="https://www.youtube.com/embed/vIHubXQ0JP4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></p>
                    </blockquote>
                    <h5>Redaccion de hallasgos</h5>
                    <p></p>
                </div>
            </div>
            <!-- 3RD TESTIMONIAL ITEM END -->

            <!-- 4TH TESTIMONIAL ITEM -->
            <div class="col-md-6 wow bounceIn" data-wow-duration="2s">
                <div class="clientsphoto">
                    <!--<img src="img/ramil.jpg" alt="Ramil">-->
                </div>

                <div class="quote">
                    <blockquote>
                        <p><iframe width="560" height="315" src="https://www.youtube.com/embed/i6pwCBrmN8Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></p>
                    </blockquote>
                    <h5>Principios generales de auditoria</h5>
                    <p></p>
                </div>
                
            </div>
            <!-- 4TH TESTIMONIAL ITEM END -->
        </div>
    </div>
    <!-- TESTIMONIAL SECTION END -->

    <!-- ===========================
    FOOTER START
    =========================== -->
    <footer> 
        <div class="container">
            <!--<span class="bigicon icon-speedometer "></span>-->
            <!--<li><a href="https://goarbit.com/auth/register?c=55895344"><img src="img/logo.png" alt=""></a></li>-->

            <div class="footerlinks">
                <!-- FOOTER LINKS START -->
                <ul>
                    <li><a href="#hero">Inicio</a></li>
                    <li><a href="#about">Como reducir gastos </a></li>
                    <li><a href="#services">Como apico una auditoria</a></li>
                    <li><a href="#portfolio">Como aplico una auditoria</a></li>
                    <li><a href="#testimonials">Informacion Util</a></li>

                    <!--replace the email address below with your email address-->
                    <li><a href="mailto:elbin0421@gmail.com">Consultas</a></li>
                </ul>
            </div>
            <!-- FOOTER LINKS END -->

            <div class="copyright">
                <!-- FOOTER COPYRIGHT START -->
                <font color="white"><a href="#">exclusiva para informacion de </a><a href=""><img src="index/img/logo1.png" alt=""></a>.</font>
                    <p><font color="white">Contenido bajo licencia de &copy;   Cybertron inc.</font>
                        <!--===========reloj=========-->
                    <div id="reloj" style="font-size:14px; color: white;"></div></p>

            </div>
            <!-- FOOTER COPYRIGHT END -->


            <div class="footersocial wow fadeInUp" data-wow-duration="3s">
                <!-- FOOTER SOCIAL ICONS START -->
                <ul>
                    <li><a href="https://www.facebook.com/cybert.tron/"><span class="icon-social-facebook"></span></a></li>
                    <li><a href="https://twitter.com/cybertron87/"><span class="icon-social-twitter"></span></a></li>
                    <li><a href="#"><span class="icon-social-youtube"></span></a></li>
                    <li><a href="#"><span class="icon-social-dribbble"></span></a></li>
                    <li><a href="#"><span class="icon-social-tumblr"></span></a></li>
                </ul>
            </div>
            <!-- FOOTER SOCIAL ICONS END -->

        </div>
        <!--=====-->
<!-- Messenger Plugin de chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin de chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>
<!--=====-->

 

    </footer>
    <!-- FOOTER END -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

    <!--Other necessary scripts-->
    <script src="index/js/jquery.nicescroll.min.js"></script>
    <script src="index/js/jribbble.min.js"></script>
    <script src="index/js/drifolio.js"></script>
    <script src="index/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
</body>

</html>