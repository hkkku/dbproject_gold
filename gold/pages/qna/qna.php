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
            <h2>Q&A</h2>
            <div class="linkBox">
              <span class="line"></span>
              <a href="#">view more details</a>
              <span class="line"></span>
            </div>
          </div>          
          <div class="qnaBoxes deWeBoxes">           
            <div class="qnaTable">
              <ul class="qnaList">
                <!-- ajax code inside here -->                
              </ul>
            </div>
            <!-- qna table end -->

            <div class="searchPaging clear">
              <div class="search">
                <form action="/gold/pages/qna/qna_search_result.php" method="POST" name="qnaSearch" class="clear qnaSearch">
                  <select name="searchSelect" id="" class="searchSelect">
                    <option value="qnaSearchId">아이디</option>
                    <option value="qnaSearchTit">제목</option>
                  </select>
                  <input type="text" name="qnaSearchInput" class="qnaSearchInput" placeholder="검색어를 입력해 주세요.">
                  <button type="button" class="qnaSearchBtn"><i class="fa fa-search" onclick="search_check()"></i></button> 
                  <script>
                    function search_check(){
                      if(!document.qnaSearch.qnaSearchInput.value){
                        alert('검색어를 입력해 주세요.');
                        document.qnaSearch.qnaSearchInput.focus();
                        return;
                      }
                      document.qnaSearch.submit();
                    }
                  </script>
                </form>
              </div>
              <div class="paging">
                <span class="firstPg" onclick="goFirst()">
                  <i class="fa fa-angle-double-left"></i>
                </span>
                <span class="prevPg" onclick="goPrev()">
                  <i class="fa fa-angle-left"></i>
                </span>

                <?php
                  //database connect
                  include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php'; 
                  $sql = "select * from gold_qna order by GOLD_QNA_num desc";

                  $paging_result = mysqli_query($dbConn, $sql);  
                  $total_record = mysqli_num_rows($paging_result);
                  $scale = 5;

                  if($total_record % $scale == 0){
                    $total_page = floor($total_record/$scale);
                  } else {
                    $total_page = floor($total_record/$scale) + 1;
                  }

                  for($i=1; $i<=$total_page; $i++){
                  
                ?>

                <span class="pgNum" onclick="getPage(<?=$i?>)"><?=$i?></span>     
                
                <?php
                  }
                ?>
                <span class="nextPg" onclick="goNext()">
                  <i class="fa fa-angle-right"></i>
                </span>
                <span class="lastPg" onclick="goLast()">
                  <i class="fa fa-angle-double-right"></i>
                </span>
              </div>
            </div>
            <!-- searchpaging end -->
            <div class="writeBox clear">
              <div class="qnaGuide">
                <span>글쓰기</span>
                <?php
                  if($userid == ''){
                ?>
                  <span><a href="/gold/pages/login/login_form.php">로그인</a></span>
                <?php 
                 } else {
                ?>
                  <span><?=$userid?></span>
                <?php
                 }
                ?>
              </div>
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
              <button type="submit" class="qnaSubmit">등록</button>
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
    
    <script>
      const qnaSubmit = document.querySelector(".qnaSubmit");
      qnaSubmit.addEventListener('click', insertQna);
                
      
     

      function insertQna(){
        if(!document.writeForm.qnaTitle.value){
          alert("제목을 입력해 주세요.")
          document.writeForm.qnaTitle.focus();
          return;
        }
        if(!document.writeForm.qnaTxt.value){
          alert("내용을 입력해 주세요.")
          document.writeForm.qnaTxt.focus();
          return;
        }

        document.writeForm.submit();
        
      }
    </script>

    <!-- jquery framework -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/gold/js/web_design_page.js"></script>
    <script src="/gold/js/qna_ajax.js"></script>
    <!-- main js link -->
    <script src="/gold/js/custom.js"></script>
  </body>
</html>
