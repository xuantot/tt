@extends('frontend.master.master')
@section('seo')
    <meta name="description" content="{{$detail_news->blog_des}}" >
    <meta name="keywords" content="{{$detail_news->blog_title}}">    
    <meta property="og:title" content="{{$detail_news->blog_title}}" />
    <meta property="og:description" content="{{$detail_news->blog_des}}" />
    <meta property="og:image" content="{{get_root()}}/public/image/{{$detail_news->blog_pic}}" />  
    <title>{{$detail_news->blog_title}}</title>
@endsection

@section('becrum')
<li><a href="{{$detail_news->category->slug}}">{{$detail_news->category->name}}</a></li>
<li><a href="#" style="color:black">{{$detail_news->blog_title}}</a></li>
@endsection

@section('content')

<div class="single-post">
  
    <div class="post-title-area">
        <a class="post-cat" href="{{$detail_news->category->slug}}">{{$detail_news->category->name}}</a>
		<div style="float:right" class="fb-like" data-href="{{get_url()}}" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
 
        <h1 class="post-title">
                {{$detail_news->blog_title}}
        </h1>
		
		
        <div class="post-meta">
            <span class="post-author">
                By <a href="#">{{$detail_news->ita_user->full_name}}</a>
            </span>
            <span class="post-date"><i class="fa fa-clock-o"></i>{{ date('M d Y', $detail_news->created_at->timestamp) }}</span>            
        </div>
    </div><!-- Post title end -->

    <div class="post-content-area">
        <h2 style="font-size: 15px">{{$detail_news->blog_des}}</h2>

        <div class="post-media post-featured-image">
            <a href="public/image/{{$detail_news->blog_pic}}" class="gallery-popup"><img
                    src="public/image/{{$detail_news->blog_pic}}" class="img-fluid" alt=""></a>
        </div>
        <div class="entry-content">
      
           {!! $detail_news->blog_content !!}
         
        </div><!-- Entery content end -->

         <div class="tags-area clearfix">
            <div class="post-tags">
                <span>Tags:</span>

            @foreach ($detail_news->tags as $tagitem)
            <a href="tags/{{$tagitem->tag_slug}}"># {{$tagitem->tag_name}}</a>
            @endforeach
              
            </div>
        </div> 
      
    </div><!-- post-content end -->
</div><!-- Single post end -->


 <div class="author-box">
    <div class="author-img pull-left">
        <img src="public/image/{{$detail_news->ita_user->avatar}}" alt="{{$detail_news->ita_user->full_name}}">
    </div>
    <div class="author-info">
        <h3>{{$detail_news->ita_user->full_name}}</h3>
        <p class="author-url"><a href="#">{{$detail_news->ita_user->email}}</a></p>
        <p>{{$detail_news->ita_user->short_des}}</p>    
    </div>
</div>  

<div class="related-posts block">
    <h3 class="block-title"><span>Related Posts</span></h3>

    <div id="latest-news-slide" class="owl-carousel owl-theme latest-news-slide">
       

     @foreach ($detail_relate as $detail_relate_item)         
     <div class="item">
            <div class="post-block-style clearfix">
                <div class="post-thumb">
                    <a href="{{$detail_relate_item->category->slug}}/{{$detail_relate_item->blog_slug}}"><img class="img-fluid" src="public/image/{{$detail_relate_item->blog_pic}}"
                            alt="{{$detail_relate_item->blog_title}}" /></a>
                </div>
                <a class="post-cat" href="{{$detail_relate_item->category->slug}}">{{$detail_relate_item->category->name}}</a>
                <div class="post-content">
                    <h2 class="post-title title-medium">
                        <a href="{{$detail_relate_item->category->slug}}/{{$detail_relate_item->blog_slug}}">{{$detail_relate_item->blog_title}}</a>
                    </h2>
                    <div class="post-meta">
                        <span class="post-author"><a href="#">{{$detail_relate_item->ita_user->full_name}}</a></span>
                        <span class="post-date">{{ date('M d Y', $detail_relate_item->created_at->timestamp) }}</span>
                    </div>
                </div><!-- Post content end -->
            </div><!-- Post Block style end -->
        </div><!-- Item 1 end -->
     @endforeach


    </div><!-- Carousel end -->

</div><!-- Related posts end -->

<!-- Post comment start -->
<div id="comments" class="comments-area block">
    <h3 class="block-title"><span>Facebook Comment</span></h3>
   <div class="fb-comments" data-href="{{get_url()}}" data-numposts="20" data-width="100%"></div>
</div><!-- Post comment end -->




@endsection