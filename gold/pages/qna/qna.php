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
            <h2>Your Inquiry</h2>
            <div class="linkBox">
              <span class="line"></span>
              <a href="#">view more details</a>
              <span class="line"></span>
            </div>
          </div>          
          <div class="qnaBoxes deWeBoxes">           
            <div class="qnaTable">
              <ul class="qnaList">
                <li class="qnaTitle clear">
                  <span class="qnaNum">고유번호</span>
                  <span class="qnaId">아이디</span>
                  <span class="qnaTit">제목</span>
                  <span class="qnaReg">등록일</span>
                  <span class="qnaHit">조회수</span>
                </li>
                <li class="qnaCon clear">
                  <span class="qnaNum">1</span>
                  <span class="qnaId">hkkku</span>
                  <span class="qnaTit"><a href="#">test 게시글</a></span>
                  <span class="qnaReg">2021-01-22</span>
                  <span class="qnaHit">31</span>
                </li>
                <li class="qnaCon clear">
                  <span class="qnaNum">2</span>
                  <span class="qnaId">gkrud</span>
                  <span class="qnaTit"><a href="#">test 게시글2</a></span>
                  <span class="qnaReg">2021-01-22</span>
                  <span class="qnaHit">38</span>
                </li>
                <li class="qnaCon clear">
                  <span class="qnaNum">3</span>
                  <span class="qnaId">gkrud23</span>
                  <span class="qnaTit"><a href="#">test 게시글3</a></span>
                  <span class="qnaReg">2021-01-22</span>
                  <span class="qnaHit">34</span>
                </li>
              </ul>
            </div>
            <!-- qna table end -->

            <div class="searchPaging clear">
              <div class="search">
                <form action="abc.php" name="qnaSearch" class="clear">
                  <select name="searchSelect" id="" class="searchSelect">
                    <option value="qnaSearchId">아이디</option>
                    <option value="qnaSearchTit">제목</option>
                  </select>
                  <input type="text" name="qnaSearchInput" class="qnaSearchInput" placeholder="검색어를 입력해 주세요.">
                  <button type="button" class="qnaSearchBtn"><i class="fa fa-search"></i></button> 
                </form>
              </div>
              <div class="paging">
                <span class="firstPg">
                  <i class="fa fa-angle-double-left"></i>
                </span>
                <span class="prevPg">
                  <i class="fa fa-angle-left"></i>
                </span>
                <span class="pgNum active">1</span>
                <span class="pgNum">2</span>
                <span class="nextPg">
                  <i class="fa fa-angle-right"></i>
                </span>
                <span class="lastPg">
                  <i class="fa fa-angle-double-right"></i>
                </span>
              </div>
            </div>
            <!-- searchpaging end -->
            <div class="writeBox">
              <form action="abc.php" method="POST">
                <input type="text" placeholder="제목을 작성해 주세요.">
                <input type="text" placeholder="질문을 작성해 주세요.">
                <button class="writeBtn">글쓰기</button>                
              </form>
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

    </script>

    <!-- jquery framework -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/gold/js/web_design_page.js"></script>
    <!-- main js link -->
    <script src="/gold/js/custom.js"></script>
  </body>
</html>
