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
<li><a href="lienhe">Contact Us</a></li>
@endsection 


@section('content')


            <h1>Contact Us</h1>
            <p>Lumbersexual meh sustainable Thundercats meditation kogi. Tilde Pitchfork vegan, gentrify minim elit semiotics non messenger bag Austin which roasted Lumbersexual meh sustainable Thundercats meditation kogi. Tilde Pitchfork vegan, gentrify minim elit semiotics non messenger bag Austin which roasted</p>

            <div class="widget contact-info">
                <div class="contact-info-box">
                    <div class="contact-info-box-content">
                        <h3>Address</h3>
                        <p>{{$current_user['diachi']->ad_here}}</p>
                    </div>
                </div>

                <div class="contact-info-box">
                    <div class="contact-info-box-content">
                        <h3>Mail Us</h3>
                        <p>{{$current_user['diachi']->ad_email}}</p>
                    </div>
                </div>

                <div class="contact-info-box">
                    <div class="contact-info-box-content">
                        <h3>Call Us</h3>
                        <p> {{$current_user['diachi']->ad_phone}}</p>
                    </div>
                </div>

            </div><!-- Widget end -->

            <br>
            <h2>Contact Form</h2>
                <form method="post" enctype="multipart/form-data" action="lienhe-news" >
                    {{csrf_field()}}
                    <div class="error-container"></div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Name</label>
                            <input class="form-control form-control-name" name="ct_name" id="name" placeholder="" type="text" value="{{old('ct_name')}}" required>
                            @if($errors->has('ct_name'))<p class='text-red'><strong>{{$errors->first('ct_name')}}</p></strong>@endif 
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control form-control-email"  id="email" name="ct_email" value="{{old('ct_email')}}"
                                placeholder="" type="email" required>
                                @if($errors->has('ct_email'))<p class='text-red'><strong>{{$errors->first('ct_email')}}</p></strong>@endif   
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Phone</label>
                                <input class="form-control form-control-subject" id="ct_phone"  name="ct_phone" value="{{old('ct_phone')}}"
                                placeholder="" required>
                                @if($errors->has('ct_phone'))<p class='text-red'><strong>{{$errors->first('ct_phone')}}</p></strong>@endif  
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                            <label>Subject</label>
                            <input class="form-control form-control-subject"  id="subject"  name="ct_title" value="{{old('ct_title')}}"
                                placeholder="" required>
                                @if($errors->has('ct_title'))<p class='text-red'><strong>{{$errors->first('ct_title')}}</p></strong>@endif  
                    </div>

                    <div class="form-group">
                        <label>Message</label>
                        <textarea class="form-control form-control-message" name="ct_content" id="message" placeholder="" rows="10" required>{{old('ct_content')}}</textarea>
                        @if($errors->has('ct_content'))<p class='text-red'><strong>{{$errors->first('ct_content')}}</p></strong>@endif  
                    </div>
                    <div class="text-right"><br>
                        <button class="btn btn-primary solid blank" type="submit">Send Message</button> 
                    </div>
                </form>

@endsection