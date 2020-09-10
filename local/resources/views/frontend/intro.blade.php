@extends('frontend.master.master')
@section('seo')
    <meta name="description" content="{{$seo->seo_des}}" >
    <meta name="keywords" content="{{$seo->seo_keywords}}">    
    <meta property="og:title" content="{{$seo->seo_title}}" />
    <meta property="og:description" content="{{$seo->seo_des}}" />
    <meta property="og:image" content="{{get_root()}}/public/image/{{$seo->seo_pic}}" />  
    <title>{{$seo->seo_title}}</title>
@endsection
@section('content')

@section('becrum')
<li><a href="gioithieu">About Us</a></li>
@endsection      
       
<div class="block">
        <h1 class="block-title"><span>About US</span></h1>                  
        @foreach ($gt as $gt_item)
        <div class="post-media post-featured-image">
                <a href="public/image/{{$gt_item->gt_pic_a}}" class="gallery-popup"><img
                        src="public/image/{{$gt_item->gt_pic_a}}" class="img-fluid" alt=""></a>
        </div>
        <blockquote class="pull-left" style="padding: 20px;">
                <br>
            <h2>{{$gt_item->gt_title_a}}</h2>                        
            {!!$gt_item->gt_content_a!!}                    
        </blockquote>    
        <div class="gap-20"></div>
        @endforeach
</div>
@endsection