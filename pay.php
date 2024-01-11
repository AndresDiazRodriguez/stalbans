<?php



$pago1=$_GET["pago"];

echo "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa". $pago1;
if($pago1=="pago1"){
?>



<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html" charset=UTF-8?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IGS USA - IGS</title>
    <link rel="icon" href="imagenes/cropped-FaviIGS-300x300.png" sizes="192x192" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/stylesForm.css">
    
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
                                    <a class="nav-link text-white" href="eeuu.html#sectionHandymanAssitance">Products</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="eeuu.html#sectionAboutIGS">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="eeuu.html#sectionCoverage">Why Enroll?</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="eeuu.html#sectionCallUs">Contact Us</a>
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
    
    <section class="sectionForm">
        <div class="divImagenFondo"></div>
        <div class="divBackground">
            <div class="divText">
                <h1 class="text-white"><br>Integral Group Solution</h1>
                <br><br>
                <h3 class="text-white">Enter your  information to proceed with the<br> payment.</h3>
            </div><br>
            <form class="divForm row g-3" action="send1.php" method="post" name="USA">
                <div class="col-md-6">
                    <input size="1" type="text" name="form_fields[name]" id="form-field-name" placeholder="Name" required="required" aria-required="true">
                </div>
                <div class="col-md-6">
                    <input size="1" type="text" name="form_fields[field_2135b58]" id="form-field-field_2135b58" placeholder="Last name" required="required" aria-required="true">
                </div>
                <div class="col-md-6">
                    <input size="1" type="email" name="form_fields[field_8519f77]" id="form-field-field_8519f77" placeholder="Email" required="required" aria-required="true">
                </div>
                <div class="col-md-6">
                    <input size="1" type="tel" name="form_fields[field_ef848fa]" id="form-field-field_ef848fa" placeholder="Phone number" required="required" aria-required="true" pattern="[0-9()#&amp;+*-=.]+" title="Only numbers and phone characters (#, -, *, etc) are accepted.">
                </div>
                <div class="col-md-6">
                    <input size="1" type="text" name="form_fields[field_88d06fe]" id="form-field-field_88d06fe" placeholder="Address" required="required" aria-required="true">
                </div>
                <div class="col-md-6">
                    <input size="1" type="text" name="form_fields[field_ecc74e0]" id="form-field-field_ecc74e0" placeholder="City" required="required" aria-required="true">
                </div>
                <div class="col-md-4">
                    <input size="1" type="text" name="form_fields[field_6989150]" id="form-field-field_6989150" placeholder="Zip Code" required="required" aria-required="true">
                </div>
                <div class="col-md-12">
                    <button type="submit" class="buttonForm">
                        <a href="https://link.clover.com/urlshortener/c2k67V"><span>Sing Up</span></a>
                    </button>
                </div>
            </form>
            <br><br>
        </div>
        
    </section>
    
    
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
    
    
    <script src="jquery/jquery-3.2.1.min.js"></script>
    <script defer src="fontawesome/js/all.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>



<?php
}

