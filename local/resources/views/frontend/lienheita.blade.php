@extends('frontend.master.master')
@section('seo')
    <meta name="description" content="Chúng tôi sẽ gửi thông tin cho bạn sớm nhất" >
    <meta name="keywords" content="đăng ký theo dõi, hoàn thành">    
    <meta property="og:title" content="Đăng Ký Theo Dõi" />
    <meta property="og:description" content="Chúng tôi sẽ gửi thông tin cho bạn sớm nhất" />
    <meta property="og:image" content="{{get_root()}}/public/frontend/custom/images/ita_logo.png" />  
    <title>Đăng Ký Theo Dõi</title>
@endsection
@section('content')

@section('becrum')
<li><a href="lienhe">Contact Us</a></li>
@endsection 

@if (session('thongbao'))   
   <section class="block-wrapper">
		<div class="container">
			<div class="row">				
				<div class="error-page text-center col">
					<div class="error-code">
						<h2><strong>NEWS</strong></h2>
					</div>
					<div class="error-message">
						<h3>Form Liên Hệ Gửi Thành công</h3>
					</div>
					<div class="error-body">
                            Xin Chào {{session('thongbao')}} , Chúng tôi sẽ gọi lại ngay cho bạn khi có thể <br>
                        Trân Trọng Cảm Ơn <br>
						<a href="#" class="btn btn-primary">Back to Home Page</a>
					</div>
				</div>
			</div><!-- Row end -->
		</div><!-- Container end -->
	</section><!-- First block end -->
@endif

@endsection