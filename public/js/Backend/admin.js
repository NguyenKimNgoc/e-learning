$(".select-major").select2({
  maximumSelectionLength: 1,
  placeholder: "--Chọn Nghề Nghiệp--"
});
$(".select-cate").select2({
    maximumSelectionLength: 1,
    placeholder: "--Chọn Danh mục--"
});
$(".select-industries").select2({
  maximumSelectionLength: 1,
  placeholder: "--Chọn Lĩnh Vực--"
});
$(".select-tags").select2({
    placeholder: "--Chọn Tag--"
});
$(".select-course").select2({
    maximumSelectionLength: 1,
    placeholder: "--Chọn Khóa Học--"
});
$(".select-cate-group").select2({
    maximumSelectionLength: 1,
    placeholder: "--Chọn Nhóm Danh Mục--"
});
function deleteRow(deleteAPI, classReload, urlReload) {
  console.log(urlReload);
  swal({
        title: 'Bạn chắc chắn xóa item này?',
        text: 'Item này sẽ bị xóa hoàn toàn, bạn sẽ không thể backup lại!',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#DD6B55',
        confirmButtonText: 'Xóa',
        closeOnConfirm: false
      },
      function (){
        $.ajax({
          type: "get",
          url: deleteAPI,
          dataType : "json",
          success: function (data) {
            if (data.code === 200) {
              swal('Đã xóa!', 'Xóa dữ liệu thành công.', 'success');
              location.reload();
              reload(classReload, urlReload);

            }
          }
        });
      });
}
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
$(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
})