else if ($pago1=="pago2"){

?>





<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html" charset=UTF-8?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IGS USA - IGS</title>
    <link rel="icon" href="imagenes/cropped-FaviIGS-300x300.png" sizes="192x192" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/stylesForm.css">
    
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
                                    <a class="nav-link text-white" href="eeuu.html#sectionHandymanAssitance">Products</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="eeuu.html#sectionAboutIGS">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="eeuu.html#sectionCoverage">Why Enroll?</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="eeuu.html#sectionCallUs">Contact Us</a>
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
    
    <section class="sectionForm">
        <div class="divImagenFondo"></div>
        <div class="divBackground">
            <div class="divText">
                <h1 class="text-white"><br>Integral Group Solution</h1>
                <br><br>
                <h3 class="text-white">Enter your  information to proceed with the<br> payment.</h3>
            </div><br>
            <form class="divForm row g-3" action="send2.php" method="post" name="USA">
                <div class="col-md-6">
                    <input size="1" type="text" name="form_fields[name]" id="form-field-name" placeholder="Name" required="required" aria-required="true">
                </div>
                <div class="col-md-6">
                    <input size="1" type="text" name="form_fields[field_2135b58]" id="form-field-field_2135b58" placeholder="Last name" required="required" aria-required="true">
                </div>
                <div class="col-md-6">
                    <input size="1" type="email" name="form_fields[field_8519f77]" id="form-field-field_8519f77" placeholder="Email" required="required" aria-required="true">
                </div>
                <div class="col-md-6">
                    <input size="1" type="tel" name="form_fields[field_ef848fa]" id="form-field-field_ef848fa" placeholder="Phone number" required="required" aria-required="true" pattern="[0-9()#&amp;+*-=.]+" title="Only numbers and phone characters (#, -, *, etc) are accepted.">
                </div>
                <div class="col-md-6">
                    <input size="1" type="text" name="form_fields[field_88d06fe]" id="form-field-field_88d06fe" placeholder="Address" required="required" aria-required="true">
                </div>
                <div class="col-md-6">
                    <input size="1" type="text" name="form_fields[field_ecc74e0]" id="form-field-field_ecc74e0" placeholder="City" required="required" aria-required="true">
                </div>
                <div class="col-md-4">
                    <input size="1" type="text" name="form_fields[field_6989150]" id="form-field-field_6989150" placeholder="Zip Code" required="required" aria-required="true">
                </div>
                <div class="col-md-12">
                    <button type="submit" class="buttonForm">
                        <a href="https://link.clover.com/urlshortener/c2k67V"><span>Sing Up</span></a>
                    </button>
                </div>
            </form>
            <br><br>
        </div>
        
    </section>
    
    
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
    
    
    <script src="jquery/jquery-3.2.1.min.js"></script>
    <script defer src="fontawesome/js/all.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>







<?php

}
else{
?>







<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html" charset=UTF-8?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IGS USA - IGS</title>
    <link rel="icon" href="imagenes/cropped-FaviIGS-300x300.png" sizes="192x192" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/stylesForm.css">
    
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
                                    <a class="nav-link text-white" href="eeuu.html#sectionHandymanAssitance">Products</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="eeuu.html#sectionAboutIGS">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="eeuu.html#sectionCoverage">Why Enroll?</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="eeuu.html#sectionCallUs">Contact Us</a>
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
    
    <section class="sectionForm">
        <div class="divImagenFondo"></div>
        <div class="divBackground">
            <div class="divText">
                <h1 class="text-white"><br>Integral Group Solution</h1>
                <br><br>
                <h3 class="text-white">Enter your  information to proceed with the<br> payment.</h3>
            </div><br>
            <form class="divForm row g-3" action="send3.php" method="post" name="USA">
                <div class="col-md-6">
                    <input size="1" type="text" name="form_fields[name]" id="form-field-name" placeholder="Name" required="required" aria-required="true">
                </div>
                <div class="col-md-6">
                    <input size="1" type="text" name="form_fields[field_2135b58]" id="form-field-field_2135b58" placeholder="Last name" required="required" aria-required="true">
                </div>
                <div class="col-md-6">
                    <input size="1" type="email" name="form_fields[field_8519f77]" id="form-field-field_8519f77" placeholder="Email" required="required" aria-required="true">
                </div>
                <div class="col-md-6">
                    <input size="1" type="tel" name="form_fields[field_ef848fa]" id="form-field-field_ef848fa" placeholder="Phone number" required="required" aria-required="true" pattern="[0-9()#&amp;+*-=.]+" title="Only numbers and phone characters (#, -, *, etc) are accepted.">
                </div>
                <div class="col-md-6">
                    <input size="1" type="text" name="form_fields[field_88d06fe]" id="form-field-field_88d06fe" placeholder="Address" required="required" aria-required="true">
                </div>
                <div class="col-md-6">
                    <input size="1" type="text" name="form_fields[field_ecc74e0]" id="form-field-field_ecc74e0" placeholder="City" required="required" aria-required="true">
                </div>
                <div class="col-md-4">
                    <input size="1" type="text" name="form_fields[field_6989150]" id="form-field-field_6989150" placeholder="Zip Code" required="required" aria-required="true">
                </div>
                <div class="col-md-12">
                    <button type="submit" class="buttonForm">
                        <a href="https://link.clover.com/urlshortener/c2k67V"><span>Sing Up</span></a>
                    </button>
                </div>
            </form>
            <br><br>
        </div>
        
    </section>
    
    
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
    
    
    <script src="jquery/jquery-3.2.1.min.js"></script>
    <script defer src="fontawesome/js/all.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>








<?php


}

?>