<?php
  $web_detail_num = $_GET['num'];

  include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php';
  $sql = "select * from gold_web where GOLD_WEB_num = $web_detail_num";
  $web_result = mysqli_query($dbConn , $sql);
  $web_row = mysqli_fetch_array($web_result);
  
  $web_detail_tit = $web_row['GOLD_WEB_tit'];
  $web_detail_ser = $web_row['GOLD_WEB_ser'];
  $web_detail_des = $web_row['GOLD_WEB_des'];
  $web_detail_img = $web_row['GOLD_WEB_img'];
  $web_detail_mimg = $web_row['GOLD_WEB_mimg'];
  $web_detail_thumb = $web_row['GOLD_WEB_thumb'];
  $web_detail_cli = $web_row['GOLD_WEB_cli'];
  $web_detail_reg = $web_row['GOLD_WEB_reg'];
  $web_detail_domain = $web_row['GOLD_WEB_dom'];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gold</title>
    <!-- font awesome link -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <!-- main css link -->
    <link rel="stylesheet" href="/gold/css/style.css" />
    <!-- join css link -->
    <link rel="stylesheet" href="/gold/css/design_web_app.css" />
    <!-- animation css link -->
    <link rel="stylesheet" href="/gold/css/animation.css" />
    <!-- media css link -->
    <link rel="stylesheet" href="/gold/css/media.css" />
    <!-- jquery framework -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>    
    <!-- main js link -->
    <script src="/gold/js/custom.js"></script>
  </head>
  <body>
    <div class="wrap">
      <?php include $_SERVER["DOCUMENT_ROOT"]."/gold/include/header.php" ?>
      <section class="contents webDetail deWeDetail">
        <div class="center clear">
          <div class="webLeft deWeLeft">
           <!-- title width common style -->
           <div class="title">
              <h2><?=$web_detail_tit?></h2>
              <div class="linkBox">
                <span class="line"></span>
                <span class="line"></span>
                <a href="/gold/pages/web/web.php">view all websites</a>
              </div>
           </div>

           <div class="detailCon">
             <div class="webTabBtns">
               <button type="button">PC</button>
               <button type="button">MOBILE</button>
             </div>
             <div class="webBox webTab">
               <div class="webPcFrame">
                 <div class="webMainImg">
                    <img src="/gold/data/web_page/pc/<?=$web_detail_img?>" alt="" class="scrollUp">
                 </div>
                 <img src="/gold/img/mac_frame.png" alt=""> 
               </div>
             </div>
             <!-- pc web detail box end -->
             <div class="webBox_m webTab">
               <div class="webMobileFrame">
                 <div class="webMainImg_m">
                    <img src="/gold/data/web_page/mobile/<?=$web_detail_mimg?>" alt="" class="scrollUp_m">
                 </div>
                 <img src="/gold/img/iphone_frame.png" alt=""> 
               </div>
             </div>

             <!-- mobile web detail box end -->
             <p class="detailInfo">
                Project by Gold Dev. Team / <?=$web_detail_ser?> / used in <?=$web_detail_cli?> / <?=$web_detail_reg?>
              </p>

              <div class="detailDesc">
                <p><?=$web_detail_des?></p>
                <a href="/gold/index.php#contact"><i class="fa fa-arrow-right"></i> Get In Touch With ...</a>
              </div>
           </div>
           <!-- web detail contents end -->
          </div>
          <!-- design left end -->
          <div class="webRight deWeRight">            
            <?php include $_SERVER["DOCUMENT_ROOT"]."/gold/include/web_side_detail.php"?>
            <?php include $_SERVER["DOCUMENT_ROOT"]."/gold/include/app_side_detail.php"?>
          </div>
          <!-- design right end -->
        </div>
        <!-- center end -->
      </section>
      <?php include $_SERVER["DOCUMENT_ROOT"]."/gold/include/about.php"?>
      <?php include $_SERVER["DOCUMENT_ROOT"]."/gold/include/footer.php"?>
      <?php include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php'?>
    </div>

    <script src="/gold/js/web_detail.js"></script>
  </body>
</html>
