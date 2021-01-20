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

  </head>
  <body>
    <div class="wrap">
      <?php include $_SERVER["DOCUMENT_ROOT"]."/gold/include/header.php" ?>
      <section class="contents web hasTitle">
        <div class="center">
          <div class="title">
            <h2>WEB COLLECTION</h2>
            <div class="linkBox">
              <span class="line"></span>
              <a href="#">view more details</a>
              <span class="line"></span>
            </div>
          </div>
          
          <div class="webBoxes deWeBoxes">

            <?php
              // db connect
              include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php';
              $sql = "select * from gold_web order by GOLD_WEB_num desc";

              $web_result = mysqli_query($dbConn , $sql);

              while($web_row = mysqli_fetch_array($web_result)){
                $web_num = $web_row['GOLD_WEB_num'];
                $web_thumb_path = $web_row['GOLD_WEB_thumb'];
                $web_title = $web_row['GOLD_WEB_tit'];
                $web_desc = $web_row['GOLD_WEB_des'];
                $web_domain = $web_row['GOLD_WEB_dom'];
            ?>
              <div class="webBox deWeBox">
                <div>
                  <p class="webImg deWeImg">
                    <img src="/gold/data/web_page/thumb/<?=$web_thumb_path?>" alt="">
                  </p>
                  <div class="webTxt deWeTxt">
                    <h2><?=$web_title?></h2>
                    <em class="cutTxt"><?=$web_desc?></em>
                </div>
                <div class="webBoxBtns">
                    <a href="/gold/pages/web/web_detail.php?num=<?=$web_num?>">View Details</a>
                    <a href="//<?=$web_domain?>" target="_blank">View Website</a>
                </div>
                </div>
              </div>
              <!-- web box loop end --> 
            <?php
             } 
            ?>           
          </div>
          <!-- web boxes end -->
        
          <div class="btns">     

            <?php
              if($userlevel == 1){              
            ?>

            <a href="#" class="commonBtn webLoadMore">Load More</a>
            <a href="#" class="commonBtn toTop">Go to Top</a>
            <a href="/gold/pages/web/web_input_form.php" class="commonBtn">Upload Contents</a>

            <?php
             } else {
            ?>
 
            <a href="#" class="commonBtn webLoadMore">Load More</a>
            <a href="#" class="commonBtn toTop">Go to Top</a>

            <?php
             }
            ?>
          </div>

          
        </div>
        <!-- center end -->
      </section>
      <?php include $_SERVER["DOCUMENT_ROOT"]."/gold/include/about.php"?>
      <?php include $_SERVER["DOCUMENT_ROOT"]."/gold/include/footer.php"?>
    </div>
    
    <script>

    </script>

    <!-- jquery framework -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/gold/js/web_design_page.js"></script>
    <!-- main js link -->
    <script src="/gold/js/custom.js"></script>
  </body>
</html>
