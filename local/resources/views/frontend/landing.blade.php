<!DOCTYPE html>
<html lang="vn">
  <head>
		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
		<meta name="description" content="{{$detail_kh->kh_des}}" >
    <meta name="keywords" content="{{$detail_kh->kh_name}}">    
    <meta property="og:title" content="{{$detail_kh->kh_name}}" />
    <meta property="og:description" content="{{$detail_kh->kh_des}}" />
    <meta property="og:image" content="{{get_root()}}/public/image/{{$detail_kh->kh_pic}}" />  
    <title>{{$detail_kh->kh_name}}</title>
    <base href="{{asset('')}}">
		<link rel="shortcut icon" href="public/frontend/custom/images/log.png">
  	<link rel="shortcut icon" href="public/frontend/custom/images/log.png">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link href="public/frontend/landing/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/frontend/landing/css/slick.css" rel="stylesheet">
    <link id="switcher" href="public/frontend/landing/css/theme-color/default-theme.css" rel="stylesheet">
    <link href="public/frontend/landing/style_vp.css" rel="stylesheet">
    <!-- Open Sans for body font -->
  	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
    <!-- Lato for Title -->
  	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">  
    <link href="public/common/css/call.css" rel="stylesheet">	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	</head>
  <body>
		{!! $current_user['diachi']->ad_fbroot !!}

  	<!-- Start Header -->
	<header id="mu-header" class="" role="banner">
		<div class="container">
			<nav class="navbar navbar-default mu-navbar">
			  	<div class="container-fluid">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>

				      <!-- Text Logo -->
				      <a class="navbar-brand pl-0" href="#"><img src="public/frontend/custom/images/ita_logo.png" height="70px" alt="Fables Template" class="fables-logo"></a>

				      <!-- Image Logo -->
				      <!-- <a class="navbar-brand" href="index.html"><img src="public/frontend/landing/images/logo.png"></a> -->


				    </div>

				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      	<ul class="nav navbar-nav mu-menu navbar-right">
					        <li><a href="#">HOME</a></li>
					        <li><a href="#mu-book-overview">OVERVIEW</a></li>
					        <li><a href="#mu-author">GIẢNG VIÊN</a></li>
				            <li><a href="#mu-pricing">LỊCH HỌC</a></li>
				            <li><a href="#mu-testimonials">CẢM NHẬN HỌC VIÊN</a></li>
				            <li><a href="#mu-contact">ĐĂNG KÝ</a></li>
				      	</ul>
				    </div><!-- /.navbar-collapse -->
			  	</div><!-- /.container-fluid -->
			</nav>
		</div>
	</header>
	<!-- End Header -->

	<!-- Start Featured Slider -->

	<section id="mu-hero" style="background-image: url('public/image/{{$detail_kh->kh_pic}}'); background-size:100% 100% " >
		<div class="container">
			<div class="row" >
		
			</div>
		</div>
	</section>
	
	<!-- Start Featured Slider -->
	
	<!-- Start main content -->
		
	<main role="main">

		<!-- Start Counter -->
		<section id="mu-counter">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-counter-area">

							<div class="mu-counter-block">
								<div class="row">

									<!-- Start Single Counter -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-single-counter">
											<i class="fa fa-files-o" aria-hidden="true"></i>
											<div class="counter-value" data-count="{{$landing_kh->count_a}}">0</div>
											<h5 class="mu-counter-name">HỌC VIÊN</h5>
										</div>
									</div>
									<!-- / Single Counter -->

									<!-- Start Single Counter -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-single-counter">
											<i class="fa fa-file-text-o" aria-hidden="true"></i>
											<div class="counter-value" data-count="{{$landing_kh->count_b}}">0</div>
											<h5 class="mu-counter-name">THÁNG ĐÀO TẠO</h5>
										</div>
									</div>
									<!-- / Single Counter -->

									<!-- Start Single Counter -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-single-counter">
											<i class="fa fa-users" aria-hidden="true"></i>
											<div class="counter-value" data-count="{{$landing_kh->count_c}}">0</div>
											<h5 class="mu-counter-name">GIẢNG VIÊN</h5>
										</div>
									</div>
									<!-- / Single Counter -->

									<!-- Start Single Counter -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-single-counter">
											<i class="fa fa-trophy" aria-hidden="true"></i>
											<div class="counter-value" data-count="{{$landing_kh->count_d}}">0</div>
											<h5 class="mu-counter-name">Got Awards</h5>
										</div>
									</div>
									<!-- / Single Counter -->

								</div>
							</div>


						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Counter -->

		<!-- Start Book Overview -->
		<section id="mu-book-overview">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-book-overview-area">

							<div class="mu-heading-area">
								<h2 class="mu-heading-title">Book Overview</h2>
								<span class="mu-header-dot"></span>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
							</div>

							<!-- Start Book Overview Content -->
							<div class="mu-book-overview-content">
								<div class="row">

									<!-- Book Overview Single Content -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-book-overview-single">
											<span class="mu-book-overview-icon-box">
												<i class="fa fa-area-chart" aria-hidden="true"></i>
											</span>
											<h4>Chapter One</h4>
											<p>Lorem ipsum dolor sit amet, consect adipis elit minim veniam ettis inkeras.</p>
										</div>
									</div>
									<!-- / Book Overview Single Content -->

									<!-- About Us Single Content -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-book-overview-single">
											<span class="mu-book-overview-icon-box">
												<i class="fa fa-cubes" aria-hidden="true"></i>
											</span>
											<h4>Chapter Two</h4>
											<p>Lorem ipsum dolor sit amet, consect adipis elit minim veniam ettis inkeras.</p>
										</div>
									</div>
									<!-- / Book Overview Single Content -->

									<!-- About Us Single Content -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-book-overview-single">
											<span class="mu-book-overview-icon-box">
												<i class="fa fa-modx" aria-hidden="true"></i>
											</span>
											<h4>Chapter Three</h4>
											<p>Lorem ipsum dolor sit amet, consect adipis elit minim veniam ettis inkeras.</p>
										</div>
									</div>
									<!-- / Book Overview Single Content -->

									<!-- About Us Single Content -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-book-overview-single">
											<span class="mu-book-overview-icon-box">
												<i class="fa fa-files-o" aria-hidden="true"></i>
											</span>
											<h4>Chapter Four</h4>
											<p>Lorem ipsum dolor sit amet, consect adipis elit minim veniam ettis inkeras.</p>
										</div>
									</div>
									<!-- / Book Overview Single Content -->

									<!-- Book Overview Single Content -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-book-overview-single">
											<span class="mu-book-overview-icon-box">
												<i class="fa fa-file-pdf-o" aria-hidden="true"></i>
											</span>
											<h4>Chapter Five</h4>
											<p>Lorem ipsum dolor sit amet, consect adipis elit minim veniam ettis inkeras.</p>
										</div>
									</div>
									<!-- / Book Overview Single Content -->

									<!-- About Us Single Content -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-book-overview-single">
											<span class="mu-book-overview-icon-box">
												<i class="fa fa-language" aria-hidden="true"></i>
											</span>
											<h4>Chapter Six</h4>
											<p>Lorem ipsum dolor sit amet, consect adipis elit minim veniam ettis inkeras.</p>
										</div>
									</div>
									<!-- / Book Overview Single Content -->

									<!-- About Us Single Content -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-book-overview-single">
											<span class="mu-book-overview-icon-box">
												<i class="fa fa-gg" aria-hidden="true"></i>
											</span>
											<h4>Chapter Seven</h4>
											<p>Lorem ipsum dolor sit amet, consect adipis elit minim veniam ettis inkeras.</p>
										</div>
									</div>
									<!-- / Book Overview Single Content -->

									<!-- About Us Single Content -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-book-overview-single">
											<span class="mu-book-overview-icon-box">
												<i class="fa fa-wpforms" aria-hidden="true"></i>
											</span>
											<h4>Chapter Eight</h4>
											<p>Lorem ipsum dolor sit amet, consect adipis elit minim veniam ettis inkeras.</p>
										</div>
									</div>
									<!-- / Book Overview Single Content -->

								</div>
							</div>
							<!-- End Book Overview Content -->

						</div>
					</div>
				</div>
				</div>
		</section>
		<!-- End Book Overview -->

		

		<!-- Start Video Review -->
		<section id="mu-video-review">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-video-review-area">

							<div class="mu-heading-area">
								<h2 class="mu-heading-title">Mô Tả Khóa Học</h2>
								<span class="mu-header-dot">&nbsp;</span>						
							</div>
							
