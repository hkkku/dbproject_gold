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
    <link rel="stylesheet" href="css/style.css" />
    <!-- animation css link -->
    <link rel="stylesheet" href="css/animation.css" />
    <!-- media css link -->
    <link rel="stylesheet" href="css/media.css" />
    <!-- jquery framework -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- main js link -->
    <script src="js/custom.js"></script>
  </head>
  <body>
    <div class="wrap">

      <?php include $_SERVER["DOCUMENT_ROOT"]."/gold/include/header.php"?>
      <!-- new arrival section -->
      <section class="contents arrivals">
        <div class="center clear">
          <!-- title width common style -->
          <div class="title">
            <h2>NEW ARRIVALS</h2>
            <div class="linkBox">
              <span class="line"></span>
              <a href="#">view all products</a>
            </div>
          </div>
          <!-- title width common style end -->

          <?php
            include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php';
          ?>
          <!-- db connect -->
          <div class="arrivalBox">
            <div class="arrivalCon">
              <img src="img/new-arrival-1.jpg" alt="" />
              <span class="overlay"></span>
              <div class="arrivalTxt">
                <h2>SUMMER</h2>
                <em>COLLECTION</em>
              </div>
            </div>
            <div class="arrivalCon">
              <img src="img/new-arrival-2.jpg" alt="" />
              <span class="overlay"></span>
              <div class="best">
                <a href="#">BEST</a>
                <p>QUALITY</p>
              </div>
            </div>
            <div class="arrivalCon">
              <img src="img/new-arrival-3.jpg" alt="" />
              <span class="overlay"></span>
              <div class="arrivalTxt">
                <h2>AUTUMN</h2>
                <em>COLLECTION</em>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- new arrival section end -->
      <!-- product section -->
      <section class="contents product">
        <div class="center clear">
          <div class="title">
            <h2>DESIGN PROJECTS</h2>
            <div class="linkBox">
              <span class="line"></span>
              <a href="#">view all products</a>
            </div>
          </div>
          <!-- end of commontitle -->
          <div class="productBox clear">
            <div class="boxLeft">
              <?php
                include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php';
                $sql = "select * from gold_de order by GOLD_DE_num desc limit 4";
                $design_result = mysqli_query($dbConn, $sql);

                while ($row_result = mysqli_fetch_array($design_result)){
                  $design_thumb = $row_result['GOLD_DE_thumb'];
              ?>
              <!-- sql select 4 photos from db -->
                <div class="productImg">
                  <img src="/gold/data/design_page/thumb/<?=$design_thumb?>" alt="" />
                  <span class="outline"><i class="fa fa-search"></i></span>
                </div>
              <?php
               }
              ?>
            </div>

            <div class="boxRight">
              <?php
                $sql = "select * from gold_de order by GOLD_DE_num desc limit 4";
                $result_design = mysqli_query($dbConn, $sql);
                while ($row_result = mysqli_fetch_array($result_design)){
                  $design_num = $row_result['GOLD_DE_num'];
                  $design_tit = $row_result['GOLD_DE_tit'];
                  $design_desc = $row_result['GOLD_DE_des'];
              ?>                 
                <div class="productTxt">
                  <div>
                    <h2><?=$design_tit?></h2>
                    <p><?=$design_desc?></p>
                    <a href="/gold/pages/design/design_detail.php?num=<?=$design_num?>">view more</a>
                  </div>
                </div>
              <?php
               }
              ?>
            </div>
            <!-- box right end -->
          </div>
          <!-- product box end -->
        </div>
      </section>
      <!-- product section end -->
      <!-- ours section -->
      <section class="contents ours">
        <div class="center clear">
          <div class="title">
            <h2>WEB & APP PREVIEW</h2>
            <div class="linkBox">
              <span class="line"></span>
              <a href="#">view all products</a>
            </div>
          </div>
          <div class="fashionBox men">
            <div class="fashionTxt">
              <h2><em>WEB</em> PROJECTS</h2>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting
              </p>
              <a href="/gold/pages/web/web.php">view more</a>
            </div>

            <?php
              include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php';
              $sql = "select * from gold_web order by GOLD_WEB_num desc limit 3";
              $web_result = mysqli_query($dbConn, $sql);
              
              while ($web_row = mysqli_fetch_array($web_result)){
                $web_num = $web_row['GOLD_WEB_num'];
                $web_thumb = $web_row['GOLD_WEB_thumb'];
                $web_title = $web_row['GOLD_WEB_tit'];
                $web_desc = $web_row['GOLD_WEB_des'];
            ?>

            <div class="fashionImg">
              <div>
                <img src="/gold/data/web_page/thumb/<?=$web_thumb?>" alt="" />
                <h2><?=$web_title?></h2>
                <em class="cutTxt"><?=$web_desc?></em>
                <a href="/gold/pages/web/web_detail.php?num=<?=$web_num?>">View Details</a>
              </div>
            </div>
            <!-- fashion img loop box -->
            
            <?php
             }
            ?> 
          </div>
          <!-- end of web project -->
          <div class="fashionBox women">
            <div class="fashionTxt">
              <h2><em>APP</em> PROJECTS</h2>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting
              </p>
              <a href="/gold/pages/app/app.php">view more</a>
            </div>

            <?php
              // include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php';
              $sql = "select * from gold_app order by GOLD_APP_num desc limit 3";
              $app_result = mysqli_query($dbConn, $sql);
              
              while ($app_row = mysqli_fetch_array($app_result)){
                $app_num = $app_row['GOLD_APP_num'];
                $app_thumb = $app_row['GOLD_APP_thumb'];
                $app_title = $app_row['GOLD_APP_tit'];
                $app_desc = $app_row['GOLD_APP_des'];
            ?>

              <div class="fashionImg">
                <div>
                  <img src="/gold/data/app_page/app_thumb/<?=$app_thumb?>" alt="" />
                  <h2><?=$app_title?></h2>
                  <em class="cutTxt"><?=$app_desc?></em>
                  <a href="/gold/pages/app/app_detail.php?num=<?=$app_num?>">View Details</a>
                </div>
              </div>
              <!-- app box loop end -->

            <?php
             }
            ?> 

          </div>
          <!-- end of app project -->
        </div>
      </section>
      <!-- preview section end-->
      
      <?php include $_SERVER["DOCUMENT_ROOT"]."/gold/include/about.php"?>

      <!-- contact section -->
      <section class="contents contact hasTitle">
        <div class="center clear">
          <div class="title clear">
            <h2>CONTACT US</h2>
          </div>
          <div class="contactBox">
            <div class="mapBox">
              <div class="map">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d358560.62805671996!2d12.10647059062783!3d45.40419908823506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477eb1daf1d63d89%3A0x7ba3c6f0bd92102f!2z7J207YOI66as7JWEIOuyoOuEpOy5mOyVhCDrsqDri4jsiqQ!5e0!3m2!1sko!2skr!4v1608270301283!5m2!1sko!2skr"
                ></iframe>
              </div>
            </div>
            <div class="formBox">
              <form action="/gold/php_process/pages/msg_insert.php" method="post" class="form" name="msgForm">
                <p class="nameMail">
                  <input type="text" name="msgName" placeholder="Your Name" />
                  <input type="text" name="msgEmail" placeholder="Your EMail" />
                </p>
                <p class="subject">
                  <input type="text" name="msgTit" placeholder="Subject" />
                </p>
                <p class="message">
                  <textarea placeholder="Your Message" name="msgTxt"></textarea>
                </p>
                <button type="button" class="msgSend">SEND MESSAGE</button>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- contact section end -->
      <?php include $_SERVER["DOCUMENT_ROOT"]."/gold/include/footer.php"?>
    </div>
    <script>
      $(function(){
        // get in touch with move scroll to contact section
        const loca = $(location).attr('href').split('#')[1];

        if(loca == 'contact'){
          const contactOff = $(`.${loca}`).offset().top;
          // const contactOff = $('#' + loca).offset().top;

          $("html, body").animate({scrollTop:contactOff}, 1500, 'easeInQuint');
        }
        
        //cutting text web 
        // cutting text function 
        let mainWebBox = $(".fashionImg");

        for(let i = 0; i < mainWebBox.length; i ++){
          let allTxt = mainWebBox.eq(i).find(".cutTxt").text();

          function cutTxt(){
            let winWidth = $(window).width();
            if(winWidth < 800){
              mainWebBox.eq(i).find(".cutTxt").text(allTxt.substr(0, 20) + '...');
            } else {
              mainWebBox.eq(i).find(".cutTxt").text(allTxt.substr(0, 40) + '...');
            }
          }

          $(window).resize(function(){
            cutTxt()
          });
          
          cutTxt()
        }

      });
    </script>

    <script>
      const msgSend = document.querySelector(".msgSend");
      msgSend.addEventListener('click', insertMsg);
                
      function insertMsg(){
        if(!document.msgForm.msgName.value){
          alert("작성자를 입력해 주세요.")
          document.msgForm.msgName.focus();
          return;
        }
        if(!document.msgForm.msgEmail.value){
          alert("이메일을 입력해 주세요.")
          document.msgForm.msgEmail.focus();
          return;
        }
        if(!document.msgForm.msgTit.value){
          alert("메시지 제목을 입력해 주세요.")
          document.msgForm.msgTit.focus();
          return;
        }
        if(!document.msgForm.msgTxt.value){
          alert("메시지 내용을 입력해 주세요.")
          document.msgForm.msgTxt.focus();
          return;
        }

        document.msgForm.submit();
        
      }
    </script>
  </body>
</html>
