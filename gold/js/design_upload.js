$(function(){
  const fileTarget = $(".uploadHidden");

  fileTarget.on('change', function(){
    if(window.FileReader){
      let fileName = $(this)[0].files[0].name;
      $(this).siblings('.uploadName').val(fileName);
      console.log(fileName);
    } else {
      fileName = $(this).val().split('/').pop().split('\\').pop();
    }
    
  }); 
  $('#mainImage').on("change", img1FileSelect);
  $('#subImage').on("change", img2FileSelect);
  $('#thumbImage').on("change", thumbFileSelect);
});

let img1FileSelect = function(event) {
  let input = event.target;
  let reader = new FileReader();

  reader.onload = function() {
      let dataUrl = reader.result;
      let output = document.getElementById("img1");
      output.src = dataUrl;
  };
  reader.readAsDataURL(input.files[0]);
}

let img2FileSelect = function(event) {
  let input = event.target;
  let reader = new FileReader();

  reader.onload = function() {
      let dataUrl = reader.result;
      let output = document.getElementById("img2");
      output.src = dataUrl;
  };
  reader.readAsDataURL(input.files[0]);
}

let thumbFileSelect = function(event){
  let input = event.target;
  let reader = new FileReader();

  reader.onload = function(){
    let dataUrl = reader.result;
    let output = document.getElementById("thumb");
    output.src = dataUrl;
  };
  reader.readAsDataURL(input.files[0]);
}