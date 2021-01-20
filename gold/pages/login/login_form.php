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
    <link rel="stylesheet" href="/gold/css/login_form.css" />
    <!-- animation css link -->
    <link rel="stylesheet" href="/gold/css/animation.css" />
    <!-- media css link -->
    <link rel="stylesheet" href="/gold/css/media.css" />
    <!-- jquery framework -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <!-- main js link -->
    <script src="/gold/js/custom.js"></script>
    <!-- join check js
    <script src="/gold/js/join_check.js" defer></script> -->
  
  </head>
  <body>
    <div class="wrap">
      <?php include $_SERVER["DOCUMENT_ROOT"]."/gold/include/header.php" ?>
      <section class="contents login hasTitle">
        <div class="center">
          <div class="title">
            <h2>LOG IN</h2>
            <div class="linkBox">
              <span class="line"></span>
              <a href="#">view more details</a>
              <span class="line"></span>
            </div>
          </div>
          <form action="/gold/php_process/login/login.php" method="POST" name="loginForm">
            <div class="loginBox">
              <p><input type="text" placeholder="Enter Your ID" name="loginId"></p>
              <p><input type="password" placeholder="Enter Your PASSWORD" name="loginPass"></p>
              <div class="loginBtns">
                <a href="#" class="loginBtn">LOGIN</a>
                <a href="/gold/pages/join_form.php" class="joinBtn">JOIN US</a>
              </div>
            </div>
          </form>
          <!-- login Box end -->
          <div class="findInfo">
            <a href="">아이디 찾기</a>
            <a href="">비밀번호 찾기</a>
          </div>
        </div>
        <!-- center end -->
      </section>
      <?php include $_SERVER["DOCUMENT_ROOT"]."/gold/include/about.php"?>
      <?php include $_SERVER["DOCUMENT_ROOT"]."/gold/include/footer.php" ?>
    </div>
    <script>
      const loginBtn = document.querySelector('.loginBtn', loginCheck)
      loginBtn.addEventListener('click' , loginCheck);

      function loginCheck(){
        
        if(!document.loginForm.loginId.value){
          alert('아이디를 입력해주세요!');
          document.loginForm.loginId.focus();
          return;
        }
        if(!document.loginForm.loginPass.value){
          alert('비밀번호를 입력해주세요!');
          document.loginForm.loginPass.focus();
          return;
        }
        
        document.loginForm.submit();
      }

      (function(){
        document.addEventListener('keydown' , function(e){
          // 모든 키 중 하나를 눌렀을 때 
          // 누른 키를 저장
          const keyCode = e.keyCode;
          if(keyCode == 13){
            loginCheck();
            // 저장된 keyCode == enter(13) 이라면, loginCheck 함수를 실행
          }
        });
      })(); 
    </script>
  </body>
</html>
