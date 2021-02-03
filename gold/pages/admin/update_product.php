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
    <!-- design input css link -->
    <link rel="stylesheet" href="/gold/css/web_design_input.css" />
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
      <section class="contents upload hasTitle">
        <div class="center">
          <div class="title">
            <h2>update product</h2>
            <div class="linkBox">
              <span class="line"></span>
              <!-- <a href="#">view more details</a> -->
              <span class="line"></span>
            </div>
          </div>
          <!-- title end -->

          <?php 
          $include_path = $_GET['key'];
          include $_SERVER["DOCUMENT_ROOT"]."/gold/include/$include_path.php";
          ?>

        </div>
        <!-- center end -->
      </section>
      <?php include $_SERVER["DOCUMENT_ROOT"]."/gold/include/about.php"?>
      <?php include $_SERVER["DOCUMENT_ROOT"]."/gold/include/footer.php"?>
    </div>
    <script src="/gold/js/design_upload.js"></script>
  </body>
</html>
