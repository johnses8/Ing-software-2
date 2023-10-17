<!DOCTYPE html>
<html lang="en">

<head>
    <title>Zay Shop eCommerce HTML CSS Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/templatemo.css">
    <link rel="stylesheet" href="css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="css/fontawesome.min.css">
<!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>

<body onLoad="MM_preloadImages('img/Recurso 2.png')">
    <!-- Start Top Nav -->
 

    <!-- Header -->
<nav class="navbar navbar-expand-lg navbar-light shadow">
  <div class="container d-flex justify-content-between align-items-center">

            <a href="welcome.blade.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('inicio','','img/Recurso 2.png',1)"><img src="img/Recurso 1.png" alt="" width="100" height="75" id="inicio"></a><a class="navbar-brand text-success logo h1 align-self-center" href="welcome.blade.php">
          &nbsp; </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

    <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">Sobre nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/shop">Tienda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contacto&nbsp;</a>
                        </li>
                    </ul>
                </div>
      <div class="navbar align-self-center d-flex">
                <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                            <div class="input-group-text">
                                <i class="fa fa-fw fa-search"></i>
                            </div>
                        </div>
        </div>
                  <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                      <i class="fa fa-fw fa-search text-dark mr-2"></i>
                  </a>
                  <a class="nav-icon position-relative text-decoration-none" href="#">
                      <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                      <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">7</span>
                  </a>
        <a class="nav-icon position-relative text-decoration-none" href="#">
                      <i class="fa fa-fw fa-user text-dark mr-3"></i>
        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">+99</span>
                  </a>
                </div>
            </div>

      </div>
</nav>
    <!-- Close Header -->

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>



    <!-- Start Banner Hero -->
<div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
			<li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="3"></li>
			<li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                      <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                          <img class="img-fluid" src="img/cortadora de cesped.jpg" alt="">
                      </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>&nbsp;</b></h1>
                                <h3 class="h2">CORTADORA DE CÉSPED HONDA HRN216 PKA – DE EMPUJE</h3>
                                <p>
                                  Dispone de sistema de doble cuchillas MICROCUT, que reduce el tamaño del césped cortado a pequeñas piezas.
                              </p>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md10 col-lg-10 order-lg-center">
                            <img src="img/Millenium banner-03-03.jpg" alt="" width="1196" height="600" class="img-fluid">
                        </div>
                      <div class="col-lg-6 mb-0 d-flex align-items-left">
                            <div class="text-align-left">
                                <h1 class="h1"></h1>
                                <h3 class="h2"></h3>
                                <p>     
                              </p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
		  <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-4 order-lg-center">
                            <img class="img-fluid" src="img/ANUNCIO A MAMÁ.jpg" alt="">
                        </div>
                        <div class="col-lg-0 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1"></h1>
                                <h3 class="h2"> </h3>
                                <p>
                                    
                                </p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
		  <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-4 order-lg-last">
                            <img class="img-fluid" src="img/Anuncio 2 usando figura retorica.png" alt="">
                        </div>
                        <div class="col-lg-0 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1"></h1>
                                <h3 class="h2"> </h3>
                                <p>
                                  
                                </p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md- col-lg-4 order-lg-center">
                            <img class="img-fluid" src="img/Imagen de WhatsApp 2023-06-03 a las 20.15.09.jpg" alt="">
                        </div>
                        <div class="col-lg-0 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1"></h1>
                                <h3 class="h2"> </h3>
                                <p>
                                  
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
</div>
    <!-- End Banner Hero -->
	


