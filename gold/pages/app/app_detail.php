<?php
  $app_detail_num = $_GET['num'];

  // include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php';
  // $sql = "select * from gold_app where GOLD_APP_num = $app_detail_num";
  // $web_result = mysqli_query($dbConn , $sql);
  // $web_row = mysqli_fetch_array($web_result);
  
  // $web_detail_tit = $web_row['GOLD_WEB_tit'];
  // $web_detail_ser = $web_row['GOLD_WEB_ser'];
  // $web_detail_des = $web_row['GOLD_WEB_des'];
  // $web_detail_img = $web_row['GOLD_WEB_img'];
  // $web_detail_mimg = $web_row['GOLD_WEB_mimg'];
  // $web_detail_thumb = $web_row['GOLD_WEB_thumb'];
  // $web_detail_cli = $web_row['GOLD_WEB_cli'];
  // $web_detail_reg = $web_row['GOLD_WEB_reg'];
  // $web_detail_domain = $web_row['GOLD_WEB_dom'];

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
      <section class="contents appDetail deWeDetail">
        <div class="center clear">
          <div class="appLeft deWeLeft">
           <!-- title width common style -->
           <div class="title">
              <h2>app title</h2>
              <div class="linkBox">
                <span class="line"></span>
                <span class="line"></span>
                <a href="/gold/pages/app/app.php">view all websites</a>
              </div>
           </div>

           <div class="detailCon">
            
           </div>
           <!-- web detail contents end -->
          </div>
          <!-- design left end -->
          <div class="appRight deWeRight">            
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
