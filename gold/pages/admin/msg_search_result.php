
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
    <link rel="stylesheet" href="/gold/css/admin.css" />
    <!-- animation css link -->
    <link rel="stylesheet" href="/gold/css/animation.css" />
    <!-- media css link -->
    <link rel="stylesheet" href="/gold/css/media.css" />

  </head>
  <body>
    <div class="wrap">
      <?php include $_SERVER["DOCUMENT_ROOT"]."/gold/include/header.php" ?>
      <section class="contents admin hasTitle">
        <div class="center">
          <div class="title">
            <h2>Message Search Result</h2>
            <div class="linkBox">
              <span class="line"></span>
              <a href="#">view more details</a>
              <span class="line"></span>
            </div>
          </div>          
          <div class="msgTab deWeBoxes adminPanel">           
           
            <div class="msgTable">
              <ul class="msgList">
                <li class="msgTitle clear">
                  <span class="msgNum">번호</span>
                  <span class="msgName">이름</span>
                  <span class="msgTit">제목</span>
                  <span class="msgReg">등록일</span>
                  <span class="msgEmail">이메일</span>
                </li>   


                <?php
                  $msg_search_select = $_POST['searchSelect'];
                  $msg_search_input = $_POST['adminSearchInput'];

                  // db connect
                  include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php';
                  
                  if($msg_search_select == 'adminSearchId'){
                    $sql = "select * from gold_msg where GOLD_MSG_name LIKE '%$msg_search_input%' order by GOLD_MSG_num desc";
                  } else {
                    $sql = "select * from gold_msg where GOLD_MSG_tit LIKE '%$msg_search_input%' order by GOLD_MSG_num desc";
                  }

                  $msg_search_result = mysqli_query($dbConn, $sql);
                  $msg_search_result_num = mysqli_num_rows($msg_search_result);

                  if(!$msg_search_result_num){
                    echo "<li style='padding:10px; width:100%; text-align:center; color:#848484;'>데이터가 존재하지 않습니다. 검색 조건 및 검색어를 확인해주세요.</li>";
                  } else {

                    while($msg_search_result_row = mysqli_fetch_array($msg_search_result)){
                      $msg_result_num = $msg_search_result_row['GOLD_MSG_num'];
                      $msg_result_name = $msg_search_result_row['GOLD_MSG_name'];
                      $msg_result_tit = $msg_search_result_row['GOLD_MSG_tit'];
                      $msg_result_reg = $msg_search_result_row['GOLD_MSG_reg'];
                      $msg_result_email = $msg_search_result_row['GOLD_MSG_email'];
                ?>

                    <li class="msgContents clear">
                      <span class="msgNum"><?=$msg_result_num?></span>
                      <span class="msgName"><?=$msg_result_name?></span>
                      <span class="msgTit"><?=$msg_result_tit?></span>
                      <span class="msgReg"><?=$msg_result_reg?></span>
                      <span class="msgEmail"><?=$msg_result_email?></span>
                      <span class="msgDelete"><a href="/gold/php_process/pages/msg_delete.php?num=<?=$msg_num?>"><i class="fa fa-trash"></i></a></span>
                    </li>     

                <?php
                    }
                  }
                ?>       
              </ul>
            </div>
            <!-- qna table end -->
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