<!-- Start Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Productos Para el Hogar</h1>
                <p>
                Lo mas escencial y de calidad para el hogar.&nbsp; </p>
          </div>
      </div>
        <div class="row">
            <div class="col-12 col-md-3 p-5 mt-2">
                <a href="#"><img src="img/banner_img_03.jpg" width="800" height="800" class="rounded-circle img-fluid border"></a>
              <h5 class="text-center mt-4 mb-3">Lamparas</h5>
                <p class="text-center"><a class="btn btn-dark" >Go Shop</a></p>
            </div>
            <div class="col-12 col-md-3 p-5 mt-3">
                <a href="#"><img src="img/modern-powerful-cordless-screwdriver-on-white-background-photo.jpg" class="rounded-circle img-fluid border"></a>
              <h2 class="h5 text-center mt-4 mb-3">Taladros&nbsp;</h2>
                <p class="text-center"><a class="btn btn-dark">Go Shop</a></p>
		    </div>
			  <div class="col-12 col-md-3 p-5 mt-3">
                <a href="#"><img src="img/7870152--11423_MED.png" class="rounded-circle img-fluid border"></a>
              <h2 class="h5 text-center mt-3 mb-3">Luces Led</h2>
                <p class="text-center"><a class="btn btn-dark" >Go Shop</a></p>
          </div>
            <div class="col-12 col-md-3 p-5 mt-3">
                <a href="#"><img src="img/Diferencas-entre-ceramica-e-porcelanato.jpg" class="rounded-circle img-fluid border"></a>
              <h2 class="h5 text-center mt-3 mb-3">Ceramicas</h2>
                <p class="text-center"><a class="btn btn-dark">Go Shop</a></p>
            </div>
			<div class="col-12 col-md-3 p-5 mt-3">
                <a href="#"><img src="img/Toilet-PNG-Photo.png" class="rounded-circle img-fluid border"></a>
              <h2 class="h5 text-center mt-3 mb-3">Baño</h2>
                <p class="text-center"><a class="btn btn-dark">Go Shop</a></p>
			</div>
			<div class="col-12 col-md-3 p-5 mt-3">
                <a href="#"><img src="img/Recurso 4.jpg" class="rounded-circle img-fluid border"></a>
              <h2 class="h5 text-center mt-3 mb-3">Pintura</h2>
                <p class="text-center"><a class="btn btn-dark">Go Shop</a></p>
	      </div>
			<div class="col-12 col-md-3 p-5 mt-3">
                <a href="#"><img src="img/e7763980-fdf4-4f83-875f-e23ec547fd5d.jpg" class="rounded-circle img-fluid border"></a>
              <h2 class="h5 text-center mt-3 mb-3">Electrodomesticos</h2>
                <p class="text-center"><a class="btn btn-dark">Go Shop</a></p>
	        </div>
			<div class="col-12 col-md-3 p-5 mt-3">
                <a href="#"><img src="img/JJ-4L.jpg" class="rounded-circle img-fluid border"></a>
              <h2 class="h5 text-center mt-3 mb-3">Jardinería</h2>
                <p class="text-center"><a class="btn btn-dark">Go Shop</a></p>
		  </div>	
      </div>
</section>
    <!-- End Categories of The Month -->
	
	
	
	
	<div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/mZHAgyluZy4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>

<!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Productos Recomendados</h1>
                  <p>&nbsp;</p>
<p>
          Productos destacados elegidos por personas que saben de calidad y durabilidad.&nbsp; &nbsp; </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="img/o298552v54_GKT_18V-52_GC_dyn.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                          <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">$440.00</li>
                          </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">GKT 18V-52 GC</a>
                            <p class="card-text">
                              PROFESSIONAL SIERRA DE INMERSIÓN BITURBO A BATERÍA
                          </p>
                            <p class="text-muted">Reviews (24)</p>
                      </div>
                  </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="kit de herramientas.html">
                        <img src="img/e4a5feb3f7f6483ebdd66911247c925d.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                          <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">$480.00</li>
                          </ul>
                            <a href="kit de herramientas.html" class="h2 text-decoration-none text-dark">Milwaukee M18 CN16GA-202X 18V Li-Ion</a>
                            <p class="card-text">
                              batería Juego de clavadora (2x baterías 2.0Ah) en maletín HD - 32-63 mm - 16 calibre
                          </p>
                            <p class="text-muted">Reviews (48)</p>
                      </div>
                  </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="cortadora de cesped.html">
                        <img src="img/tcSj7Vgk1637090295.png" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">$760.00</li>
                            </ul>
                            <a href="cortadora de cesped.html" class="h2 text-decoration-none text-dark">CORTADORA HRX217VKA</a>
                            <p class="card-text">
                              Cortadora de césped auto propulsada, potenciada con un motor Honda GCV 190 de 6,5 hp, de fácil arranque y bajas emisiones.
                          </p>
                            <p class="text-muted">Reviews (74)</p>
                      </div>
                  </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Featured Product -->


    <!-- Start Footer -->
    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                  <h2 class="h2 text-success border-bottom pb-3 border-light logo">Millenium</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                            123 Consectetur at ligula 10660
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="tel:010-020-0340">010-020-0340</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="mailto:info@company.com">milleniumhomecenter@gmail.com</a>
                        </li>
                    </ul>
                </div>

               
                    </div>
                </div>
        <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class="text-left text-light">
                        Copyright &copy; 2023 Millenium&nbsp;<a rel="sponsored" href="https://templatemo.com" target="_blank">&nbsp;</a></p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->

    <!-- Start Script -->
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/templatemo.js"></script>
<script src="js/custom.js"></script>
    <!-- End Script -->
</body>

</html>