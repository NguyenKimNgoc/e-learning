$(".select-county").select2({
  maximumSelectionLength: 1,
  placeholder: "--Chọn Quận Huyện--"
});
$(".select-provincial").select2({
  maximumSelectionLength: 1,
  placeholder: "--Chọn Tỉnh Thành--"
});
$(".select-city").select2({
  maximumSelectionLength: 1,
  placeholder: "--Chọn Thành Phố--"
});
$(function () {
  // Replace the <textarea id="editor1"> with a CKEditor
  // instance, using default configuration.
  CKEDITOR.replace('editor1')
  //bootstrap WYSIHTML5 - text editor
  $('.textarea').wysihtml5()
});
var openFile = function(event) {
  var input = event.target;

  var reader = new FileReader();
  reader.onload = function(){
    var dataURL = reader.result;
    var output = document.getElementById('output');
    output.src = dataURL;
  };
  reader.onload = function (e) {
    $('#output')
        .attr('src', e.target.result)
        .width('100%');

  };
  reader.readAsDataURL(input.files[0]);
};

$("document").ready(function($){
  var nav = $('#menu-top-screen');
  $(window).scroll(function () {
    if ($(this).scrollTop() > 10) {
      nav.addClass("f-nav");
    } else {
      nav.removeClass("f-nav");
    }
  });
});

<!-- Your customer chat code -->



