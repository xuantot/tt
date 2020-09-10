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



@foreach ($category_home as $item)
    @if ($item->level == 1)
<div class="featured-tab color-default">
    <h3 class="block-title"><span> {{$item->name}} </span></h3>
    <ul class="nav nav-tabs">
            @foreach ($category_home as $sub_item)

            @if ($sub_item->level == 2 && $sub_item->parent_id == $item->id)
            <li>
                <a class="animated fadeIn" href="{{$sub_item->slug}}" >
                    <span class="tab-head">
                      <span class="tab-text-title">{{$sub_item->name}} </span>					
                  </span>
                </a>
            </li>
            @endif

            @endforeach
        </ul>
      <div class="tab-content">
            <div class="tab-pane active animated fadeInRight">
                <div class="row">
                    <div class="col-md-6">
                        @foreach ($tt_main as $tintuc_main)
                        @if($tintuc_main->category->parent_id == $item->id)
                        <div class="post-block-style clearfix">
                                <div class="post-thumb">
                                    <a href="{{$tintuc_main->category->slug}}/{{$tintuc_main->blog_slug}}">
                                        <img class="img-fluid" src="public/image/{{$tintuc_main->blog_pic}}" alt="" />
                                    </a>
                                </div>
                                <a class="post-cat" href="{{$tintuc_main->category->slug}}">{{$tintuc_main->category->name}}</a>
                                <div class="post-content">
                                    <h2 class="post-title">
                                        <a href="{{$tintuc_main->category->slug}}/{{$tintuc_main->blog_slug}}">{{$tintuc_main->blog_title}}</a>
                                    </h2>
                                    <div class="post-meta">
                                        <span class="post-author"><a href="#">{{$tintuc_main->ita_user->full_name}}</a></span>
                                        <span class="post-date">{{ date('M d Y', $tintuc_main->created_at->timestamp) }}</span>
                                    </div>
                                    <p>{{$tintuc_main->blog_des}}</p>
                                </div><!-- Post content end -->
                            </div><!-- Post Block style end -->
                        @break
                        @endif
                        @endforeach
                    </div><!-- Col end -->
                    <div class="col-md-6">
                        <div class="list-post-block">
                              <ul class="list-post">
                                  @php
                                  $i=0;
                                  @endphp 
                                  @foreach ($tt_main as $tintuc_main)
                                  @if($tintuc_main->category->parent_id == $item->id)
                                    @php
                                        $i++;
                                        if ($i==6) {break;}
                                        if ($i>1) {
                                    @endphp 
                                    <li class="clearfix">
                                        <div class="post-block-style post-float clearfix">
                                            <div class="post-thumb">
                                                <a href="#">
                                                    <img class="img-fluid" src="public/image/{{$tintuc_main->blog_pic}}" alt="" />
                                                </a>
                                            </div><!-- Post thumb end -->

                                            <div class="post-content">
                                                <h2 class="post-title title-small">
                                                    <a href="{{$tintuc_main->category->slug}}/{{$tintuc_main->blog_slug}}">{{$tintuc_main->blog_title}}</a>
                                                </h2>
                                                <div class="post-meta">
                                                    <span class="post-date">{{ date('M d Y', $tintuc_main->created_at->timestamp) }}</span>
                                                </div>
                                            </div><!-- Post content end -->
                                        </div><!-- Post block style end -->
                                    </li><!-- Li 1 end -->
                                    @php
                                    ; }
                                    @endphp           
                                  @endif
                                  @endforeach                              
                              </ul><!-- List post end -->
                          </div><!-- List post block end -->
                    </div><!-- List post Col end -->
                </div><!-- Tab pane Row 1 end -->
            </div><!-- Tab pane 1 end -->
         
      </div>
</div>
<br>
@endif

@endforeach

@if(isset($videohome->video_pic))
<div class="featured-tab color-default">
    <h3 class="block-title"><span> Video </span></h3>
        <div class="container">
            <div class="row">
                <div class="video-tab clearfix">                                                                              
                        <div class="post-thumb">
                        <img class="img-fluid" src="public/image/{{$videohome->video_pic}}" alt="" />
                            <a class="popup" href="{!!$videohome->video_url!!}">
                            <div class="video-icon">
                                <i class="fa fa-play"></i>
                            </div>
                        </a>
                        </div><!-- Post thumb end -->                                                                                                           
                </div><!-- Video tab end -->
            </div><!-- Row end -->
        </div><!-- Container end -->
</div>

@endif

@endsection