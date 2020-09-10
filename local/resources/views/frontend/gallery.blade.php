@extends('frontend.master.master')
 @section('seo')
    <meta name="description" content="{{$seo->seo_des}}" >
    <meta name="keywords" content="{{$seo->seo_keywords}}">    
    <meta property="og:title" content="{{$seo->seo_title}}" />
    <meta property="og:description" content="{{$seo->seo_des}}" />
    <meta property="og:image" content="{{get_root()}}/public/image/{{$seo->seo_pic}}" />  
    <title>{{$seo->seo_title}}</title>
@endsection 

@section('becrum')
<li><a href="#">Gallery</a></li>
@endsection 

@section('content')
            <div class="container">
                <div class="row">                  
                    <div class="block category-listing category-style2">
						<h1 class="block-title"><span>Gallery</span></h1>
						<div class="row">
                        @foreach ($pic as $pic_item)
							<div class="col-md-12">
								<div class="post-block-style top-larget-post clearfix">
									<div class="post-thumb">
										<a href="#">
                                        <img class="img-fluid" src="public/image/{{$pic_item->pic_img}}" alt="{{$pic_item->pic_name}}" />
										</a>
									</div>
									<a class="post-cat" href="#">{{$pic_item->pic_name}}</a>
								</div><!-- Post Block style end -->
                            </div><!-- Col end -->
                        @endforeach                           
                        </div><!-- Top Big post end -->			
                        <div class="paging">
                                {!! $pic->links() !!}
                       </div>
					</div><!-- Block Technology end -->                         
                </div><!-- Row end -->
            </div><!-- Container end -->
@endsection