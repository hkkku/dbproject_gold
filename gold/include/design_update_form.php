<?php
  $design_num=$_GET['num'];
  // db connect
  include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php';
  $sql = "select * from gold_de where GOLD_DE_num = $design_num ";
  $design_result = mysqli_query($dbConn, $sql);
  $design_result_row = mysqli_fetch_array($design_result);

  $design_result_tit = $design_result_row['GOLD_DE_tit'];
  $design_result_ser = $design_result_row['GOLD_DE_ser'];
  $design_result_des = $design_result_row['GOLD_DE_des'];
  $design_result_img1 = $design_result_row['GOLD_DE_img1'];
  $design_result_img2 = $design_result_row['GOLD_DE_img2'];
  $design_result_thumb = $design_result_row['GOLD_DE_thumb'];
  $design_result_cli = $design_result_row['GOLD_DE_cli'];
  $design_result_reg = $design_result_row['GOLD_DE_reg'];
?>

<!-- design input contents form -->
<div class="designInputForm webDesignInput">
  <form action="/gold/php_process/pages/design_update.php?num=<?=$design_num?>" method="POST" name="design_form" enctype="multipart/form-data">
    <div class="titleSer clear">
      <p class="title_input">
        <label for="title">Title</label>
        <input type="text" placeholder="Title Here" id="title" name="design_title" value="<?=$design_result_tit?>">
      </p>
      <p class="serial_input">
        <label for="serial">SerialNo.</label>
        <input type="text" placeholder="SerialNo. Here" id="serial" name="design_serial" value="<?=$design_result_ser?>">
      </p>
      <p class="client_input">
        <label for="client">Client</label>
        <input type="text" placeholder="Client Here" id="client" name="design_client" value="<?=$design_result_cli?>">
      </p>
    </div>
    <!-- title/serial/client end -->
    <div class="design_desc uploadDesc">
      <textarea name="design_desc" placeholder=""><?=$design_result_des?></textarea>
    </div>
    <!-- text description end -->
    <div class="uploadImg clear">
      <div class="uploadBox img1">
        <div class="inputControl">
          <input class="uploadName" placeholder = "<?=$design_result_img1?>">
          <label for="mainImage">SELECT IMAGE</label>
          <input type="file" id="mainImage" class="uploadHidden" name="main" accept="image/*" value = 1>
        </div>
        <div class="img1_box imgWrap">
          <img id="img1" src="/gold/data/design_page/<?=$design_result_img1?>">
        </div>
      </div>
      <div class="uploadBox img2">
        <div class="inputControl">
          <input class="uploadName" placeholder = "<?=$design_result_img2?>">
          <label for="subImage">SELECT IMAGE</label>
          <input type="file" id="subImage" class="uploadHidden" name="sub" accept="image/*" value = 1>
        </div>
        <div class="img2_box imgWrap">
          <img id="img2" src="/gold/data/design_page/<?=$design_result_img2?>">
        </div> 
      </div>
      <div class="uploadBox img3">
        <div class="inputControl">
          <input class="uploadName" placeholder = "<?=$design_result_thumb?>(400*400)">
          <label for="thumbImage">SELECT IMAGE</label>
          <input type="file" id="thumbImage" class="uploadHidden" name="thumbnail" accept="image/*" value = 1>
        </div>
        <div class="thumb_box imgWrap">
          <img id="thumb" src="/gold/data/design_page/thumb/<?=$design_result_thumb?>">
        </div> 
      </div>
    </div>
    <!-- image uploadbox end -->
    <div class="registDay"></div>
  </form>
</div>
<!-- design inputform end -->
<div class="btns">
  <button type="button" class="commonBtn" id="submitBtn" onclick="updateSubmit()">UPDATE</button>
</div>

<script>
  function updateSubmit(){
    document.design_form.submit();
  }
</script>