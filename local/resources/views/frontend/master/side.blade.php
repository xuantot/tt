<div class="sidebar sidebar-right">    

        <div class="widget color-default">
            <h3 class="block-title"><span>Tin Mới</span></h3>
       
            @foreach ($current_user['tinmoi'] as $tinmoi)
                <div class="post-overaly-style clearfix">
                    <div class="post-thumb">
                        <a href="{{$tinmoi->category->slug}}/{{$tinmoi->blog_slug}}">
                            <img class="img-fluid" src="public/image/{{$tinmoi->blog_pic}}" alt="{{$tinmoi->blog_title}}" />
                        </a>
                    </div>                    
                    <div class="post-content">
                    <a class="post-cat" href="{{$tinmoi->category->slug}}">{{$tinmoi->category->name}}</a>
                         <h2 class="post-title title-small">
                             <a href="{{$tinmoi->category->slug}}/{{$tinmoi->blog_slug}}">{{$tinmoi->blog_title}}</a>
                         </h2>
                         <div class="post-meta">
                             <span class="post-date">{{ date('M d Y', $tinmoi->created_at->timestamp) }}</span>
                         </div>
                     </div><!-- Post content end -->
                </div><!-- Post Overaly Article end -->
                <br>
            @endforeach
        </div><!-- Popular news widget end -->

        <!--<div class="widget text-center">-->
            <!--<img class="banner img-fluid" src="public/image/ad-sidebar.png" alt="" />-->
        <!--</div><!-- Sidebar Ad end -->

        <div class="widget color-default">
                <h3 class="block-title"><span>Tin Nóng</span></h3>
    
                <div class="list-post-block">
                    <ul class="list-post">   
    
                        @foreach ($current_user['tinhot'] as $tindocnhieu)

                            <li class="clearfix">
                                <div class="post-block-style post-float clearfix">
                                    <div class="post-thumb">
                                        <a href="{{$tindocnhieu->category->slug}}/{{$tindocnhieu->blog_slug}}">
                                            <img class="img-fluid" src="public/image/{{$tindocnhieu->blog_pic}}" alt="{{$tindocnhieu->blog_title}}" />
                                        </a>
                                        <a class="post-cat" href="{{$tindocnhieu->category->slug}}">{{$tindocnhieu->category->name}}</a>
                                    </div><!-- Post thumb end -->
        
                                    <div class="post-content">
                                         <h2 class="post-title title-small">
                                             <a href="{{$tindocnhieu->category->slug}}/{{$tindocnhieu->blog_slug}}">{{$tindocnhieu->blog_title}}</a>
                                         </h2>
                                         <div class="post-meta">
                                             <span class="post-date">{{ date('M d Y', $tindocnhieu->created_at->timestamp) }}</span>
                                         </div>
                                     </div><!-- Post content end -->
                                </div><!-- Post block style end -->
                            </li><!-- Li 1 end -->

                        @endforeach


                    </ul><!-- List post end -->
                </div><!-- List post block end -->
    
            </div><!-- Popular news widget end -->
        <br>
          
                    
        <div class="widget m-bottom-0">
            <h3 class="block-title"><span>Newsletter</span></h3>
            <div class="ts-newsletter">
                <div class="newsletter-introtext">
                    <h4>Get Updates</h4>
                    <p>Subscribe our newsletter to get the best stories into your inbox!</p>
                </div>

                <div class="newsletter-form">
                        <form class="form-inline position-relative" method="post" enctype="multipart/form-data" action="subscribe" id="form_email"> 
                        <div class="form-group">
                                <input type="email" class="form-control form-control-lg" placeholder="Your Email" id="email_subscribe" name="email_subscribe" style="width:90%"  autocomplete="off">
                      
                                <button type="submit"  class="btn btn-primary" >Subscribe</button>
                        </div>
                        {{ csrf_field() }}
                    </form>

           @if($errors->has('email_subscribe'))<br><p style="color: #dc5353;"><strong>{{$errors->first('email_subscribe')}}</p></strong><br><br>@endif               
        
    
    
    </div>
            </div><!-- Newsletter end -->
        </div><!-- Newsletter widget end -->

    </div><!-- Sidebar right end -->

   