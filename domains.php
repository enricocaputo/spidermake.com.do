<?php
error_reporting(E_ALL & ~E_NOTICE);
if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require(__DIR__ . '/vendor/autoload.php');
}
use Helge\Loader\JsonLoader;
use Helge\Client\SimpleWhoisClient;
use Helge\Service\DomainAvailability;
$regStatus=[0=>"Already Registered",1 =>'Yes Available for Registration'];
if (!empty($_POST['domain_name'])){
    $tld =  $_POST['tld'];
    if(empty($tld)){
        $tld= '.com';
    }
    $whoisClient = new SimpleWhoisClient();
    $dataLoader = new JsonLoader("vendor/helgesverre/domain-availability/src/data/servers.json");
    $service = new DomainAvailability($whoisClient, $dataLoader);
    $query = trim($_POST['domain_name']).$tld;
    $status = $service->isAvailable($query);
}
?>
<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v3.12.1, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v3.12.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/logo-128x128.png" type="image/x-icon">
  <meta name="description" content="Dominios">
  <title>Dominios</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <link rel="stylesheet" href="assets/bootstrap-material-design-font/css/material.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
<section id="menu-i">

    <nav class="navbar navbar-dropdown bg-color transparent navbar-fixed-top">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                        <a href="https://mobirise.com" class="navbar-logo"><img src="assets/images/logo-128x128.png" alt="Mobirise"></a>
                        <a class="navbar-caption" href="https://mobirise.com">Spidermake</a>
                    </div>

                </div>
                <div class="mbr-table-cell">

                    <button class="navbar-toggler pull-xs-right" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>

                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-xl" id="exCollapsingNavbar"><li class="nav-item"><a class="nav-link link" href="index.html">SPIDERMAKE</a></li><li class="nav-item dropdown"><a class="nav-link link" href="index.html" aria-expanded="false">HOSTING WEB</a></li><li class="nav-item"><a class="nav-link link" href="domains.php" aria-expanded="false">NOMBRES DE DOMINIO</a></li><li class="nav-item dropdown"><a class="nav-link link" href="herramientas_libres.html" aria-expanded="false">HERRAMIENTAS LIBRES</a></li><li class="nav-item"><a class="nav-link link" href="servicio_personalizado.html" aria-expanded="false">SERVICIO PERSONALIZADO</a></li><li class="nav-item"><a class="nav-link link" href="https://mobirise.com/" aria-expanded="false"></a></li><li class="nav-item nav-btn"><a class="nav-link btn btn-white btn-white-outline" href="https://mobirise.com/">DOWNLOAD</a></li></ul>
                    <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>

                </div>
            </div>

        </div>
    </nav>

</section>

<section class="engine"><a rel="external" href="https://mobirise.com">Mobirise Web Builder</a></section><section class="mbr-section mbr-after-navbar" id="form2-13" style="background-color: rgb(4, 116, 37); padding-top: 120px; padding-bottom: 120px;">
        <div class="mbr-section mbr-section__container mbr-section__container--middle">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-center">
                    <h3 class="mbr-section-title display-2">DOMAIN SEARCH</h3>
                    <small class="mbr-section-subtitle">Aquista, Rinnova e Trasferisci il tuo dominio a RD$ 550</small>
                </div>
            </div>
        </div>
    </div>
    <div class="mbr-section mbr-section-nopadding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-10 col-lg-offset-1" data-form-type="formoid">
					                   
		

                        <form role="search" action="domains.php" class="domainForm" method="post">
							<div class="mbr-subscribe mbr-subscribe-dark input-group">
                        
                              
                                    <input type="text" name="domain_name" title="Enter Valid domain name" class="form-control required" placeholder="Find your perfect domain..." aria-describedby="basic-addon2"
                                    value="<?php if(!empty($_POST['domain_name'])){
                                            echo $_POST['domain_name'];
                                            } ?>">
                                
                                <span class="input-group">
                                    <select id="tld" name="tld" class="form-control">
                                        <option value=".com">.com</option>
                                        <option value=".biz">.biz</option>
                                        <option value=".net">.net</option>
                                        <option value=".org">.org</option>
                                        <option value=".pro">.pro</option>
                                        <option value=".top">.top</option>
                                        <option value=".agency">.agency</option>
                                        <option value=".casa">.casa</option>
                                        <option value=".cc">.cc</option>
                                        <option value=".florist">.florist</option>
                                        <option value=".info">.info</option>
                                        <option value=".life">.life</option>
                                        <option value=".online">.online</option>
                                        <option value=".shoes">.shoes</option>
                                        <option value=".store">.store</option>
                                        <option value=".win">.win</option>
                                        <option value=".xyz">.xyz</option>
                                    </select>
                               </span>
                               
								<span class="input-group-btn"><button type="submit" class="btn btn-primary"><span class="mbri-search mbr-iconfont mbr-iconfont-btn"></span></button></span>

                            </div>
                            </div>
                        </form>
                        
                        
                        
                        
                        
                   
                    <?php
                    if(isset($_POST['domain_name'])){
                    ?>
                    <div>
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Domain Name</th>
                                    <th>Registration Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <?=  $query ?>
                                    </td>
                                    <td>
                                        <?=  $regStatus[$status] ?>
                                    </td>
                                    <td>
                    <?php
                    if($status){
                    echo '<a href="#" class="btn btn-success ">Register</a>';
                    }
                    ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <?php
                    }
                    ?>
					
	

                </div>
          
        </div>
    </div>
