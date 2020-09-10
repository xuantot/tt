@extends('frontend.master.master')
@section('seo')
    <meta name="description" content="Chúng tôi sẽ gửi thông tin cho bạn sớm nhất" >
    <meta name="keywords" content="đăng ký theo dõi, hoàn thành">    
    <meta property="og:title" content="Đăng Ký Theo Dõi" />
    <meta property="og:description" content="Chúng tôi sẽ gửi thông tin cho bạn sớm nhất" />
    <meta property="og:image" content="{{get_root()}}/public/frontend/custom/images/ita_logo.png" />  
    <title>Đăng Ký Theo Dõi</title>
@endsection

@section('becrum')
<li><a href="#" style="color:black">Đăng ký Theo Dõi</a></li>
@endsection


@section('content')

@if (session('thongbao'))   
   <section class="block-wrapper">
		<div class="container">
			<div class="row">				
				<div class="error-page text-center col">
					<div class="error-code">
						<h2><strong>GOOD</strong></h2>
					</div>
					<div class="error-message">
						<h3>Email {{session('thongbao')}} đã đăng ký thành công</h3>
					</div>
					<div class="error-body">
                        Chúng tôi sẽ gửi thông tin cho bạn trong thời gian sớm nhất <br>
                        Trân Trọng Cảm Ơn <br>
						<a href="#" class="btn btn-primary">Back to Home Page</a>
					</div>
				</div>
			</div><!-- Row end -->
		</div><!-- Container end -->
	</section><!-- First block end -->
@endif

@endsection