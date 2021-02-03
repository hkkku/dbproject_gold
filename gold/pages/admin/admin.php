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
    <!-- admin page css link -->
    <link rel="stylesheet" href="/gold/css/design_web_app.css" />
    <link rel="stylesheet" href="/gold/css/qna.css" />
    <link rel="stylesheet" href="/gold/css/admin.css" />
    <!-- animation css link -->
    <link rel="stylesheet" href="/gold/css/animation.css" />
    <!-- media css link -->
    <link rel="stylesheet" href="/gold/css/media.css" />

  </head>
  <body>
    <div class="wrap">
      <?php include $_SERVER["DOCUMENT_ROOT"]."/gold/include/header.php"?>
      <?php
        if($userlevel != 1){
      ?>
        <div class="deny" style="width: 100%; height: auto; text-align: center; padding: 50px 0; font-family: 'Noto Sans KR'; color: #848484;">
          <p style="font size: 25px; font-weight: 600;">관리자 페이지 입니다. 관리자로 로그인 해 주세요.</p>
          <a href="/gold/pages/login/login_form.php" style="color: #fff; background: #D0AF51; padding: 10px 25px; margin-top: 10px; display: inline-block;">로그인</a>
        </div> 
      <?php   
        } else {
      ?>
        <section class="contents admin hasTitle">
          <div class="center">
            <div class="adminTabs">
              <button type="button" class="active">메세지 관리</button>
              <button type="button">회원 관리</button>
              <button type="button">Q&A 관리</button>
            </div>      
            <div class="msgTab deWeBoxes adminPanel">           
              <div class="adminTable">
                <ul class="adminList">
                  <li class="adminTitle clear">
                    <span class="msgNum">번호</span>
                    <span class="msgName">이름</span>
                    <span class="msgTit">제목</span>
                    <span class="msgReg">등록일</span>
                    <span class="msgEmail">이메일</span>
                  </li>   
                  
                  <?php
                  //database connect
                  include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php'; 
                  $sql = "select * from gold_msg order by GOLD_MSG_num desc limit 5";
                  $msg_result = mysqli_query($dbConn, $sql);

                  while($msg_row = mysqli_fetch_array($msg_result)){
                    $msg_num = $msg_row['GOLD_MSG_num'];
                    $msg_name = $msg_row['GOLD_MSG_name'];
                    $msg_tit = $msg_row['GOLD_MSG_tit'];
                    $msg_reg = $msg_row['GOLD_MSG_reg'];
                    $msg_email = $msg_row['GOLD_MSG_email'];
                  ?>
                  <li class="adminContents clear">
                    <span class="msgNum"><?=$msg_num?></span>
                    <span class="msgName"><?=$msg_name?></span>
                    <span class="msgTit"><a href="/gold/pages/admin/admin_view.php?num=<?=$msg_num?>"><?=$msg_tit?></a></span>
                    <span class="msgReg"><?=$msg_reg?></span>
                    <span class="msgEmail"><?=$msg_email?></span>
                    <span class="msgDelete"><a href="/gold/php_process/pages/msg_delete.php?num=<?=$msg_num?>"><i class="fa fa-trash"></i></a></span>
                  </li>  
                  <?php
                   }
                  ?>         
                </ul>
              </div>
              <!-- msg table end -->
              <div class="searchPaging clear">
                <div class="search">
                  <form action="/gold/pages/admin/search_result.php?key=msg_result" method="POST" name="adminSearch" class="clear adminSearch">
                    <select name="searchSelect" id="" class="searchSelect">
                      <option value="adminSearchId">이름</option>
                      <option value="adminSearchTit">제목</option>
                    </select>
                    <input type="text" name="adminSearchInput" class="adminSearchInput" placeholder="검색어를 입력해 주세요.">
                    <button type="button" class="adminSearchBtn"><i class="fa fa-search" onclick="admin_search_check()"></i></button> 
                    <script>
                      function admin_search_check(){
                        if(!document.adminSearch.adminSearchInput.value){
                          alert('검색어를 입력해 주세요.');
                          document.adminSearch.adminSearchInput.focus();
                          return;
                        }
                        document.adminSearch.submit();
                      }
                    </script>
                  </form>
                </div>
                <!-- search div end -->
              </div> 
              <!-- searchpage end -->
            </div> 
            <!-- msg tab end -->   
            <div class="memberTab deWeBoxes adminPanel">
              <div class="adminTable">
                 <ul class="adminList">
                   <li class="adminTitle clear">
                      <span class="memNum">번호</span>
                      <span class="memId">아이디</span>
                      <span class="memName">이름</span>
                      <span class="memLv">레벨</span>
                      <span class="memPt">포인트</span>
                      <!-- <span class="memUpdate">수정</span>
                      <span class="memDelete"><i class="fa fa-trash"></i></span> -->
                   </li>

                   <?php
                    $sql = "select * from gold_mem order by GOLD_mem_num desc limit 5";
                    $mem_result = mysqli_query($dbConn, $sql);

                    while($mem_row = mysqli_fetch_array($mem_result)){
                      $mem_num = $mem_row['GOLD_mem_num'];
                      $mem_id = $mem_row['GOLD_mem_id'];
                      $mem_name = $mem_row['GOLD_mem_name'];
                      $mem_level = $mem_row['GOLD_mem_level'];
                      $mem_point = $mem_row['GOLD_mem_point'];
                   ?>
                      <li class="adminContents clear">
                        <form action="/gold/php_process/pages/mem_update.php?num=<?=$mem_num?>" method="POST">
                          <span class="memNum"><?=$mem_num?></span>
                          <span class="memId"><?=$mem_id?></span>
                          <span class="memName"><?=$mem_name?></span>
                          <span class="memLv"><input type="text" value="<?=$mem_level?>" name="level"></span>
                          <span class="memPt"><input type="text" value="<?=$mem_point?>" name="point"></span>
                          <span class="memUpdate"><button type="submit"><i class="fa fa-edit"></i></button></span>
                          <span class="memDelete"><button type="button" onclick="location.href='/gold/php_process/pages/mem_delete.php?num=<?=$mem_num?>'"><i class="fa fa-trash"></i></button></span>
                        </form>
                      </li>
                    <?php
                      }
                   ?> 
                 </ul>     
              </div>
              <div class="searchPaging clear">
                <div class="search">
                  <form action="/gold/pages/admin/search_result.php?key=mem_result" method="POST" name="memSearch" class="clear adminSearch">
                    <select name="searchSelect" id="" class="searchSelect">
                      <option value="memSearchId">아이디</option>
                      <option value="memSearchName">이름</option>
                    </select>
                    <input type="text" name="memSearchInput" class="adminSearchInput" placeholder="검색어를 입력해 주세요.">
                    <button type="button" class="adminSearchBtn"><i class="fa fa-search" onclick="mem_search_check()"></i></button> 
                    <script>
                      function mem_search_check(){
                        if(!document.memSearch.memSearchInput.value){
                          alert('검색어를 입력해 주세요.');
                          document.memSearch.memSearchInput.focus();
                          return;
                        }
                        document.memSearch.submit();
                      }
                    </script>
                  </form>
                </div>
                <!-- search div end -->
              </div> 
              <!-- searchpage end -->
            </div>
            <!-- member tab end  -->
                    
            <div class="qnaTab deWeBoxes adminPanel">
              <div class="adminTable">
                <ul class="adminList">
                  <li class="adminTitle clear">
                      <span class="qnaCheck">선택</span>
                      <span class="qnaNum">번호</span>
                      <span class="qnaId">아이디</span>
                      <span class="qnaTit">제목</span>
                      <span class="qnaReg">등록일</span>
                      <span class="qnaHit">조회수</span>
                  </li>
                  <form action="/gold/php_process/pages/qna_check_delete.php" method="POST" name="adminQnaDelete">
                    <?php
                      // db connect
                      include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php';
                      $sql = "select * from gold_qna order by GOLD_QNA_num desc limit 5";

                      $qna_result = mysqli_query($dbConn, $sql);  

                      while($qna_row = mysqli_fetch_array($qna_result)){
                        $qna_res_num = $qna_row['GOLD_QNA_num'];
                        $qna_res_id = $qna_row['GOLD_QNA_id'];
                        $qna_res_tit = $qna_row['GOLD_QNA_tit'];
                        $qna_res_reg = $qna_row['GOLD_QNA_reg'];
                        $qna_res_hit = $qna_row['GOLD_QNA_hit'];
                    ?>
                      <li class="adminContents clear">
                        <span class="qnaCheck"><input type="checkbox" name="item[]" value="<?=$qna_res_num?>"></span>
                        <span class="qnaNum"><?=$qna_res_num?></span>
                        <span class="qnaId"><?=$qna_res_id?></span>
                        <?php
                          $sql = "select * from gold_ans where GOLD_ANS_QNA_num = $qna_res_num order by GOLD_ANS_num desc";
                          $ans_res = mysqli_query($dbConn, $sql);
                          // 있으면 숫자만 받아오는 rows
                          $is_ans_res = mysqli_num_rows($ans_res);
                          
                          if(!$is_ans_res){
                        ?>
                          <span class="qnaTit"><a href="/gold/pages/qna/qna_view.php?num=<?=$qna_res_num?>"><?=$qna_res_tit?></a></span>
                        <?php
                          } else {
                        ?> 
                          <span class="qnaTit"><a href="/gold/pages/qna/qna_view.php?num=<?=$qna_res_num?>"><?=$qna_res_tit?> [답변 완료] </a></span>   
                        <?php
                          }
                        ?>
                        <span class="qnaReg"><?=$qna_res_reg?></span>
                        <span class="qnaHit"><?=$qna_res_hit?></span>
                      </li>
                    <?php
                      }
                    ?>
                  </form>
                </ul>
              </div>  
              <!-- admin table end -->
             
              <div class="searchPaging clear">
                <button class="checkDeleteBtn" type="button" onclick="qnaCheckDelete()"><i class="fa fa-trash"></i>　선택 삭제</button>
                <div class="search">
                  <form action="/gold/pages/admin/search_result.php?key=qna_result" method="POST" name="qnaSearch" class="clear adminSearch">
                    <select name="searchSelect" id="" class="searchSelect">
                      <option value="qnaSearchId">아이디</option>
                      <option value="qnaSearchTit">제목</option>
                    </select>
                    <input type="text" name="qnaSearchInput" class="adminSearchInput" placeholder="검색어를 입력해 주세요.">
                    <button type="button" class="adminSearchBtn"><i class="fa fa-search" onclick="qna_search_check()"></i></button> 
                    <script>
                      function qna_search_check(){
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
                <!-- search div end -->
              </div> 
              <!-- searchpage end -->
            </div>
            <!-- qna tab end -->
            <script>
              function qnaCheckDelete(){
                document.adminQnaDelete.submit();
              }
            </script> 
          </div>
          <!-- center end -->
        </section>
      <?php
        }
      ?>
      <?php include $_SERVER["DOCUMENT_ROOT"]."/gold/include/about.php"?>
      <?php include $_SERVER["DOCUMENT_ROOT"]."/gold/include/footer.php"?>
    </div>

    <!-- jquery framework -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/gold/js/web_design_page.js"></script>
    <script src="/gold/js/admin.js"></script>
    <!-- main js link -->
    <script src="/gold/js/custom.js"></script>
  </body>
</html>
