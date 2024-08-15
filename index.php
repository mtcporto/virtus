<?php
require_once('awaysload.php');
?>

<!DOCTYPE html>
<html class="no-js" lang="pt-br">

<head>
        <!--====== Required meta tags ======-->
        <base href="<?php echo $paginasite; ?>" />

        <!-- ========== Meta Tags ========== -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="<?php echo $descricao; ?>">
        <meta name="author" content="<?php echo $author; ?>">
        <meta name="keywords" content="<?php echo $palavraschave; ?>" />

        <!-- ========== Page Title ========== -->
        <title><?php echo ($titulo ? $titulo : $titulosite) ?></title>

        <meta name="revisit-after" content="1" />
        <meta name="rating" content="General" />
        <meta name="doc-class" content="Completed" />
        <meta name="Copyright" content="Copyright (c) Pixelvivo" />
        <meta name="Revisit" content="1 Day" />
        <meta name="theme-color" content="#333" />

        <meta property="og:type" content="<?php echo ($type ? $type : 'website'); ?>" />
        <?php if ($type == 'article') { ?>
            <meta property="article:published_time" content="<?php echo $articletime; ?>" />
            <meta property="article:author" content="<?php echo $author; ?>" />
            <meta property="article:resume" content="<?php echo $descricao; ?>" />
        <?php } ?>        
        <meta property="og:site_name" content="<?php echo $nomesite; ?>"/>
        <meta property="og:title" content="<?php echo ($titulo ? $titulo : $nomesite) ?>" /> 
        <meta property="og:url" content="<?php echo $paginasite . @$restourl; ?>"/>
        <meta property="og:description" content="<?php echo $descricao; ?>" /> 
        <?php  if(true || is_file($paginasite.$imagem)){ ?>
            <meta property="og:image" content="<?php echo $paginasite . $imagem; ?>" />
            <meta property="og:image:type" content="<?php echo $imagemType; ?>">
            <meta property="og:image:width" content="<?php echo $imagemW; ?>">
            <meta property="og:image:height" content="<?php echo $imagemH; ?>">
        <?php } ?> 

    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/lightcase.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/forms.css">


    <!-- main css for template -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <!-- ===============>> Preloader start here <<================= -->
    <div class="preloader">
        <img src="assets/images/logo/preloader.gif" alt="Uevent">
    </div>
    <!-- ===============>> Preloader end here <<================= -->



    <!-- ========== Multipage Header Section Starts Here========== -->
    <header class="header-section">
        <div class="header-bottom">
            <div class="container">
                <div class="header-wrapper">
                    <div class="logo">
                        <a href="inscricao">
                            <img src="assets/images/logo/logo.png" alt="logo" width="250px">
                        </a>
                    </div>
                    <div class="menu-area">
                        <ul class="menu">
                            <li>
                                <a href="inscricao">Inscrição</a>
                               <!-- <ul class="submenu">
                                    <li><a href="identificacao">identificação</a></li>
                                </ul>-->
                            </li>

                            <li>
                                <a href="sobre">Sobre</a>
                               <!-- <ul class="submenu">
                                    <li><a href="sobre">Sobre</a></li>
                                </ul>-->
                            </li>
                            <li>
                                <a href="privacidade">Privacidade</a>
                              <!--  <ul class="submenu">
                                    <li><a href="privacidade">Privacidade</a></li>
                                </ul>-->
                            </li>
                        </ul>
                <!--          <div class="header-btn">
                            <a href="#" class="default-btn move-right">
                                <span>Join Now <i class="fa-solid fa-arrow-right"></i></span>
                            </a>
                        </div>

                       toggle icons -->
                        <div class="header-bar d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ========== Multipage Header Section Ends Here========== -->




    <?php require($pasta . '/' . $pagina . '.php'); ?>







    <!-- ================> Footer section start here <================== -->
    <footer class="footer">

        <!-- Footer Section End -->
<?php @require("includes/lgpd.php"); ?>

        <div class="footer__copyright">
            <div class="container">
                <div class="text-center py-4">
                    <p class=" mb-0">© 2024 | Todos os direitos reservados. </p>
                </div>
            </div>
        </div>
    </footer>

    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/all.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/countdown.min.js"></script>
    <script src="assets/js/lightcase.js"></script>
    <script src="assets/js/purecounter_vanilla.js"></script>
    <script src="assets/js/custom.js"></script>
    
    
    <script type="text/javascript" src="assets/js/ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.form.js"></script>
    <script type="text/javascript"  src="assets/js/funcoes.js?v=<?php echo str_replace(array('.','-'),'', $versaoGerenciador);?>"></script>
</body>
</html>