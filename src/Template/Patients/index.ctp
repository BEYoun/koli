<?php $this->assign('title','Cabinet medicale');?>

<?php $this->start('css');?>
        <link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
        <link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="img/favicons/manifest.json">
        <link rel="shortcut icon" href="img/favicons/favicon.ico">
        <!-- Normalize -->
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <!-- Owl -->
        <link rel="stylesheet" type="text/css" href="css/owl.css">
        <!-- Animate.css -->
        <link rel="stylesheet" type="text/css" href="css/animate.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.1.0/css/font-awesome.min.css">
        <!-- Elegant Icons -->
        <link rel="stylesheet" type="text/css" href="fonts/eleganticons/et-icons.css">
        <!-- Main style -->
        <link rel="stylesheet" type="text/css" href="css/cardio.css">
<?php $this->end();?>

<?php $this->start('meta');?>
    <meta name="description" content="Cardio is a free one page template made exclusively for Codrops by Luka Cvetinovic" />
    <meta name="keywords" content="html template, css, free, one page, gym, fitness, web design" />
    <meta name="author" content="Luka Cvetinovic for Codrops" />
    <!-- Favicons (created with http://realfavicongenerator.net/)-->
    <meta name="msapplication-TileColor" content="#00a8ff">
    <meta name="msapplication-config" content="img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<?php $this->end();?>


<div class="preloader">
        <img src="img/loader.gif" alt="Preloader image">
    </div>
    <nav class="navbar">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="img/logo.png" data-active-url="img/logo-active.png" alt=""></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right main-nav">
                    <li><a href="#intro">Intro</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#horaire">Horaires </a></li>
                    <li><a href="#pricing">S'inscrire </a></li>
                    <li><a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-blue">S'authentifier</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <?= $this->Flash->render() ?>
    <header id="intro">
        <div class="container">
            <div class="table">
                <div class="header-text">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h3 class="light white">Prenez soin de votre corps.</h3>
                            <h1 class="white typed">C'est le seul endroit où tu dois vivre.</h1>
                            <span class="typed-cursor">|</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="services" class="section section-padded">
        <div class="container">
            <div class="row text-center title">
                <h2>Services</h2>
                <h4 class="light muted">Obtenez les meilleurs résultats avec notre  variété d'options</h4>
            </div>
            <div class="row services">
                <div class="col-md-4">
                    <div class="service">
                        <div class="icon-holder">
                            <img src="img/icons/heart-blue.png" alt="" class="icon">
                        </div>
                        <h4 class="heading">Consultation</h4>
                        <p class="description">La prise de RDV avec votre médecin se fait facilement via le secrétariat ou par site. </p>
                        <p class="description">Prix:300dhs</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service">
                        <div class="icon-holder">
                            <img src="img/icons/guru-blue.png" alt="" class="icon">
                        </div>
                        <h4 class="heading">Echographie</h4>
                        <p class="description">Dont le but et de compléter ou de poser un diagnostic.</p>
                        <p class="description">Prix:400dhs</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service">
                        <div class="icon-holder">
                            <img src="img/icons/weight-blue.jpg" alt="" class="icon">
                        </div>
                        <h4 class="heading"> Accouchement</h4>
                        <p class="description">La prise en charge de la grocesse et de l'accouchement.</p>
                        <p class="description">Prix:9000dhs</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="cut cut-bottom"></div>
    </section>
    <section id="horaire" class="SOUKAHASNA">
        <div class="container" >
            <div class="row">
                
                <div class="col-sm-6 text-center-mobile">
                    <h3 class="white">Horaire d'ouverture <span class="open-blink"></span></h3>
                    <div class="row opening-hours">
                        <div class="col-sm-6 text-center-mobile">
                            <h5 class="light-white light">lundi - vendredi</h5>
                            <h4 class="regular white">Matin</h4>
                            <h3 class="regular white">9:00 - 13:00</h3>
                        </div>
                        <div class="col-sm-6 text-center-mobile">
                            <h5 class="light-white light">lundi-vendredi</h5>
                            <h4 class="regular white">Aprés-midi</h4>
                            <h3 class="regular white">14:30 - 18:30</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="pricing" class="section">
        <div class="container">
            <div class="row no-margin">
                <div class="col-md-5 no-padding col-md-offset-5 pricings text-center">
                    <div class="pricing">
                                <h1 class="white">S'inscrire</h1>
                                <?= $this->Form->create(null, ['url'=>['controller'=>'users','action'=>'add'],'class'=>'popup-form']) ?>
                                <?php 
                                    echo $this->Form->control('mail',['label'=>false,'class'=>'form-control form-white','placeholder'=>'email']);
                                    echo $this->Form->control('password',['label'=>false,'class'=>'form-control form-white','placeholder'=>'password']);
                                    echo $this->Form->control('type',['label'=>false,'class'=>'form-control form-white','value'=>'patient','type'=>'hidden']);
                                    echo $this->Form->control('nom',['label'=>false,'class'=>'form-control form-white','placeholder'=>'nom']);
                                    echo $this->Form->control('prenom',['label'=>false,'class'=>'form-control form-white','placeholder'=>'prenom']);
                                    echo $this->Form->control('tel',['label'=>false,'class'=>'form-control form-white','placeholder'=>'telephone']);
                                    echo $this->Form->control('adresse',['label'=>false,'class'=>'form-control form-white','placeholder'=>'adresse']);
                                    echo $this->Form->control('photo',['label'=>false,'class'=>'form-control form-white','placeholder'=>'photo']);
                                ?>
                                <?= $this->Form->button(__('Submit'),['class'=>'btn btn-submit btn-info']) ?>
                                <?= $this->Form->end() ?>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-popup">
                <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
                <h3 class="white">S'authentifier</h3>
                <?= $this->Form->create(null, ['url'=>['controller'=>'users','action'=>'login'],'class'=>'popup-form']) ?>
                <?php 
                    echo $this->Form->control('mail',['label'=>false,'class'=>'form-control form-white','placeholder'=>'email']);
                    echo $this->Form->control('password',['label'=>false,'class'=>'form-control form-white','placeholder'=>'password']);
                ?>
                <?= $this->Form->button(__('Submit'),['class'=>'btn btn-submit btn-info']) ?>
                <?= $this->Form->end() ?>
                <!-- <form action="" class="popup-form">
                    <input type="text" class="form-control form-white" placeholder="Email Address">
                    <input typ="password" class="form-control form-white" placeholder="xxxxxx">
                    
                    <button type="submit" class="btn btn-submit">Connexion</button>
                </form -->>
            </div>
        </div>
    </div>
    
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 text-center-mobile">
                <p> <i class="fas fa-phone-square"></i> Number 1 : +212 677646290</p>
                <p>Email   : araf@hospital.com</p>
                <p>Fax     1: +212 56 68 95 60 00</p>
                <p>Fax     2: +212 56 68 95 60 01</p>
                <p>Address :app 20, Rue toulouse, lmaarif,Casablanca  </p>
                <p>&copy; 2018  </p>
                </div>
                <div class="col-sm-6 text-center-mobile">
                    <ul class="social-footer">
                        <li><a href="http://www.facebook.com/pages/Codrops/159107397912"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="http://www.twitter.com/codrops"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://plus.google.com/101095823814290637419"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                        
                    </div>
                </div>
            </div>
            
        </div>
    </footer>
    <!-- Holder for mobile navigation -->
    <div class="mobile-nav">
        <ul>
        </ul>
        <a href="#" class="close-link"><i class="arrow_up"></i></a>
    </div>
    <!-- Scripts -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/typewriter.js"></script>
    <script src="js/jquery.onepagenav.js"></script>
    <script src="js/main.js"></script>