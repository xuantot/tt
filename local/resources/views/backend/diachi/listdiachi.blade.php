@extends('backend.master.master')
@section('title','Địa Chỉ')
@section('content')

<section class="content-header">
  <h1>Địa Chỉ <small></small></h1>    
</section>      
<section class="content">
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">THÔNG TIN</h3>
         
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          @if (session('thongbao'))            
                <p class="text-green"><i class="icon fa fa-check-circle"></i> &nbsp;<strong>{{session('thongbao')}}</strong></p>
            @endif
       <br>
       <form  method="post" enctype="multipart/form-data" action="">
        {{csrf_field()}}
          <table class="table table-hover">
              <tbody>
                <tr class="bg-thead"><th  colspan="2">Thông Tin Liên Hệ</th></tr>
                <tr><th style="width:200px">Địa Chỉ</th><td>     
                    @if($errors->has('ad_here'))<p class='text-red'><strong>{{$errors->first('ad_here')}}</p></strong>@endif                          
                    <textarea name="ad_here" class="form-control " >{{$diachi->ad_here}}</textarea>
                </td></tr>                        
                <tr><th>Số Điện Thoại</th><td>
                    @if($errors->has('ad_phone'))<p class='text-red'><strong>{{$errors->first('ad_phone')}}</p></strong>@endif   
                    <input type="text" class="form-control" id="ad_phone" name="ad_phone" placeholder="" value="{{$diachi->ad_phone}}" >
                 </td></tr>              
                <tr><th>Email</th><td>
                    @if($errors->has('ad_email'))<p class='text-red'><strong>{{$errors->first('ad_email')}}</p></strong>@endif   
                    <input type="text" class="form-control" id="ad_email" name="ad_email" placeholder="" value="{{$diachi->ad_email}}" >
                </td> </tr>   
                <tr><th>Mạng Xã Hội</th><td>
                    @if($errors->has('ad_fb'))<p class='text-red'><strong>{{$errors->first('ad_fb')}}</p></strong>@endif   
                    <input type="text" class="form-control" id="ad_fb" name="ad_fb" placeholder="" value="{{$diachi->ad_fb}}" >
                
                </td></tr>
                <tr><th>Ngân Hàng</th><td>
                    @if($errors->has('ad_bank'))<p class='text-red'><strong>{{$errors->first('ad_bank')}}</p></strong>@endif   
                    <textarea name="ad_bank" class="form-control " >{{$diachi->ad_bank}}</textarea>
                </td></tr>
                <tr class="bg-thead"><th  colspan="2">Ứng Dụng tawk.to, Đăng ký ONLINE tại <a>https://www.tawk.to/</a></th></tr>
                <tr><th>Cửa Sổ Chat</th><td>
                    Tạo Script và copy vào ô bên dưới
                  @if($errors->has('ad_chat'))<p class='text-red'><strong>{{$errors->first('ad_chat')}}</p></strong>@endif   
                  <textarea rows='8' name="ad_chat" class="form-control " >{{$diachi->ad_chat}}</textarea>
              </td></tr>
            <tr class="bg-thead"><th  colspan="2">Facebook : Like , Comment</th></tr>
              <tr><th>fb-root</th><td>
                @if($errors->has('ad_fbroot'))<p class='text-red'><strong>{{$errors->first('ad_fbroot')}}</p></strong>@endif   
                <textarea rows='5' name="ad_fbroot" class="form-control " >{{$diachi->ad_fbroot}}</textarea>
              </td></tr>

              <tr><th>Fanpage Facebook</th><td>
                @if($errors->has('ad_fanpage'))<p class='text-red'><strong>{{$errors->first('ad_fanpage')}}</p></strong>@endif   
                <textarea rows='5' name="ad_fanpage" class="form-control " >{{$diachi->ad_fanpage}}</textarea>
              </td></tr>

                <tr><th>Action</th><td><button type="submit" class="btn btn-flat btn-primary">Cập Nhật Thông Tin</button></td></tr>                          
              </tbody>
        </table>
      </form>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>

@endsection