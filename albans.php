<?php
    header('Content-Type: text/html; charset=ISO-8859-1');
?>
<?php

$zip=$_POST["zip"];


if($zip != "25177"){

header("location: eeuu.html");

}


?>


<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IGS USA St Albans - IGS</title>
    <link rel="icon" href="imagenes/cropped-FaviIGS-300x300.png" sizes="192x192"/>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
    
</head>
<body>
    
    <section class="sectionMenuLogo">
        <div class="menuLogo">
            <div class="imgLogo">
                <img loading="lazy" src="imagenes/Logo-IGS-lineal-blanco.png" alt="logo-IGS" loading="lazy" sizes="(max-width: 520px) 100vw, 520px">
            </div>
            <div class="menuNav">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav1" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav1">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#sectionHandymanAssitance">Products</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#sectionAboutIGS">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#sectionCoverage">Why Enroll?</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#sectionCallUs">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </section>
    
    <section class="sectionMenuAssitance">
        <div class="menuAssistance">
            <h5 style="text-align: left;">Your <span style="color: #f37321;">experts</span> in value-add assistance programs</h5>
            <div class="menuNavAssistance">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav2" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav2">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fas fa-phone-alt">&nbsp;</i> (518) 399-4188</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i> Cart</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa-solid fa-user"></i> Login/Register</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa-brands fa-rocketchat"></i> Chat with IGS</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </section>
    
    
    <section class="sectionAlbans">
        <div class="divLogo">
            <hr>
            <h2>St. Albans</h2><br>
            <img loading="lazy" width="250" height="200" src="imagenes/Captura-de-pantalla-2023-11-15-a-las-3.48.02%E2%80%AFp.m..png" alt="" loading="lazy"  sizes="(max-width: 612px) 100vw, 612px">
        </div>
        <div class="imagen">
            <img loading="lazy" width="550" height="400" src="imagenes/Mesa-de-trabajo-1-1-1024x758.png" alt="" loading="lazy"  sizes="(max-width: 800px) 100vw, 800px">
        </div>
    </section>
    
    <section class="sectionPlanes">
        <div class="titulos">
            <div style="width: 30%">
            </div>
            <div>
                <div class="tituloPlan">
                    <h4 class="text-white">Most popular</h4>
                </div>
            </div>
            <div>
                <div class="tituloPlan">
                    <h4 class="text-white">Most popular</h4>
                </div>
            </div>
        </div>
        <div class="divPlanes">
            <div class="plan planIntegral">
                <div class="detallesPlan">
                    <br>
                    <h4 style="color: #F37321"><span style="color: #333333;">Integral</span> Handyman</h4>
                    <br>
                    <ul>
                        <li>
                            <span class="icon">
                                <i aria-hidden="true" class="fas fa-angle-double-right"></i>
                            </span>
                            <span>Emergency locksmith</span>
                        </li>
                        <li>
                            <span class="icon">
                                <i aria-hidden="true" class="fas fa-angle-double-right"></i>
                            </span>
                            <span>Call an expert assistance</span>
                        </li>
                    </ul><br>
                    <div class="divPrecio">
                        <h2>$7.99</h2><p>PER MONTH</p>
                    </div>
                    <p>Provides 2 annual handyman services (2 hours each)</p>
                    <p>Term &amp; Conditions</p><br><br>
                    <a class="text-white buttonEnroll" role="button" href="pay.php?pago=pago1">
                        <i class="fas fa-cart-plus"></i>
                        <span>Enroll now</span>
                    </a>
                </div>
            </div>
            <div class="plan planEnhanced">
                <div class="detallesPlan">
                    <br>
                    <h4 style="color: #F37321"><span style="color: #333333;">Enhanced</span> Handyman</h4>
                    <br>
                    <ul>
                        <li>
                            <span class="icon">
                                <i aria-hidden="true" class="fas fa-angle-double-right"></i>
                            </span>
                            <span>Emergency locksmith</span>
                        </li>
                        <li>
                            <span class="icon">
                                <i aria-hidden="true" class="fas fa-angle-double-right"></i>
                            </span>
                            <span>Emergency glass repair</span>
                        </li>
                        <li>
                            <span class="icon">
                                <i aria-hidden="true" class="fas fa-angle-double-right"></i>
                            </span>
                            <span>Call an expert assistance</span>
                        </li>
                    </ul><br>
                    <div class="divPrecio">
                        <h2>$9.99</h2><p>PER MONTH</p>
                    </div>
                    <p>Provides 2 annual handyman services (2 hours each)</p>
                    <p>Term &amp; Conditions</p><br>
                    <a class="text-white buttonEnroll" role="button" href="pay.php?pago=pago2">
                        <i class="fas fa-cart-plus"></i>
                        <span>Enroll now</span>
                    </a>
                </div>
            </div>
            <div class="plan planPremier">
                <div class="detallesPlan">
                    <br>
                    <h4 style="color: #F37321"><span style="color: #333333;">Premier</span> Handyman</h4>
                    <br>
                    <ul>
                        <li>
                            <span class="icon">
                                <i aria-hidden="true" class="fas fa-angle-double-right"></i>
                            </span>
                            <span>Emergency locksmith</span>
                        </li>
                        <li>
                            <span class="icon">
                                <i aria-hidden="true" class="fas fa-angle-double-right"></i>
                            </span>
                            <span>Emergency glass repair</span>
                        </li>
                        <li>
                            <span class="icon">
                                <i aria-hidden="true" class="fas fa-angle-double-right"></i>
                            </span>
                            <span>Call an expert assistance</span>
                        </li>
                    </ul><br>
                    <div class="divPrecio">
                        <h2>$12.99</h2><p>PER MONTH</p>
                    </div>
                    <p>Provides 3 annual handyman services (3 hours each)</p>
                    <p>Term &amp; Conditions</p><br>
                    <a class="text-white buttonEnroll" role="button" href="pay.php?pago=pago3">
                        <i class="fas fa-cart-plus"></i>
                        <span>Enroll now</span>
                    </a>
                </div>
            </div>
        </div>
    </section><br><br>
    
    <section class="sectionHandymanAssitance" id="sectionHandymanAssitance">
        <div class="divDetalles">
            <h1>Our handyman Assistance Program:</h1><br>
            <p>IGS provides residents with services and expertise to improve and maintain their homes. This peace-of-mind provides confidence in taking a proactive approach to resolving household issues.</p><br>
            <h2>An Expert Hotline</h2><br>
            <ul>
                <li>If you need assistance, our home care experts can help troubleshoot and offer advice where you need it.&nbsp;</li>
                <li>Helping solve with many common issues around your home by phone or virtual appointment.</li>
                <li>Just tell us when you’re available and we’ll make it happen.</li>
            </ul><br>
            
            
            <div id="carouselHandyman" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="col-md-6">
                            <div class="card card-body">
                                <img loading="lazy" src="imagenes/Iconos-USA-10.png" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-6">
                            <div class="card card-body">
                                <img loading="lazy" src="imagenes/Iconos-USA-09.png" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-6">
                            <div class="card card-body">
                                <img loading="lazy" src="imagenes/Iconos-USA-08.png" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-6">
                            <div class="card card-body">
                                <img loading="lazy" src="imagenes/Iconos-USA-07.png" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-6">
                            <div class="card card-body">
                                <img loading="lazy" src="imagenes/Iconos-USA-06.png" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-6">
                            <div class="card card-body">
                                <img loading="lazy" src="imagenes/Iconos-USA-05.png" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-6">
                            <div class="card card-body">
                                <img loading="lazy" src="imagenes/Iconos-USA-04.png" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-6">
                            <div class="card card-body">
                                <img loading="lazy" src="imagenes/Iconos-USA-03.png" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-6">
                            <div class="card card-body">
                                <img loading="lazy" src="imagenes/Iconos-USA-02-1.png" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-6">
                            <div class="card card-body">
                                <img loading="lazy" src="imagenes/Iconos-USA-01.png" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselHandyman" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselHandyman" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselHandyman" data-bs-slide-to="0" class="active" aria-current="true"></button>
                    <button type="button" data-bs-target="#carouselHandyman" data-bs-slide-to="1" ></button>
                    <button type="button" data-bs-target="#carouselHandyman" data-bs-slide-to="2" ></button>
                    <button type="button" data-bs-target="#carouselHandyman" data-bs-slide-to="3" ></button>
                    <button type="button" data-bs-target="#carouselHandyman" data-bs-slide-to="4" ></button>
                    <button type="button" data-bs-target="#carouselHandyman" data-bs-slide-to="5" ></button>
                    <button type="button" data-bs-target="#carouselHandyman" data-bs-slide-to="6" ></button>
                    <button type="button" data-bs-target="#carouselHandyman" data-bs-slide-to="7" ></button>
                    <button type="button" data-bs-target="#carouselHandyman" data-bs-slide-to="8" ></button>
                    <button type="button" data-bs-target="#carouselHandyman" data-bs-slide-to="9" ></button>
                </div>
            </div>
            
        </div>
        <div class="divImagen">
            <img loading="lazy" width="90%" height="80%" src="imagenes/Mesa-de-trabajo-1-copia-5-2-e1700167895685.png" alt="" loading="lazy"  sizes="(max-width: 100%) 100vw, 90%"><br>
            <a class="buttonLearnMore text-white" role="button">
                <span class="elementor-button-text">Learn More</span>
                <span>
				    <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                </span>
            </a>
        </div>
    </section>
    
    <section class="sectionAboutIGS" id="sectionAboutIGS">
        <div class="divImagen">
            <img loading="lazy" width="550" height="500" src="imagenes/Mesa-de-trabajo-1-copia-3-1-e1700167953921.png" alt="" loading="lazy"  sizes="(max-width: 100%) 100vw, 800px">
        </div>
        <div class="divDetalles">
            <h1 class="text-white">About Integral Group Solution</h1><br>
            <p class="text-white">Through affinity partnerships, we provide assistance services to the residents and customers of municipalities, utilities, banks, and insurance companies.</p>
            <p class="text-white">Across 19 countries, IGS provides 2,000 unique programs to over 1,000 partners. We’re proud to have an A rating with the BBB, and a 96% customer satisfaction rating across the company!</p>
        </div>
    </section>
    
    
    <section class="sectionMission">
        <div class="divTitulo">
            <div class="vr"></div>
            <h2 class="elementor-heading-title elementor-size-default">Our Mission</h2>
        </div>
        <div class="divDetalles">
            <p>To provide the best programs &amp; services, with the highest level of customer satisfaction. We are fully committed to the needs of our partners, and their communities.</p>
        </div>
    </section><br><br>
    
    
    <section class="sectionDatos">
        <div class="divDatos">
            <div>
                <h1>20</h1>
                <h4>Countries</h4>
            </div>
            <div class="vr"></div>
            <div>
                <h1>+2,000</h1>
                <h4>Unique Programs</h4>
            </div>
            <div class="vr"></div>
            <div>
                <h1>1,000</h1>
                <h4>Partners</h4>
            </div>
            <div class="vr"></div>
            <div>
                <h1>96%</h1>
                <h4>Customer Satisfaction</h4>
            </div>
        </div>
    </section><br><br>
    
    
    <section class="sectionSteps">
        <div class="divImagenFondo">
        </div>
        <div class="divContenido">
            <h5 style="color: #F37321;">Simple steps to get the help you need</h5><br>
            <h1>How the program works</h1><br>
            <img loading="lazy" src="imagenes/Objeto-inteligente-vectorial1.png" title="" alt="">
            
            <div id="carouselSteps" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselSteps" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselSteps" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselSteps" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img loading="lazy" src="imagenes/1.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img loading="lazy" src="imagenes/1-copia-2.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img loading="lazy" src="imagenes/1-copia.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselSteps" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselSteps" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            
        </div>
        <hr>
        <hr>
    </section>
    
    
    
    <section class="sectionCoverage" id="sectionCoverage">
        <div class="divDetalles">
            <h1>Why get coverage</h1><br>
            <p>Finding a reliable handyman for household jobs can be a daunting task; from the scarcity of skilled professionals to the high demand for their services. Our program alleviates the cost of home repairs & maintenance, is supported by a trusted network of local & licensed contractors, creating a turn-key experience in what can often be an intimidating and stressful experience.</p><br>
            <h2>Did you know?</h2><br>
            <ul>
                <li>
                    <span class="icon">
                        <i aria-hidden="true" class="fas fa-home"></i>
                    </span>
                    <span>81% of homebuyers are hit with a significant, unexpected repair within the first year of ownership.</span>
                </li>
				<li>
				    <span class="icon">
				        <i aria-hidden="true" class="fas fa-percent"></i>
                    </span>
				    <span>Across the United States, essential home maintenance average $6,413 annually.</span>
				</li>
				<li>
				    <span class="icon">
				        <i aria-hidden="true" class="fas fa-key"></i>
                    </span>
				    <span>An overnight locksmith can cost up to $400 depending on the time, lock type, service and trip fees.</span>
				</li>
                <li>
				    <span class="icon">
				        <i aria-hidden="true" class="fas fa-money-bill-wave"></i>
                    </span>
				    <span>Only 63% of employed Americans are unable to cover %500 emergency expense.</span>
				</li>
            </ul><br>
            <p style="text-align: right;"><strong>*SecureSave and BankRate</strong></p>
            
        </div>
        <div class="divImagen">
            <img loading="lazy" width="90%" height="80%" src="imagenes/Mesa-de-trabajo-1-copia-9-e1700167599432.png" alt="" loading="lazy"  sizes="(max-width: 100%) 100vw, 90%"><br>
            <a class="buttonLearnMore text-white" role="button">
                <span class="elementor-button-text">Learn More</span>
                <span>
				    <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                </span>
            </a>
        </div>
    </section><br>
    
    
    
    <section class="sectionCommunity" id="sectionCommunity">
        <div class="divDetalles">
            <br>
            <h1>Give your community<br> peace-of-mind!</h1><br>
            <p>Join the over 1,000 IGS partners across the globe! At IGS, no partner is too big or too small; from small-town municipalities to global financial & insurance institutions, we’re ready to add value and peace-of-mind to the communities & people you support! Learn more about becoming a partner today.</p><br>
        </div>
        <div class="divCarousel">
            
            <div id="carouselCommunity" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="col-md-6">
                            <div class="card card-body">
                                <img loading="lazy" src="imagenes/Captura-de-pantalla-2023-11-15-a-las-3.48.02%E2%80%AFp.m..png" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-6">
                            <div class="card card-body">
                                <img loading="lazy" src="imagenes/Captura-de-pantalla-2023-11-15-a-las-3.48.08%E2%80%AFp.m..png" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-6">
                            <div class="card card-body">
                                <img loading="lazy" src="imagenes/Captura-de-pantalla-2023-11-15-a-las-3.47.39%E2%80%AFp.m..png" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-6">
                            <div class="card card-body">
                                <img loading="lazy" src="imagenes/Captura-de-pantalla-2023-11-15-a-las-3.47.46%E2%80%AFp.m..png" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-6">
                            <div class="card card-body">
                                <img loading="lazy" src="imagenes/Captura-de-pantalla-2023-11-15-a-las-3.47.52%E2%80%AFp.m..png" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-6">
                            <div class="card card-body">
                                <img loading="lazy" src="imagenes/Captura-de-pantalla-2023-11-15-a-las-3.47.56%E2%80%AFp.m..png" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section><br><br><br>
    
    
    
    
    <section class="sectionCertificationsInformationSecurity" id="sectionCertificationsInformationSecurity">
        
        <div class="divCarousel">
            <h1>Certifications</h1><br>
            <div id="carouselCertificationsInformationSecurity" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="col-md-3">
                            <div class="card card-body">
                                <img loading="lazy" src="imagenes/Captura-de-pantalla-2023-11-15-a-las-3.58.12%E2%80%AFp.m..png" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <div class="card card-body">
                                <img loading="lazy" src="imagenes/Captura-de-pantalla-2023-11-15-a-las-3.58.20%E2%80%AFp.m..png" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <div class="card card-body">
                                <img loading="lazy" src="imagenes/Captura-de-pantalla-2023-11-15-a-las-3.58.24%E2%80%AFp.m..png" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <div class="card card-body">
                                <img loading="lazy" src="imagenes/Captura-de-pantalla-2023-11-15-a-las-3.58.01%E2%80%AFp.m.-1.png" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <div class="card card-body">
                                <img loading="lazy" src="imagenes/Captura-de-pantalla-2023-11-15-a-las-3.58.08%E2%80%AFp.m..png" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="divDetalles">
            <br>
            <h1>Information security</h1><br>
            <ul>
                <li style="font-weight: 400;" aria-level="1">
                    <span style="font-weight: 400;">Process Quality Certification</span>
                </li>
                <li style="font-weight: 400;" aria-level="1">
                    <span style="font-weight: 400;">Information Security</span>
                </li>
                <li style="font-weight: 400;" aria-level="1">
                    <span style="font-weight: 400;">Policies for the distribution and management of information</span>
                </li>
                <li style="font-weight: 400;" aria-level="1">
                    <span style="font-weight: 400;">Security of platforms and workstations</span>
                </li>
                <li style="font-weight: 400;" aria-level="1">
                    <span style="font-weight: 400;">DRP / BCP</span>
                </li>
                <li style="font-weight: 400;" aria-level="1">
                    <span style="font-weight: 400;">Cyber-security</span>
                </li>
                <li style="font-weight: 400;" aria-level="1">
                    <span style="font-weight: 400;">Audit &amp; Monitoring</span>
                </li>
            </ul>
        </div>
    </section><br><br>
    
    
    
    <section class="sectionCallUs" id="sectionCallUs">
        <div class="divDetalles">
            <h2>Call us!</h2><br>
            <p>Get access to home experts, advice and all type of sources for your home.</p><br>
            <h2 style="font-weight: 300;">Get in touch!</h2>
            <h2 class="elementor-heading-title elementor-size-default">1 (800) 942-1095</h2><br>
            <form class="row g-3" method="post" name="New Form">
                <input type="hidden" name="post_id" value="21936">
                <input type="hidden" name="form_id" value="e426918">
                <input type="hidden" name="referer_title" value="IGS USA">
                <div class="col-md-6">
                    <input size="1" type="email" name="form_fields[name]" id="form-field-name" class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="Email" required="required" aria-required="true">
                </div>
                <div class="col-md-6">
                    <input size="1" type="text" name="form_fields[email]" id="form-field-email" class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="First Name">
                </div>
                <div class="col-md-6">
                    <input size="1" type="text" name="form_fields[b26ecb6]" id="form-field-b26ecb6" class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="Last Name">
                </div>
                <div class="col-md-6">
                    <input type="number" name="form_fields[894019a]" id="form-field-894019a" class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="Country" required="required" aria-required="true" min="" max="">
                </div>
                <div class="col-12">
                    <textarea class="elementor-field-textual elementor-field  elementor-size-sm" name="form_fields[message]" id="form-field-message" rows="4" placeholder="Additionally Information"></textarea>
                </div>
                <div class="col-12" style="text-align: right">
                    <button type="submit" class="buttonFormCallUs">Submit</button>
                </div>
            </form>
            
        </div>
        <div class="divImagen">
            <img loading="lazy" width="90%" height="95%" src="imagenes/Mesa-de-trabajo-1-copia-4-1-e1700167697897.png" alt="" loading="lazy"  sizes="(max-width: 100%) 100vw, 90%"><br>
        </div>
    </section><br>
    
    
    
    
    
    <section class="sectionInfoIGS text-white" id="sectionInfoIGS">
        <div class="divInfo1">
            <div class="divImg">
                <img loading="lazy" src="imagenes/Copia-de-Logo-IGS-lineal-blanco-1.png" alt="" loading="lazy" sizes="(max-width: 620px) 100vw, 620px">
            </div><br>
            <p>Integral Group Solution (IGS) offers home service contracts to homeowners in 33 states and Washington, D.C., and currently services more than 1.3 million home service contracts in USA, LATAM and Europe. The company has been providing Home Service contracts since the year 20012 with more than 9 out of 10 customers satisfied and an A- Rating from the Better Business Bureau.</p>
            <ul>
                <li>
                    <i aria-hidden="true" class="fas fa-phone-alt"></i>
                    <p>1 (800) 750-8374</p>
                </li>
                <li>
                    <i aria-hidden="true" class="fas fa-location-arrow"></i>
                    <p>1395 Brickell Ave. Suite 670. Brickell Arch Building. Miami, FL 33131</p>
                </li>
            </ul>
        </div>
        <div class="divInfo2">
            <div class="divLista">
                <ul>
                    <li>
                        <a href="https://www.igroupsolution.net/">
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.igroupsolution.net/about-us/">
                            <span>Who are we?</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.igroupsolution.net/traditional-assistance-services/">
                            <span>Traditional assistance services</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.igroupsolution.net/innovative-assistance-services/">
                            <span>Innovative assistance services</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.igroupsolution.net/our-clients/">
                            <span>Our clients</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.igroupsolution.net/what-we-offer/">
                            <span>What we offer</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.igroupsolution.net/subsidiaries/">
                            <span>Subsidiaries</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.igroupsolution.net/contact/">
                            <span>Contact us</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="divImg">
                <a href="https://www.bbb.org/us/fl/miami/profile/employee-assistance-program/igs-fl-llc-0633-92027746">
                    <img loading="lazy" src="imagenes/5e73a6711b8d775100fd2134_logo-bbb-accredited-business-1024x523.png">
                </a>
                <img loading="lazy" style="width: 21%" src="imagenes/linkedin.png">
            </div>
        </div>
    </section>
    
    
    <footer>
        <p>© 2023 Integral Group Solution</p>
    </footer>
    
    
    <script src="jquery/jquery-3.2.1.min.js"></script>
    <script defer src="fontawesome/js/all.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script type='text/javascript'>
        let items = document.querySelectorAll('.sectionHandymanAssitance .carousel .carousel-item')

		items.forEach((el) => {
			const minPerSlideCarouselHandyman = 2
			let next = el.nextElementSibling
			for (var i=1; i<minPerSlideCarouselHandyman; i++) {
				if (!next) {
                    next = items[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })
    </script>
    
    <script type='text/javascript'>
        
        let itemsCarouselCommunity = document.querySelectorAll('.sectionCommunity .carousel .carousel-item')

		itemsCarouselCommunity.forEach((el) => {
			const minPerSlideCarouselCommunity = 2
			let next = el.nextElementSibling
			for (var i=1; i<minPerSlideCarouselCommunity; i++) {
				if (!next) {
                    next = itemsCarouselCommunity[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })
    </script>
    
    <script type='text/javascript'>
        $('.sectionCertificationsInformationSecurity .carousel .carousel-item').each(function () {
            var minPerSlideCarouselCertificationsInformationSecurity = 4;
            var next = $(this).next();
            if (!next.length) {
            next = $(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));

            for (var i = 0; i < minPerSlideCarouselCertificationsInformationSecurity; i++) {
                next=next.next(); if (!next.length) { next=$(this).siblings(':first'); } next.children(':first-child').clone().appendTo($(this));
            } 
        });
    </script>
</body>
</html>