</section>





       <div class="container">
            <div class="row" style="margin-top:27px;">

                <div class="col-sm-8 ">


                    <div class="table-responsive">
                        <table class="table  table-striped">
                            <thead>
                                <tr class="info">
                                    <th>Company</th>
                                    <th>Prezzo</th>
                                    <th>Privacy</th>
                                    <th>Protection</th>
                                    <th>Totale</th>
                                    <th>Comparazione</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr id="comp_ns" class="success">
                                    <td><b>HostingStore</b></td>
                                    <td>€13.00</td>
                                    <td>GRATIS!</td>
                                    <td>GRATIS!</td>
                                    <td>€13.00</td>
                                    <td>CON NOI RISPARMIATE!</td>
                                </tr>

                                <tr id="comp_1">
                                    <td>GoDaddy</td>
                                    <td>$15.17</td>
                                    <td>$9.99</td>
                                    <td>$5.00</td>
                                    <td>$30.16</td>
                                    <td><mark> more expensive </mark></td>
                                </tr>


                                <tr id="comp_11">
                                    <td>Namecheap</td>
                                    <td>$10.87</td>
                                    <td>$2.88</td>
                                    <td><mark> Not Offered </mark>
                                    </td>
                                    <td>$13.75</td>
                                    <td><mark> more expensive </mark>
                                    </td>
                                </tr>


                                <tr id="comp_2">
                                    <td>Network Solutions</td>
                                    <td>$34.99</td>
                                    <td>$9.00</td>
                                    <td>$0.00</td>
                                    <td>$43.99</td>
                                    <td><mark> more expensive </mark>
                                    </td>
                                </tr>


                                <tr id="comp_3">
                                    <td>Register.com</td>
                                    <td>$37.00</td>
                                    <td>$11.00</td>
                                    <td><mark>Not Offered</mark>
                                    </td>
                                    <td>$48.00</td>
                                    <td><mark> more expensive</mark>
                                    </td>
                                </tr>


                                <tr id="comp_4">
                                    <td>eNom Central</td>
                                    <td>$39.95</td>
                                    <td>$8.00</td>
                                    <td><mark>Not Offered</mark>
                                    </td>
                                    <td>$47.95</td>
                                    <td><mark> more expensive</mark>
                                    </td>
                                </tr>

                                <tr id="comp_14">
                                    <td>Dynadot</td>
                                    <td>$10.99</td>
                                    <td>$3.00</td>
                                    <td><mark>Not Offered</mark></td>
                                    <td>$13.99</td>
                                    <td><mark><u>more expensive</u></mark></td>
                                </tr>

                                <tr id="comp_9">
                                    <td>Dotster</td>
                                    <td>$14.99</td>
                                    <td>$8.99</td>
                                    <td><mark>Not Offered</mark></td>
                                    <td>$23.98</td>
                                    <td><mark> more expensive</mark></td>
                                </tr>

                                <tr id="comp_13">
                                    <td>Yahoo</td>
                                    <td>$9.95</td>
                                    <td>$9.00</td>
                                    <td><mark>Not Offered</mark></td>
                                    <td>$18.95</td>
                                    <td><mark> more expensive</mark>
                                    </td>
                                </tr>

                                <tr id="comp_12">
                                    <td>Melbourne IT</td>
                                    <td>$36.50</td>
                                    <td>$15.00</td>
                                    <td><mark>Not Offered</mark></td>
                                    <td>$51.50</td>
                                    <td><mark> more expensive</mark></td>
                                </tr>

                                <tr id="comp_6" class="alt2">
                                    <td>Fabulous</td>
                                    <td>$29.95</td>
                                    <td>$0.00</td>
                                    <td>$0.00</td>
                                    <td>$29.95</td>
                                    <td><mark> more expensive</mark></td>
                                </tr>

                                <tr id="comp_7">
                                    <td>Moniker</td>
                                    <td>$9.59</td>
                                    <td>$4.00</td>
                                    <td>$19.99</td>
                                    <td>$33.58</td>
                                    <td><mark> more expensive</mark></td>
                                </tr>

                                <tr id="comp_10">
                                    <td>Name.com</td>
                                    <td>$12.99</td>
                                    <td>$3.99</td>
                                    <td><mark> Not Offered </mark></td>
                                    <td>$16.98</td>
                                    <td><mark> more expensive </mark></td>
                                </tr>


                                <tr id="comp_15">
                                    <td>Domain.com</td>
                                    <td>$9.99</td>
                                    <td>$8.99</td>
                                    <td><mark> Not Offered </mark> </td>
                                    <td>$18.98</td>
                                    <td>
                                        <mark> more expensive </mark>
                                    </td>
                                </tr>

                                <tr id="comp_16" class="alt2">
                                    <td>Gandi</td>
                                    <td>$15.50</td>
                                    <td>$0.00</td>
                                    <td><mark> Not Offered </mark></td>
                                    <td>$15.50</td>
                                    <td><mark> more expensive </mark></td>
                                </tr>

                                <tr id="comp_19">
                                    <td>Hover</td>
                                    <td>$13.17</td>
                                    <td>$0.00</td>
                                    <td><mark>Not Offered</mark></td>
                                    <td>$13.17</td>
                                    <td><mark> more expensive</mark></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
				   <div class="col-md-4">
                    <!-- PRICE ITEM -->
                    <div class="panel price panel-green">
                        <div class="panel-heading arrow_box text-center">
                            <h3><b> OGNI DOMINIO hostingstore </b>
                                <br>
                                <small>Offre molte caratteristiche gratis!</small></h3>
                        </div>
                        <div class="panel-body text-center">
                            <p class="lead" style="font-size:40px">
                                <strong><i class="fa fa-eur"></i> CONFRONTA I PREZZI </strong>
                            </p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <i class="fa fa-check text-success"></i> Custom WHOIS Records
                            </li>
                            <li class="list-group-item">
                                <i class="fa fa-check text-success"></i> FREE Whois Privacy
                            </li>
                            <li class="list-group-item">
                                <i class="fa fa-check text-success"></i> Domain Forwarding
                            </li>
                            <li class="list-group-item">
                                <i class="fa fa-check text-success"></i> Email Forwarding
                            </li>
                            <li class="list-group-item">
                                <i class="fa fa-check text-success"></i> Domain Defender
                            </li>
                            <li class="list-group-item">
                                <i class="fa fa-check text-success"></i> Registry Lock
                            </li>
                        </ul>
					<!--<div class="panel-footer">
					<a class="btn btn-lg btn-block btn-primary" href="#" data-order="Plan 1- $599 / yr">Metti nel carrello</a>
					</div>-->
                    </div>
                    <!-- /PRICE ITEM -->

                </div>
            </div>
        </div>






