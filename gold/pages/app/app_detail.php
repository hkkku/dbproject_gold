<?php
  $app_detail_num = $_GET['num'];

  include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php';
  $sql = "select * from gold_app where GOLD_APP_num = $app_detail_num";
  $app_result = mysqli_query($dbConn , $sql);
  $app_row = mysqli_fetch_array($app_result);
  
  $app_detail_tit = $app_row['GOLD_APP_tit'];
  $app_detail_ser = $app_row['GOLD_APP_ser'];
  $app_detail_des = $app_row['GOLD_APP_des'];
  $app_detail_img = $app_row['GOLD_APP_img'];
  $app_detail_thumb = $app_row['GOLD_APP_thumb'];
  $app_detail_cli = $app_row['GOLD_APP_cli'];
  $app_detail_reg = $app_row['GOLD_APP_reg'];


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
    <!-- lightslider plugin link -->
    <link rel="stylesheet" href="/gold/plugin/lightslider.css">
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
              <h2><?=$app_detail_tit?></h2>
              <div class="linkBox">
                <span class="line"></span>
                <span class="line"></span>
                <a href="/gold/pages/app/app.php">view all websites</a>
              </div>
           </div>

           <div class="detailCon">
              <div class="appFrameBox">
                <ul id="appMain">
                  <li>
                    <img src="/gold/data/app_page/app_main/<?=$app_detail_img?>" alt="">
                  </li>
                  <li>
                    <img src="/gold/data/app_page/app_main/app_main_002.jpg" alt="">
                  </li>
                  <li>
                    <img src="/gold/data/app_page/app_main/app_main_003.png" alt="">
                  </li>
                </ul>
                <span class="frameTop"></span>
                <span class="frameLeft"></span>
                <span class="frameRight"></span>
                <span class="frameBottom"></span>
              </div>
              <div class="storeBtns">
                <a href="#"><img src="/gold/img/app_store.png" alt=""></a>
                <a href="#"><img src="/gold/img/google_play.png" alt=""></a>
             </div>
              <p class="detailInfo">
                Project by Gold Dev. Team / <?=$app_detail_ser?> / used in <?=$app_detail_cli?> / <?=$app_detail_reg?>
              </p>

              <div class="detailDesc">
                <p><?=$app_detail_des?></p>
                <a href="/gold/index.php#contact"><i class="fa fa-arrow-right"></i> Get In Touch With ...</a>
              </div>
              <?php
              if($userlevel != 1){
              ?>
                <input type="hidden">
              <?php
              } else {
              ?>
                <div class="productAdminBtns">
                  <button type="button" onclick="location.href='/gold/pages/admin/update_product.php?key=app_update_form&num=<?=$app_detail_num?>'">수정</button>
                  <button type="button" onclick="confirmDel()">삭제</button>
                </div>
              <?php
                }
              ?>
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
      <script>
        function confirmDel(){
          let confirmCheck = confirm('정말로 삭제하시겠습니까?');
          if(confirmCheck == false){
            return false;
          } else {
            location.href='/gold/php_process/pages/app_detail_delete.php?num=<?=$app_detail_num?>';
          }
        }
      </script>          
                
      <script src="/gold/js/web_detail.js"></script>
      <script src="/gold/plugin/lightslider.js"></script>
      <script>
        $("#appMain").lightSlider({
        item:1,
        loop:true,
        keyPress:true,
        auto:true,
        speed:500,
        controls:false
       });
      </script>
  </body>
</html>
