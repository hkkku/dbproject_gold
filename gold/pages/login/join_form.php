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
    <link rel="stylesheet" href="/gold/css/join_form.css" />
    <!-- animation css link -->
    <link rel="stylesheet" href="/gold/css/animation.css" />
    <!-- media css link -->
    <link rel="stylesheet" href="/gold/css/media.css" />
    <!-- jquery framework -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <!-- main js link -->
    <script src="/gold/js/custom.js"></script>
    <!-- join check js -->
    <script src="/gold/js/join_check.js" defer></script>
  </head>
  <body>
    <div class="wrap">
      <?php include $_SERVER["DOCUMENT_ROOT"]."/gold/include/header.php" ?>
      <section class="contents join hasTitle">
        <div class="center">
          <div class="title">
            <h2>JOIN US</h2>
            <div class="linkBox">
              <span class="line"></span>
              <a href="#">view more details</a>
              <span class="line"></span>
            </div>
          </div>
          <!-- join box section -->
          <div class="joinBox">
            <form action="/gold/php_process/login/insertMembers.php" method="POST" name="memberForm">
              <p class="idInputBox inputBox">
                <label for="id">ID</label>
                <input type="text" name="id" class="columnTitle" id="id" placeholder="Your ID">
                <button type="button" name="button" class="columnTitle" id="idCheck">Check</button>
              </p>
              
              <p class="nameInputBox inputBox">
               <label for="name">NAME</label>
               <input type="text" name="name" class="columnTitle" id="name" placeholder="Your NAME">
              </p>

              <p class="passInputBox inputBox">
               <label for="pass">PASSWORD</label>
               <input type="password" name="pass" class="columnTitle" id="pass" placeholder="Your PASSWORD">
              </p>

              <p class="checkInputBox inputBox">
               <label for="check">PASSWORD Check</label>
               <input type="password" name="check" class="columnTitle" id="check" placeholder="Check Your PASSWORD">
              </p>

              <p class="emailInputBox inputBox">
               <label for="email1">E-mail</label>
               <input type="text" name="email1" class="email1" id="email1" placeholder="Your E-mail ID">
               <span>@</span>
               <input type="text" name="email2" class="email2" id="email2" placeholder="Your E-mail Address">
              </p>

              <div class="formBtns">
                <button type="button" class="sendBtn">SEND</button>
                <button type="button" class="resetBtn">RESET</button>
              </div>

            </form>
          </div>
          <!-- join box end -->
        </div>
        <!-- center end -->
      </section>
      <?php include $_SERVER["DOCUMENT_ROOT"]."/gold/include/about.php"?>
      <?php include $_SERVER["DOCUMENT_ROOT"]."/gold/include/footer.php" ?>
    </div>
    <script>
      $(function(){
        $("#idCheck").click(function(){
          const url = '/gold/php_process/login/member_check_id.php?id=' + $("#id").val();
          $.get(url, function(data){
            //url에 접근 
            alert(data);
          });
        });
      });
    </script>
  </body>
</html>
