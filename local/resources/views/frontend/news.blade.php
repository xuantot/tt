@extends('frontend.master.master')
@section('seo')
    <meta name="description" content="{{$name_catego->short_description}}" >
    <meta name="keywords" content="{{$name_catego->name}}">    
    <meta property="og:title" content="{{$name_catego->name}}" />
    <meta property="og:description" content="{{$name_catego->short_description}}" />
    <meta property="og:image" content="{{get_root()}}/public/image/{{$name_catego->img}}" />  
    <title>{{$name_catego->name}}</title>
@endsection 


@section('becrum')
<li><a href="{{$name_catego->slug}}" style="color:black">{{$name_catego->name}}</a></li>
@endsection 


@section('content')


      
	
            <div class="container">
                <div class="row">                   
    
                        <div class="block category-listing category-style2">
                            <h1 class="block-title"><span>{{$name_catego->name}}</span></h1>                          
                            
    
                         @foreach ($tintuc_group as $tintuc_group_item)
                             
                         <div class="post-block-style post-list clearfix">
                                <div class="row">
                                    <div class="col-lg-5 col-md-6">
                                        <div class="post-thumb thumb-float-style">
                                            <a href="{{$name_catego->slug}}/{{$tintuc_group_item->blog_slug}}">
                                                <img class="img-fluid" src="public/image/{{$tintuc_group_item->blog_pic}}" alt="" />
                                            </a>                                         
                                        </div>
                                    </div><!-- Img thumb col end -->
    
                                    <div class="col-lg-7 col-md-6">
                                        <div class="post-content">
                                             <h2 class="post-title title-large">
                                                 <a href="{{$name_catego->slug}}/{{$tintuc_group_item->blog_slug}}">{{$tintuc_group_item->blog_title}}</a>
                                             </h2>
                                             <div class="post-meta">
                                                 <span class="post-author"><a href="#">{{$tintuc_group_item->ita_user->full_name}}</a></span>
                                                 <span class="post-date">{{ date('M d Y', $tintuc_group_item->created_at->timestamp) }}</span>
                                               
                                             </div>
                                            <div>{{$tintuc_group_item->blog_des}}</div>
                                         </div><!-- Post content end -->
                                    </div><!-- Post col end -->
                                </div><!-- 1st row end -->
                            </div><!-- 1st Post list end -->

                         @endforeach
   
    
                        </div><!-- Block Technology end -->
    
                        <div class="paging">
                                {!! $tintuc_group->links() !!}
                      </div>
    
                </div><!-- Row end -->
            </div><!-- Container end -->
 
    

@endsection