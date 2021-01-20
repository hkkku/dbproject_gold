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
      <section class="contents app hasTitle">
        <div class="center">
          <div class="title">
            <h2>APP COLLECTION</h2>
            <div class="linkBox">
              <span class="line"></span>
              <a href="#">view more details</a>
              <span class="line"></span>
            </div>
          </div>
          
          <div class="appBoxes deWeBoxes">            
            <div class="appBox-sizer"></div>
            <div class="appBox">
              <div>
                <img src="/gold/img/app_thumb/app_001.png" alt="">
                <h2>Calory Checker</h2>
                <a href="#">View Details</a>
              </div>
            </div> 
          </div>

          <!-- web boxes end -->
        
          <div class="btns">     

            <?php
              if($userlevel == 1){              
            ?>

            <a href="#" class="commonBtn appLoadMore">Load More</a>
            <a href="#" class="commonBtn toTop">Go to Top</a>
            <a href="/gold/pages/app/app_input_form.php" class="commonBtn">Upload Contents</a>

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
    


    <!-- jquery framework -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/gold/js/web_design_page.js"></script>
    <!-- masonry plugin -->
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <!-- app js link -->
    <script src="/gold/js/app.js"></script>
    <!-- main js link -->
    <script src="/gold/js/custom.js"></script>
    <script>

    </script>
  </body>
</html>
