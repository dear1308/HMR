<!doctype html>

<?
  define ('AZERUNGA', true );
  include_once 'inc_functions/define.inc.php';
  include_once 'inc_functions/lib.inc.php';
  include_once 'inc_functions/titles.inc.php';
  // session_start();
?>
 ddd
<html lang="<?= $lang?>">
  <head>
    <title><?=$title?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <meta name="description" content="Векторизация изображений, скрипты для CorelDraw, SVG"/>
    <link rel="icon" type="image/x-icon" href="/img/ico/favicon.ico">
    <link rel="icon" type="image/svg+xml" sizes="any"   href="/img/ico/favicon.svg" >
    <link rel="stylesheet" href="css/style-color-reset.css"/>
    <link rel="stylesheet" href="css/slick.css"/>
    <link rel="stylesheet" href="css/slick-theme.css"/>
    <link rel="stylesheet" href="css/slick-my-svg.css" />
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/style-loader.css"/>
    <link rel="stylesheet" href="css/style-header.css" />
    <link rel="stylesheet" href="css/style-footer.css" />
    <link rel="stylesheet" href="css/style-404.css" />
    <link rel="stylesheet" href="css/style-page-main.css" />
    <link rel="stylesheet" href="css/style-gallery-svg.css" />

    <link rel="stylesheet" href="css/twentytwenty.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/style-compare.css" />
    <!-- <link rel="stylesheet" href="css/owl.theme.default.css"> -->

    <link rel="stylesheet" href="css/style-pic-viewer.css" />

    <script src="js/jquery-3.5.0.min.js"></script>

  </head>

 <body>


<!-- <div class="preloader">
  <div class="preloader-background">
    <div class="preloader-left "> </div>
    <div class="preloader-right"> </div>
  </div>
  < ?php echo file_get_contents("img/loader.svg");?>
</div>
 -->

  <div id="wrapper">
    <div id="background-SVG-Content">
      <?php echo file_get_contents("img/background-vas.svg");?>
    </div>



   <?include 'inc_page/header.inc.php' ?>
   <?include 'inc_page/page-main-menu.inc.php' ?>
   <?include 'inc_functions/routing.inc.php'?>
   <?include 'inc_page/footer.inc.php' ?>


  </div>


<div class="rocket">
  <?php echo file_get_contents("img/rocket.svg");?>
</div>


<div class="southPark-wrapper">
  <div id="cartman" class="southPark-item"><?php echo file_get_contents("img/sp-eric.svg");?></div>
  <div id="kenny"   class="southPark-item"><?php echo file_get_contents("img/sp-kenny.svg");?></div>
  <div id="stan"    class="southPark-item"><?php echo file_get_contents("img/sp-stan.svg");?></div>
  <div id="kyle"    class="southPark-item"><?php echo file_get_contents("img/sp-kyle.svg");?></div>
</div>

<div id="scrollup">
    <?php echo file_get_contents("img/hex-small-menu-scrool.svg");?>
</div>


<!-- объединненный просмотрщик по клику для свг галлереи и twenty-twenty -->
 <div class="svg-gallery-view-wrapper">
            <div id="svg-gallery-left-arrow">
              <? echo  file_get_contents(ICO_PATH . 'ico-svg-gal-arrow.svg')?>
           </div>

           <div id='svg-gallery-content'>
               <div id="svg-gallery-id-view" class="svg-gallery-view">

              </div>
               <div id="svg-gallery-div-close"></div>
           </div>

           <div id="svg-gallery-right-arrow">
               <? echo  file_get_contents(ICO_PATH . 'ico-svg-gal-arrow.svg')?>
           </div>
</div>

<script src="js/main.js"></script>
<script src="js/flashBackGround.js"></script>
<script src="js/menu.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
    <!-- вначале должен загрузиться owl - потом twentytwenty -->
<script src="js/jquery.event.move.js"></script>
<script src="js/jquery.twentytwenty.js"></script>

<script src="js/GallerryClickScript.js"></script>



  </body>
</html>










