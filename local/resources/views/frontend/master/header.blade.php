<!-- Start Top Header -->
<!-- /End Top Header -->

<!-- Start Fables Navigation -->

<div id="top-bar" class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="ts-date">
                    <i class="fa fa-calendar-check-o"></i>{{ date('F d-Y')}}
                </div>
                <ul class="unstyled top-nav">
                    <li><a href="#">Home</a></li>  
                    <li><a href="gioithieu">About</a></li>                
                    <li><a href="lienhe">Contact</a></li>        
                    <li><a href="gallery">Gallery</a></li>           
                </ul>
            </div><!--/ Top bar left end -->

            <div class="col-md-4 top-social text-lg-right text-md-center">
                <ul class="unstyled">
                    <li>
                        <a title="Facebook" href="#">
                            <span class="social-icon"><i class="fa fa-facebook"></i></span>
                        </a>
                        <a title="Twitter" href="#">
                            <span class="social-icon"><i class="fa fa-twitter"></i></span>
                        </a>
                        <a title="Google+" href="#">
                            <span class="social-icon"><i class="fa fa-google-plus"></i></span>
                        </a>
                        <a title="Linkdin" href="#">
                            <span class="social-icon"><i class="fa fa-linkedin"></i></span>
                        </a>
                        <a title="Rss" href="#">
                            <span class="social-icon"><i class="fa fa-rss"></i></span>
                        </a>
                        <a title="Skype" href="#">
                            <span class="social-icon"><i class="fa fa-skype"></i></span>
                        </a>
                    </li>
                </ul><!-- Ul end -->
            </div><!--/ Top social col end -->
        </div><!--/ Content row end -->
    </div><!--/ Container end -->
</div><!--/ Topbar end -->

<!-- Header start -->
<header id="header" class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12 col-lg-3">
                <div class="logo">
                     <a href="#">
                        <img src="public/image/logo.PNG" alt="Logo" >
                     </a>
                </div>
            </div><!-- logo col end -->

            <div class="col-md-9 col-sm-12 col-lg-9 header-right">
                <div class="float-right">
                    <a href="#"><img src="public/image/header.png" class="img-fluid" alt=""></a>
                </div>
            </div>
            
            <!-- header right end -->
        </div><!-- Row end -->
    </div><!-- Logo and banner area end -->
</header><!--/ Header end -->

<div class="main-nav clearfix">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg col">
                <div class="site-nav-inner float-left">
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
              <span class="fa fa-bars" style="color:white"></span>
           </button>
           <!-- End of Navbar toggler -->

                    <div id="navbarSupportedContent" class="collapse navbar-collapse navbar-responsive-collapse">
                        <ul class="nav navbar-nav">                        
                            <li>
                                <a href="#" >Home</a>                  
                            </li>                       
                        
                            {{category_menu($current_user['category_menu'])}}

                        </ul><!--/ Nav ul end -->
                    </div><!--/ Collapse end -->

                </div><!-- Site Navbar inner end -->
            </nav><!--/ Navigation end -->
{{--  
            <div class="nav-search">
                <span id="search"><i class="fa fa-search"></i></span>
            </div><!-- Search end -->
            
            <div class="search-block" style="display: none;">
                <input type="text" class="form-control" placeholder="Type what you want and enter">
                <span class="search-close">&times;</span>
            </div>  --}}

        </div><!--/ Row end -->
    </div><!--/ Container end -->

</div><!-- Menu wrapper end -->


<!-- /End Fables Navigation --> 
  