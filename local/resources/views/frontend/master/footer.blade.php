<!-- Start Footer 2 Background Image  -->
<br>

<footer id="footer" class="footer">
    <div class="footer-main">
        <div class="container">
            <div class="row">
     
                    <div class="col-lg-4 col-sm-12 footer-widget twitter-widget">
                            <h3 class="widget-title">Latest Tweets</h3>
                            <ul>
                                <li>
                                    <div class="tweet-text">
                                    <span>Địa Chỉ</span>
                                    {{$current_user['diachi']->ad_here}}
                                  
                                    </div>
                                </li>
                                <li>
                                    <div class="tweet-text">
                                    <span>Phone</span>
                                    {{$current_user['diachi']->ad_phone}}
                                 
                                    </div>
                                </li>
                                <li>
                                    <div class="tweet-text">
                                    <span>Email</span>
                                    {{$current_user['diachi']->ad_email}}
                                    </div>
                                </li>
                            </ul>
                        </div><!-- Col end -->

                <div class="col-lg-3 col-sm-12 footer-widget widget-categories">
                    <h3 class="widget-title">Danh Mục</h3>
                    <ul>
                        <li>
                            <a href="#"><span class="catTitle">About Us</span></a>                            
                        </li>         
                        <li>                           
                            <a href="#"><span class="catTitle">Contact Us</span></a>                            
                        </li> 
                        <li>                       
                            <a href="#"><span class="catTitle">Gallery</span></a>
                        </li>               
                    </ul>
                    
                </div><!-- Col end -->

                <div class="col-lg-5 col-sm-12 footer-widget">
                    <h3 class="widget-title">Fanpage Facebook</h3>
                   
                            {!!$current_user['diachi']->ad_fanpage!!}
              
                </div><!-- Col end -->

            </div><!-- Row end -->
        </div><!-- Container end -->
    </div><!-- Footer main end -->
</footer><!-- Footer end -->

<div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="copyright-info">
                        <span>Copyright © 2019 By News - Development By Van Phi</span>
                    </div>
                </div>
            </div><!-- Row end -->

            <div id="back-to-top" class="back-to-top">
                <button class="btn btn-primary" title="Back to Top">
                    <i class="fa fa-angle-up"></i>
                </button>
            </div>

        </div><!-- Container end -->
</div><!-- Copyright end -->



<div class="phonering-alo-phone phonering-alo-green phonering-alo-show" id="phonering-alo-phoneIcon">
        <div class="phonering-alo-ph-circle"></div>
        <div class="phonering-alo-ph-circle-fill"></div>        
        <div class="phonering-alo-ph-img-circle">           
            <a href="tel:{{$current_user['diachi']->ad_phone}}" class="pps-btn-img " title="Liên hệ">
                <img src="public/image/phone.png" alt="Liên hệ" width="40" style="margin:7px 0 0 7px ">               
            </a>
        </div>
</div>

<div>
    {!!$current_user['diachi']->ad_chat!!}
</div>




<!-- /End Footer 2 Background Image -->