<!DOCTYPE html>
<html lang="vn">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="Cache-control" content="public">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
    <meta http-equiv="Content-Language" content="vi">   
    <meta name="robots" content="none">    
    <meta name="author" content="International Testing Academy">
    <meta name="search engine" content="www.google.com, www.google.com.vn, www.google.co.uk, www.google.it, www.google.es, www.google.com.au, www.altaVista.com, www.aol.com, www.infoseek.com, www.excite.com, www.hotbot.com, www.lycos.com, www.magellan.com, www.cnet.com, www.voila.com, www.google.fr, www.yahoo.fr, www.yahoo.com, www.alltheweb.com, www.msn.com, www.netscape.com, www.nomade.com" /> 
    <meta name="copyright" content="International Testing Academy © 2019" />
    <meta name="geo.region" content="VN" />
    <meta name="geo.placename" content="Thanh Pho Ha Noi" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="International Testing Academy" />
    <meta property="og:url" content="{{get_url()}}" />
    @yield('seo')
    <base href="{{asset('')}}">
    <link rel="shortcut icon" href="public/frontend/custom/images/log.png"> 
    <!-- animate.css-->  

	<link rel="stylesheet" href="public/frontend/css/bootstrap.min.css">
	<!-- Template styles-->
	<link rel="stylesheet" href="public/frontend/css/style.css">
	<!-- Responsive styles-->
	<link rel="stylesheet" href="public/frontend/css/responsive.css">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="public/frontend/css/font-awesome.min.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="public/frontend/css/owl.carousel.min.css">
	<link rel="stylesheet" href="public/frontend/css/owl.theme.default.min.css">
	<!-- Colorbox -->
	<link rel="stylesheet" href="public/frontend/css/colorbox.css">

    <link href="public/common/css/phi.css" rel="stylesheet">

    <link href="public/common/css/call.css" rel="stylesheet">
    
</head>
<body>        
      {!! $current_user['diachi']->ad_fbroot !!}
 <div class="body-inner">

<!-- Nội dung CHính -->

@include('frontend.master.header')

@if ( get_current_page() == "/")
    @include('frontend.master.slidehome')
@else
    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a>404</a></li>
                    </ol>
                </div><!-- Col end -->
            </div><!-- Row end -->
        </div><!-- Container end -->
    </div><!-- Page title end -->
@endif

<section class="block-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12">
                      
                        <div class="error-page text-center col">
                                <div class="error-code">
                                    <h2><strong>404</strong></h2>
                                </div>
                                <div class="error-message">
                                    <h3>Oops... Page Not Found!</h3>
                                </div>
                                <div class="error-body">
                                    Try using the button below to go to main page of the site <br>
                                    <a href="index.html" class="btn btn-primary">Back to Home Page</a>
                                </div>
                            </div>
                </div>
                <div class="col-lg-4 col-md-12">
                        @include('frontend.master.side')
                </div>
            </div>
        </div>    
</section><!-- First block end -->           
@include('frontend.master.footer')


<!-- END Nội dung CHính -->

<!-- initialize jQuery Library -->
<script type="text/javascript" src="public/frontend/js/jquery.js"></script>
<!-- Popper Jquery -->
<script type="text/javascript" src="public/frontend/js/popper.min.js"></script>
<!-- Bootstrap jQuery -->
<script type="text/javascript" src="public/frontend/js/bootstrap.min.js"></script>
<!-- Owl Carousel -->
<script type="text/javascript" src="public/frontend/js/owl.carousel.min.js"></script>
<!-- Color box -->
<script type="text/javascript" src="public/frontend/js/jquery.colorbox.js"></script>
<!-- Smoothscroll -->
<script type="text/javascript" src="public/frontend/js/smoothscroll.js"></script>
<!-- Template custom -->
<script type="text/javascript" src="public/frontend/js/custom.js"></script>


</div><!-- Body inner end -->


</body>
</html>