@if (isset($landing_kh->landing_url_video))
<div class="row">
		<!-- Book Overview Single Content -->
		<div class="col-md-7 col-sm-12" style="color:white">
				{!! $detail_kh->kh_content !!}
		</div>
		<div class="col-md-5 col-sm-12">
				<iframe width="100%" height="315" src="https://www.youtube.com/embed/{{$landing_kh->landing_url_video}}?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>																			
</div>
@else
<div class="row">
		<!-- Book Overview Single Content -->
		<div class="col-md-12 col-sm-12" style="color:white">
				{!! $detail_kh->kh_content !!}
		</div>
																				
</div>
@endif

						
							


					</div>
				</div>
			</div>
		</section>
		<!-- End Video Review -->

		<!-- Start Author -->
		<section id="mu-author">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-author-area">

							<div class="mu-heading-area">
								<h2 class="mu-heading-title">GIẢNG VIÊN</h2>
								<span class="mu-header-dot"></span>
							</div>

							<!-- Start Author Content -->
							<div class="mu-author-content">
								<div class="row">
									<div class="col-md-6">
										<div class="mu-author-image">
											<img src="public/frontend/landing/images/author.jpg" alt="Author Image">
										</div>
									</div>
									<div class="col-md-6">
										<div class="mu-author-info">
											<h3>John Doe</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo suscipit facilis ipsum ullam reiciendis odio error iste neque ratione libero rem accusamus voluptatibus, nihil unde maiores sunt nisi. Assumenda, consectetur.</p>

											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, dolorem error neque! Dolores similique ut iusto odit esse ipsam, nesciunt pariatur animi minima maiores mollitia cupiditate ad ipsum deleniti perspiciatis!</p>
											<img class="mu-author-sign" src="public/frontend/landing/images/author-signature.png" alt="Author Signature">

											<div class="mu-author-social">
												<a href="#"><i class="fa fa-facebook"></i></a>
												<a href="#"><i class="fa fa-twitter"></i></a>
												<a href="#"><i class="fa fa-linkedin"></i></a>
												<a href="#"><i class="fa fa-google-plus"></i></a>
											</div>

										</div>
									</div>
								</div>
							</div>
							<!-- End Author Content -->

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Author -->

		<!-- Start Pricing -->
		<section id="mu-pricing">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-pricing-area">

							<div class="mu-heading-area">
								<h2 class="mu-heading-title">LỊCH HỌC</h2>
								<span class="mu-header-dot"></span>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
							</div>

							<!-- Start Pricing Content -->
							<div class="mu-pricing-content">
								<div class="row">
								
									<!-- Pricing Single Content -->
									<div class="col-sm-12 col-md-4">
										<div class="mu-pricing-single mu-popular-price-tag">

												<div class="mu-pricing-single-head">
														<h4>Học Phí</h4>
														<p class="mu-price-tag">
																{!! $landing_kh->id_b !!}<span>VNĐ</span>
														</p>
												</div>									
											<ul class="mu-price-feature">
												<li style="font-weight:bold">Ưu Đãi Khi Đăng Ký</li>
												<li> {!! $landing_kh->content_a !!}</li>
										
											</ul>
																

										</div>
									</div>
									<!-- / Pricing Single Content -->

									<!-- Pricing Single Content -->
									<div class="col-sm-12 col-md-8">
										<div class="mu-pricing-single">


											<div class="mu-pricing-single-head">
												<h4>Khai Giảng</h4>
												<p class="mu-price-tag">
													<span>-</span> {{$landing_kh->id_c}}
												</p>
											</div>

											<ul class="mu-price-feature">
												<li>{!! $landing_kh->content_b !!}</li>
												
											</ul>

									
											
										</div>
									</div>
									<!-- / Pricing Single Content -->


								</div>
							</div>
							<!-- End Pricing Content -->

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Pricing -->

		<!-- Start Testimonials -->
		<section id="mu-testimonials">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-testimonials-area">
							<div class="mu-heading-area">
								<h2 class="mu-heading-title">CẢM NHẬN HỌC VIÊN</h2>
								<span class="mu-header-dot"></span>
							</div>

							<div class="mu-testimonials-block">
								<ul class="mu-testimonial-slide">


								@foreach ($camnhanhv_kh as $show_camnhanhv_kh)
									<li>
										<p>" {{$show_camnhanhv_kh->hv_feel}} "</p>
										<img class="mu-rt-img" src="public/image/{{$show_camnhanhv_kh->hv_pic}}" alt="{{$show_camnhanhv_kh->hv_name}}">
										<h5 class="mu-rt-name">{{$show_camnhanhv_kh->hv_name}}</h5>
										<span class="mu-rt-title">{{$show_camnhanhv_kh->hv_job}}</span>
									</li>
								@endforeach			
						

								</ul>
							</div>


						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Testimonials -->

	
		<!-- Start Contact -->
		<section id="mu-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-contact-area">

							<div class="mu-heading-area">
								<h2 class="mu-heading-title">Đăng Ký Khóa Học</h2>
								<span class="mu-header-dot"></span>
								<p>Xin Chào Bạn, Hãy gửi cho chúng tôi thông tin của bạn để được tư vấn tốt hơn</p>
							</div>

							<!-- Start Contact Content -->
							<div class="mu-contact-content">

								<div id="form-messages"></div>
								
								<form  method="post" class="mu-contact-form"  enctype="multipart/form-data" action="resgisterkh">
										{{ csrf_field() }}
										<div class="form-group">   
											@if($errors->has('mem_name'))<p style="color:red"><strong>{{$errors->first('mem_name')}}</p></strong>@endif             
										<input type="text" class="form-control" placeholder="Name" id="name" name="mem_name" required value="{{old('mem_name')}}">
									</div>
									<div class="form-group">     
											@if($errors->has('mem_phone'))<p style="color:red"><strong>{{$errors->first('mem_phone')}}</p></strong>@endif             
           						<input type="text" class="form-control" placeholder="Phone" id="phone" name="mem_phone" required value="{{old('mem_phone')}}">
									</div>            
									<div class="form-group">    
											@if($errors->has('mem_email'))<p style="color:red"><strong>{{$errors->first('mem_email')}}</p></strong>@endif             
         
											<input type="email" class="form-control" placeholder="Enter Email" id="email" name="mem_email" required value="{{old('mem_email')}}">
										</div>       
									<div class="form-group">
											@if($errors->has('mem_sms'))<p style="color:red"><strong>{{$errors->first('mem_sms')}}</p></strong>@endif             
										<textarea class="form-control" placeholder="Message" id="message" name="mem_sms" required>{{old('mem_sms')}}</textarea>
									</div>
								<input type="hidden" name="mem_kh_id" value="{{$detail_kh->id_kh}}">
									<button type="submit" class="mu-send-msg-btn"><span>SUBMIT</span></button>
						    </form>

							</div>
							<!-- End Contact Content -->

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Contact -->

	</main>
	
	<!-- End main content -->	
			
			<hr>
	<!-- Start footer -->
	<footer id="mu-footer" role="contentinfo">
			<div class="mu-footer-area">
				<div class="mu-social-media">
						<div class="fb-like" data-href="{{get_url()}}" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
        <br><br>
						<div class="fb-comments" data-href="{{get_url()}}" data-numposts="20" data-width="500"></div>
				</div>
			</div>
		</div>

	</footer>
	<!-- End footer -->

	<div class="phonering-alo-phone phonering-alo-green phonering-alo-show" id="phonering-alo-phoneIcon">
		<div class="phonering-alo-ph-circle"></div>
		<div class="phonering-alo-ph-circle-fill"></div>        
		<div class="phonering-alo-ph-img-circle">           
				<a href="tel:{{$current_user['diachi']->ad_phone}}" class="pps-btn-img " title="Liên hệ">
						<img src="public/image/phone.png" alt="Liên hệ" width="40" style="margin:7px 0 0 7px ">               
				</a>
		</div>
</div>
<div>
	{!!$current_user['diachi']->ad_chat!!}
</div>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Bootstrap -->
    <script src="public/frontend/landing/js/bootstrap.min.js"></script>
	<!-- Slick slider -->
    <script type="text/javascript" src="public/frontend/landing/js/slick.min.js"></script>
    <!-- Counter js -->
    <script type="text/javascript" src="public/frontend/landing/js/counter.js"></script>
    <!-- Ajax contact form  -->
    <script type="text/javascript" src="public/frontend/landing/js/app.js"></script>
   
 
	
    <!-- Custom js -->
	<script type="text/javascript" src="public/frontend/landing/js/custom.js"></script>
	
    
  </body>
</html>