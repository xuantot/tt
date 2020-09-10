<!DOCTYPE html>
<html lang="vn">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
  <meta http-equiv="Content-Language" content="vi">  
  <meta name="robots" content="noindex,nofollow">  


  <base href="{{asset('')}}">
  <title>@yield('title')</title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   <link rel="shortcut icon" href="public/frontend/custom/images/log.png">
   <!-- Bootstrap 3.3.7 -->
   <link rel="stylesheet" href="public/backend/bower_components/bootstrap/dist/css/bootstrap.min.css">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="public/backend/bower_components/font-awesome/css/font-awesome.min.css">
   <!-- Ionicons -->
   <link rel="stylesheet" href="public/backend/bower_components/Ionicons/css/ionicons.min.css">

   <link rel="stylesheet" href="public/backend/bower_components/select2/dist/css/select2.min.css">
   <!-- Theme style -->
   <link rel="stylesheet" href="public/backend/dist/css/AdminLTE.min.css">
   <!-- AdminLTE Skins. Choose a skin from the css/skins
        folder instead of downloading all of them to reduce the load. -->
   <link rel="stylesheet" href="public/backend/dist/css/skins/_all-skins.min.css">
   <!-- Morris chart -->
   <link rel="stylesheet" href="public/backend/bower_components/morris.js/morris.css">
   <!-- jvectormap -->
   <link rel="stylesheet" href="public/backend/bower_components/jvectormap/jquery-jvectormap.css">
   <!-- Date Picker -->
   <link rel="stylesheet" href="public/backend/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
   <!-- Daterange picker -->
   <link rel="stylesheet" href="public/backend/bower_components/bootstrap-daterangepicker/daterangepicker.css">
   <!-- bootstrap wysihtml5 - text editor -->
   <link rel="stylesheet" href="public/backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
   <link rel="stylesheet" href="public/backend/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

   <!-- Google Font -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
   <link href="public/common/css/phi.css" rel="stylesheet">

   <link rel="shortcut icon" href="public/image/logo.png"> 
   <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
   </script>

   <script>
     function myTrim(x){
       return x.replace(/^\s+|\s+$/gm,'');
     }
   </script>
</head>
<body class="sidebar-mini wysihtml5-supported fixed skin-blue">
<div class="wrapper">

  @include('backend.master.header')
  <!-- Left side column. contains the logo and sidebar -->
  @include('backend.master.slidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @yield('content')       
  </div>
  <!-- /.content-wrapper -->
 
@include('backend.master.footer')

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="public/backend/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="public/backend/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="public/backend/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="public/backend/bower_components/raphael/raphael.min.js"></script>
<script src="public/backend/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="public/backend/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="public/backend/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="public/backend/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="public/backend/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="public/backend/bower_components/moment/min/moment.min.js"></script>
<script src="public/backend/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="public/backend/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="public/backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="public/backend/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="public/backend/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="public/backend/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="public/backend/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="public/backend/dist/js/demo.js"></script>

<script src="public/common/js/ckeditor/ckeditor.js"></script>
<script src="public/common/js/ckfinder/ckfinder.js"></script>
<script src="public/backend/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="public/backend/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script src="public/backend/bower_components/select2/dist/js/select2.full.min.js"></script>
<script> 
    $(document).ready(function() {
    CKEDITOR.replace('editor1'); 
  //  CKEDITOR.replace('editor2'); 
  //  CKEDITOR.replace('editor3'); 
  //  CKEDITOR.replace('editor4'); 
    CKEDITOR.config.filebrowserImageUploadUrl = '{{url('/')}}/public/common/js/ckfinder/ckfinder.html?type=Images';
    CKEDITOR.config.filebrowserBrowseUrl=       '{{url('/')}}/public/common/js/ckfinder/ckfinder.html';
    CKEDITOR.config.filebrowserImageBrowseUrl=  '{{url('/')}}/public/common/js/ckfinder/ckfinder.html?type=Images';
    CKEDITOR.config.filebrowserFlashBrowseUrl=  '{{url('/')}}/public/common/js/ckfinder/ckfinder.html?type=Flash';
    CKEDITOR.config.filebrowserUploadUrl=       '{{url('/')}}/public/common/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
    CKEDITOR.config.filebrowserImageUploadUrl=  '{{url('/')}}/public/common/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
    CKEDITOR.config.filebrowserFlashUploadUrl=  '{{url('/')}}/public/common/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
});
</script>
<script>
    $(function () {
      $('#datatbl').DataTable({
        'paging'      : true,
        'lengthChange': true,
        'searching'   : true,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : true,
        "pageLength"  : 50 
      })
    })    
</script>
<script>
  function changeImg(input){
       //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
       if(input.files && input.files[0]){
           var reader = new FileReader();
           //Sự kiện file đã được load vào website
           reader.onload = function(e){
               //Thay đổi đường dẫn ảnh
               $('#avatar').attr('src',e.target.result);
           }
           reader.readAsDataURL(input.files[0]);
       }
   }
   $(document).ready(function() {
       $('#avatar').click(function(){
           $('#form_pic').click();
       });
     });
    function create(title) {
      var slug = "";
      // Change to lower case
      var titleLower = title.toLowerCase();
      // Letter "e"
      slug = titleLower.replace(/e|é|è|ẽ|ẻ|ẹ|ê|ế|ề|ễ|ể|ệ/gi, 'e');
      // Letter "a"
      slug = slug.replace(/a|á|à|ã|ả|ạ|ă|ắ|ằ|ẵ|ẳ|ặ|â|ấ|ầ|ẫ|ẩ|ậ/gi, 'a');
      // Letter "o"
      slug = slug.replace(/o|ó|ò|õ|ỏ|ọ|ô|ố|ồ|ỗ|ổ|ộ|ơ|ớ|ờ|ỡ|ở|ợ/gi, 'o');
      // Letter "u"
      slug = slug.replace(/u|ú|ù|ũ|ủ|ụ|ư|ứ|ừ|ữ|ử|ự/gi, 'u');
      // Letter "i"
      slug = slug.replace(/i|í|ì|ĩ|ỉ|ị/gi, 'i');
      // Letter "y"
      slug = slug.replace(/y|ý|ỳ|ỹ|ỷ|ỵ/gi, 'y');
      // Letter "d"
      slug = slug.replace(/đ/gi, 'd');
      // Trim the last whitespace
      slug = slug.replace(/\s*$/g, '');
      // Change whitespace to "-"
      slug = slug.replace(/\s+/g, '-');   
      // Change ',' to "-"
      slug = slug.replace(/,/g, '');   
      // Change ':' to "-"
      slug = slug.replace(/:/g, '');  
       // Change '_' to "-"
      slug = slug.replace(/_/g, '-');   
      return slug;
    }
</script>
<script>
  $(document).ready(function(){  
    $("#name").keyup(function(){      
      var text = document.getElementById("name").value;
      var newtext = myTrim(text);
      var slug = create(newtext);
      $('#slug').val(slug);
    });
  });
</script>
<script>
    $(function () {
      $('.select2').select2()
    });
</script>
</body>
</html>
