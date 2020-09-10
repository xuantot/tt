<div class="gap-40"></div>


<section class="featured-post-area no-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12 pad-r">
					<div id="featured-slider" class="owl-carousel owl-theme featured-slider content-bottom">
										
						@foreach ($current_user['tinhot'] as $tinhome)
							<div class="item" style="background-image:url(public/image/{{$tinhome->blog_pic}})">
								<div class="featured-post">
									<div class="post-content">
										<a class="post-cat" href="{{$tinhome->category->slug}}">{{$tinhome->category->name}}</a>
										<h2 class="post-title title-extra-large">
											<a href="{{$tinhome->category->slug}}/{{$tinhome->blog_slug}}">{{$tinhome->blog_title}}</a>
										</h2>
										<span class="post-date">{{ date('M d Y', $tinhome->created_at->timestamp) }}</span>
									</div>
								</div><!--/ Featured post end -->
							</div><!-- Item 3 end -->
						@endforeach

					</div><!-- Featured owl carousel end-->
				</div><!-- Col 6 end -->

				<div class="col-lg-4 col-md-12 pad-l">
					<div class="row">
						<div class="col-md-12">
							<div class="post-overaly-style text-center first clearfix">
								<div class="post-thumb">
									<a href="gioithieu"><img class="img-fluid" src="public/image/{{$current_user['co_1']->gt_pic_a}}" alt="About Us" /></a>
								</div>
								<div class="post-content">
						 			<a class="post-cat" href="gioithieu">About Us</a>
						 			<h2 class="post-title title-medium">
						 				<a href="gioithieu">{{$current_user['co_1']->gt_title_a}}</a>
						 			</h2>
					 			</div><!-- Post content end -->
							</div><!-- Post Overaly end -->
						</div><!-- Col end -->

						<div class="col-md-12">
							<div class="post-overaly-style text-center clearfix">
								<div class="post-thumb">
									<a href="gioithieu"><img class="img-fluid" src="public/image/{{$current_user['co_2']->gt_pic_a}}" alt="About Us" /></a>
								</div>
								<div class="post-content">
						 			<a class="post-cat" href="gioithieu">About Us</a>
						 			<h2 class="post-title title-medium">
						 				<a href="gioithieu">{{$current_user['co_2']->gt_title_a}}</a>
						 			</h2>
					 			</div><!-- Post content end -->
							</div><!-- Post Overaly end -->
						</div><!-- Col end -->
					</div><!-- Row end -->
				</div><!-- Col 6 end -->

			</div><!-- Row end -->
		</div><!-- Container end -->
	</section><!-- Feature area end -->

	