<section class="mbr-footer footer4 mbr-section mbr-section-md-padding" id="contacts4-j" style="background-color: rgb(46, 46, 46); padding-top: 90px; padding-bottom: 90px;">
    
    <div class="container">
        <div class="mbr-contacts row">
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-6">
                        <p><strong>Direccion</strong><br>Street Name<br>Santiago, AA 99999<br><br><br>
<strong>Contactos</strong><br>
Email: soporte@spidermake.com<br>
Phone: +1 (0) 000 0000 001<br></p>
                    </div>
                    <div class="col-sm-6"><p class="mbr-contacts__text"><strong>Enlaces</strong></p><ul class="mbr-contacts__list"><li><a class="text-white" href="index.html">Hosting Web</a></li><li><a href="domains.php" class="text-white">Nombres Dominio</a></li><li><a class="text-white" href="herramientas_libres.html">Herramientas Libres</a></li><li><a class="text-white" href="servicio_personalizado.html">Servicio Personalizado</a></li></ul></div>
                </div>
            </div>
            <div class="col-sm-4">
                
                <form action="https://mobirise.com/" method="post">
                    
                    <div class="form-group">
                        <label class="form-control-label" for="contacts4-j-name">Nombre<span class="form-asterisk">*</span></label>
                        <input type="text" class="form-control input-sm input-inverse" name="name" required="" data-form-field="Name" id="contacts4-j-name">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label" for="contacts4-j-email">Email<span class="form-asterisk">*</span></label>
                        <input type="email" class="form-control input-sm input-inverse" name="email" required="" data-form-field="Email" id="contacts4-j-email">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label" for="contacts4-j-phone">Movil</label>
                        <input type="tel" class="form-control input-sm input-inverse" name="phone" data-form-field="Phone" id="contacts4-j-phone">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label" for="contacts4-j-message">Mensaje</label>
                        <textarea class="form-control input-sm input-inverse" name="message" data-form-field="Message" rows="4" id="contacts4-j-message"></textarea>
                    </div>
                    <div class="mbr-buttons mbr-buttons--right btn-inverse"><button type="submit" class="btn btn-sm btn-black">Enviar</button></div>
                </form>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/viewport-checker/jquery.viewportchecker.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
  <input name="animation" type="hidden">
  </body>
</html>
