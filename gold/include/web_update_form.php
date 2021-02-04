<?php
  $web_num = $_GET['num'];
  // db connect
  include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php';
  $sql = "select * from gold_web where GOLD_WEB_num = $web_num ";
  $web_result = mysqli_query($dbConn, $sql);
  $web_result_row = mysqli_fetch_array($web_result);

  $web_result_tit = $web_result_row['GOLD_WEB_tit'];
  $web_result_ser = $web_result_row['GOLD_WEB_ser'];
  $web_result_des = $web_result_row['GOLD_WEB_des'];
  $web_result_dom = $web_result_row['GOLD_WEB_dom'];
  $web_result_img = $web_result_row['GOLD_WEB_img'];
  $web_result_mimg = $web_result_row['GOLD_WEB_mimg'];
  $web_result_thumb = $web_result_row['GOLD_WEB_thumb'];
  $web_result_cli = $web_result_row['GOLD_WEB_cli'];
  $web_result_reg = $web_result_row['GOLD_WEB_reg'];
?>
  
<!-- design input contents form -->
<div class="webInputForm webDesignInput">
  <form action="/gold/php_process/pages/web_update.php?num=<?=$web_num?>" method="POST" name="web_form" enctype="multipart/form-data">
    <div class="titleSer clear">
      <p class="title_input">
        <label for="title">Title</label>
        <input type="text" placeholder="Title Here" id="title" name="web_title" value="<?=$web_result_tit?>">
      </p>
      <p class="serial_input">
        <label for="serial">SerialNo.</label>
        <input type="text" placeholder="SerialNo. Here" id="serial" name="web_serial" value="<?=$web_result_ser?>">
      </p>
      <p class="client_input">
        <label for="client">Client</label>
        <input type="text" placeholder="Client Here" id="client" name="web_client" value="<?=$web_result_cli?>">
      </p>
      <p class="domain_input">
        <label for="domain">Domain</label>
        <input type="text" placeholder="Domain Here" id="domain" name="web_domain" value="<?=$web_result_dom?>">
      </p>
    </div>
    <!-- title/serial/client end -->
    <div class="web_desc uploadDesc">
      <textarea name="web_desc"><?=$web_result_des?></textarea>
    </div>
    <!-- text description end -->
    <div class="uploadImg clear">
      <div class="uploadBox img1">
        <div class="inputControl">
          <input class="uploadName" placeholder = "<?=$web_result_img?>">
          <label for="mainImage">SELECT IMAGE</label>
          <input type="file" id="mainImage" class="uploadHidden" name="main" accept="image/*" value = 1>
        </div>
        <div class="img1_box imgWrap">
          <img id="img1" src="/gold/data/web_page/pc/<?=$web_result_img?>">
        </div>
      </div>
      <div class="uploadBox img2">
        <div class="inputControl">
          <input class="uploadName" placeholder = "<?=$web_result_mimg?>">
          <label for="subImage">SELECT IMAGE</label>
          <input type="file" id="subImage" class="uploadHidden" name="mobile" accept="image/*" value = 1>
        </div>
        <div class="img2_box imgWrap">
          <img id="img2" src="/gold/data/web_page/mobile/<?=$web_result_mimg?>">
        </div> 
      </div>
      <div class="uploadBox img3">
        <div class="inputControl">
          <input class="uploadName" placeholder = "<?=$web_result_thumb?>(800*400)">
          <label for="thumbImage">SELECT IMAGE</label>
          <input type="file" id="thumbImage" class="uploadHidden" name="thumbnail" accept="image/*" value = 1>
        </div>
        <div class="thumb_box imgWrap">
          <img id="thumb" src="/gold/data/web_page/thumb/<?=$web_result_thumb?>">
        </div> 
      </div>
    </div>
    <!-- image uploadbox end -->
    <div class="registDay"></div>
  </form>
</div>
<!-- design inputform end -->
<div class="btns">
  <button type="button" class="commonBtn" id="submitBtn" onclick="updateSubmit()">update</button>
</div>
<script>
  function updateSubmit(){
    document.web_form.submit();
  }
</script>

