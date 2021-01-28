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
            
            <?php
              $ans_num = $_GET['num'];
              //database connect
              include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php';
              $sql = "select * from gold_qna where GOLD_QNA_num = $ans_num";

              $ans_result = mysqli_query($dbConn , $sql);
              $ans_row = mysqli_fetch_array($ans_result);

              $ans_id = $ans_row['GOLD_QNA_id'];
              $ans_tit = $ans_row['GOLD_QNA_tit'];
              $ans_con = $ans_row['GOLD_QNA_con'];
              $ans_reg = $ans_row['GOLD_QNA_reg'];
              $ans_hit = $ans_row['GOLD_QNA_hit'];

              $new_hit = $ans_hit + 1;

              $sql = "update gold_qna set GOLD_QNA_hit = $new_hit where GOLD_QNA_num = $ans_num";
              mysqli_query($dbConn , $sql);
  
            ?>
            <div class="writerInfo">
              <p>Posted by <?=$ans_id?> / No. <?=$ans_num?> / <?=$ans_reg?> / <?=$ans_hit?>hits</p>
            </div>
            <div class="writeBox clear">
              <form action="/gold/php_process/pages/qna_update.php?num=<?=$ans_num?>" method="POST" class="writeForm" name="ansForm">
                <p class="qnaTitInput">
                  <label for="ansTitle">제목</label>
                  <input type="text" name="ansTitle" id="ansTitle" placeholder="제목을 입력해 주세요." value="<?=$ans_tit?>">
                  <p class="qnaTxtInput">
                    <textarea name="ansTxt" placeholder="내용을 입력해 주세요."><?=$ans_con?></textarea>
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
               
              <button type="submit" class="ansUpdate" onclick="ansUpdate()">수정</button>
              <a href="/gold/pages/qna/qna.php">돌아가기</a>
              <?php
                }
              ?> 
            </div>
            <!-- writebox end -->
            <?php
              $ans_num = $_GET['num'];
              //database connect
              include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php';
              $sql = "select * from gold_ans where GOLD_ANS_QNA_num = $ans_num order by GOLD_ANS_num desc";

              $rep_result = mysqli_query($dbConn , $sql);
              
              while($rep_row = mysqli_fetch_array($rep_result)){ 
                $rep_con = $rep_row['GOLD_ANS_con'];
            ?>
              <div class="ansResult">
                <p class="adminId">관리자</p>
                <p class="ansResultTxt"><?=$rep_con?></p>
              </div>  
            <?php
              }
            ?>  

            <!-- answer result box end     -->
            <div class="answerBox">
              <form action="/gold/php_process/pages/ans_insert.php?num=<?=$ans_num?>" method="POST" name="ansInputForm" class="ansInputForm">
                <textarea name="ansInputTxt" placeholder="답글을 작성해 주세요." class="ansInputTxt"></textarea>
                <p class="ansBtnBox">
                  <?php
                  if($userid == ''){
                  ?>
                    <button type="button" onclick="plzLogin()">등록</button>
                  <?php    
                   } else {
                  ?>
                    <button type="button" class="ansBtn" onclick="reply()">답글 달기</button>
                 <?php
                   }
                 ?> 
                </p>
              </form>
            </div>
          </div>
          <!-- answer boxes end -->                  
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
    <script>
      function plzLogin(){
        alert('글쓰기를 하시려면 로그인이 필요합니다.');
      }
      // const ansBtn = document.querySelector(".ansBtn");
      // ansBtn.addEventListener('click', insertAns);
                
      function ansUpdate(){
        if(!document.ansForm.ansTitle.value){
          alert("제목을 입력해 주세요.");
          document.ansForm.ansTitle.focus();
          return;
        }
        if(!document.ansForm.ansTxt.value){
          alert("내용을 입력해 주세요.");
          document.ansForm.ansTxt.focus();
          return;
        }

      document.ansForm.submit();
      }

      function reply(){

        if(!document.ansInputForm.ansInputTxt.value){
          alert("내용을 입력해 주세요.");
          document.ansInputForm.ansInputTxt.focus();
          return;
        }

      document.ansInputForm.submit();
      }
    </script>
  </body>
</html>
