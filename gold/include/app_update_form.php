<?php
  $app_num=$_GET['num'];
  // db connect
  include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php';
  $sql = "select * from gold_app where GOLD_APP_num = $app_num ";
  $app_result = mysqli_query($dbConn, $sql);
  $app_result_row = mysqli_fetch_array($app_result);

  $app_result_tit = $app_result_row['GOLD_APP_tit'];
  $app_result_ser = $app_result_row['GOLD_APP_ser'];
  $app_result_des = $app_result_row['GOLD_APP_des'];
  $app_result_img = $app_result_row['GOLD_APP_img'];
  $app_result_thumb = $app_result_row['GOLD_APP_thumb'];
  $app_result_cli = $app_result_row['GOLD_APP_cli'];
  $app_result_reg = $app_result_row['GOLD_APP_reg'];
?>
 
 <!-- design input contents form -->
 <div class="designInputForm webDesignInput">
  <form action="/gold/php_process/pages/app_update.php?num=<?=$app_num?>" method="POST" name="app_form" enctype="multipart/form-data">
    <div class="titleSer clear">
      <p class="title_input">
        <label for="title">Title</label>
        <input type="text" placeholder="Title Here" id="title" name="app_title" value="<?=$app_result_tit?>">
      </p>
      <p class="serial_input">
        <label for="serial">SerialNo.</label>
        <input type="text" placeholder="SerialNo. Here" id="serial" name="app_serial" value="<?=$app_result_ser?>">
      </p>
      <p class="client_input">
        <label for="client">Client</label>
        <input type="text" placeholder="Client Here" id="client" name="app_client" value="<?=$app_result_ser?>">
      </p>
    </div>
    <!-- title/serial/client end -->
    <div class="app_desc uploadDesc">
      <textarea name="app_desc" placeholder="Application description here"><?=$app_result_des?>"</textarea>
    </div>
    <!-- text description end -->
    <div class="uploadImg clear">
      <div class="uploadBox appImg img1">
        <div class="inputControl">
          <input class="uploadName" placeholder = "<?=$app_result_img?>">
          <label for="mainImage">SELECT IMAGE</label>
          <input type="file" id="mainImage" class="uploadHidden" name="app_main" accept="image/*" value = 1>
        </div>
        <div class="img1_box imgWrap">
          <img id="img1" src="/gold/data/app_page/app_main/<?=$app_result_img?>">
        </div>
      </div>
      <div class="uploadBox appImg img2">
        <div class="inputControl">
          <input class="uploadName" placeholder = "<?=$app_result_thumb?>">
          <label for="subImage">SELECT IMAGE</label>
          <input type="file" id="subImage" class="uploadHidden" name="app_sub" accept="image/*" value = 1>
        </div>
        <div class="img2_box imgWrap">
          <img id="img2" src="/gold/data/app_page/app_thumb/<?=$app_result_thumb?>">
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
    document.app_form.submit();
  }
</script>