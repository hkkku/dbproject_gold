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
            <h2>DESIGN COLLECTION</h2>
            <div class="linkBox">
              <span class="line"></span>
              <!-- <a href="#">view more details</a> -->
              <span class="line"></span>
            </div>
          </div>

          <!-- design input contents form -->
          <div class="designInputForm webDesignInput">
            <form action="/gold/php_process/pages/design_insert.php" method="POST" name="design_form" enctype="multipart/form-data">
              <div class="titleSer clear">
                <p class="title_input">
                  <label for="title">Title</label>
                  <input type="text" placeholder="Title Here" id="title" name="design_title">
                </p>
                <p class="serial_input">
                  <label for="serial">SerialNo.</label>
                  <input type="text" placeholder="SerialNo. Here" id="serial" name="design_serial">
                </p>
                <p class="client_input">
                  <label for="client">Client</label>
                  <input type="text" placeholder="Client Here" id="client" name="design_client">
                </p>
              </div>
              <!-- title/serial/client end -->
              <div class="design_desc uploadDesc">
                <textarea name="design_desc" placeholder="Design description here"></textarea>
              </div>
              <!-- text description end -->
              <div class="uploadImg clear">
                <div class="uploadBox img1">
                  <div class="inputControl">
                    <input class="uploadName" placeholder = "Main image">
                    <label for="mainImage">SELECT IMAGE</label>
                    <input type="file" id="mainImage" class="uploadHidden" name="main" accept="image/*" value = 1>
                  </div>
                  <div class="img1_box imgWrap">
                    <img id="img1">
                  </div>
                </div>
                <div class="uploadBox img2">
                  <div class="inputControl">
                    <input class="uploadName" placeholder = "Sub image">
                    <label for="subImage">SELECT IMAGE</label>
                    <input type="file" id="subImage" class="uploadHidden" name="sub" accept="image/*" value = 1>
                  </div>
                  <div class="img2_box imgWrap">
                    <img id="img2">
                  </div> 
                </div>
                <div class="uploadBox img3">
                  <div class="inputControl">
                    <input class="uploadName" placeholder = "Thumbnail image(400*400)">
                    <label for="thumbImage">SELECT IMAGE</label>
                    <input type="file" id="thumbImage" class="uploadHidden" name="thumbnail" accept="image/*" value = 1>
                  </div>
                  <div class="thumb_box imgWrap">
                    <img id="thumb">
                  </div> 
                </div>
              </div>
              <!-- image uploadbox end -->
              <div class="registDay"></div>
            </form>
          </div>
          <!-- design inputform end -->
          <div class="btns">
           <button type="button" class="commonBtn" id="submitBtn">UPLOAD</button>
          </div>
        </div>
        <!-- center end -->
      </section>
      <?php include $_SERVER["DOCUMENT_ROOT"]."/gold/include/about.php"?>
      <?php include $_SERVER["DOCUMENT_ROOT"]."/gold/include/footer.php"?>
    </div>
    <script src="/gold/js/design_upload.js"></script>
    <script>
      const submitBtn = document.querySelector("#submitBtn");
      submitBtn.addEventListener('click' , function(e){
        e.preventDefault();
        if(!document.design_form.design_title.value){
          alert('상품명을 입력해 주세요!');
          document.design_form.design_title.focus();
          return;
        }

        if(!document.design_form.design_serial.value){
          alert('상품 시리얼 넘버를 입력해 주세요!');
          document.design_form.design_serial.focus();
          return;
        }

        if(!document.design_form.design_client.value){
          alert('상품 납품 업체를 입력해 주세요!');
          document.design_form.design_client.focus();
          return;
        }

        if(!document.design_form.design_desc.value){
          alert('상품 설명을 입력해 주세요!');
          document.design_form.design_desc.focus();
          return;
        }

        if(!document.design_form.main.value){
          alert('메인 사진을 입력해 주세요!');
          return;
        }

        if(!document.design_form.sub.value){
          alert('서브 사진을 입력해 주세요!');
          return;
        }

        if(!document.design_form.thumbnail.value){
          alert('썸네일 사진을 입력해 주세요!');
          return;
        }

        document.design_form.submit();
      });
    </script>
  </body>
</html>
