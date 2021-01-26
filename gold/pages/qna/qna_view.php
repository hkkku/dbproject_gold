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
    <!-- qna page css link -->
    <link rel="stylesheet" href="/gold/css/design_web_app.css" />
    <link rel="stylesheet" href="/gold/css/qna.css" />
    <!-- animation css link -->
    <link rel="stylesheet" href="/gold/css/animation.css" />
    <!-- media css link -->
    <link rel="stylesheet" href="/gold/css/media.css" />

  </head>
  <body>
    <div class="wrap">
      <?php include $_SERVER["DOCUMENT_ROOT"]."/gold/include/header.php" ?>
      <section class="contents qna hasTitle">
        <div class="center">
          <div class="title">
            <h2>View Inquiry</h2>
            <div class="linkBox">
              <span class="line"></span>
              <a href="#">view more details</a>
              <span class="line"></span>
            </div>
          </div>          
          <div class="qnaBoxes qnaView deWeBoxes">           
            <div class="writerInfo">
              <p>Posted by hkkku No.13 / 2021-01-26 / 35 hits</p>
            </div>
            <div class="writeBox clear">
              
              <form action="/gold/php_process/pages/qna_insert.php?id=<?=$userid?>" method="POST" class="writeForm" name="writeForm">
                <p class="qnaTitInput">
                  <label for="qnaTitle">제목</label>
                  <input type="text" name="qnaTitle" id="qnaTitle" placeholder="제목을 입력해 주세요.">
                  <p class="qnaTxtInput">
                    <textarea name="qnaTxt" placeholder="내용을 입력해 주세요."></textarea>
                  </p>
                </p>
              </form>
              <?php
                if($userid == ''){
              ?>
                <button type="submit" onclick="plzLogin()">등록</button>
              <?php    
                } else {
              ?>
              <button type="submit" class="">돌아가기</button>
              <button type="submit" class="">수정</button>
              <?php
                }
              ?> 
            </div>
          </div>
          <!-- web boxes end -->                  
        </div>
        <!-- center end -->
      </section>
      <?php include $_SERVER["DOCUMENT_ROOT"]."/gold/include/about.php"?>
      <?php include $_SERVER["DOCUMENT_ROOT"]."/gold/include/footer.php"?>
    </div>
    


    <!-- jquery framework -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/gold/js/web_design_page.js"></script>
    <!-- main js link -->
    <script src="/gold/js/custom.js"></script>
  </body>
</html>
