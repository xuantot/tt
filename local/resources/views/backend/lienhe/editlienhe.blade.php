@extends('backend.master.master')
@section('title','Sửa Khóa Học')
@section('content')

<section class="content-header">
  <h1>KHÓA HỌC<small></small></h1>   
  <ol class="breadcrumb">
    <li><a href="admin/khoahoc/list"><button type="button" class="btn btn-block btn-danger btn-xs">BACK</button></a></li>
  </ol> 
</section>  
 
<section class="content">

<div class="row">   
    <div class="col-md-12">
    <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">SỬA THÔNG TIN</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form  method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          <div class="box-body">
              @if (session('thongbao'))<p class="text-green"><i class="icon fa fa-check-circle"></i> &nbsp;<strong>{{session('thongbao')}}</strong></p> @endif
            <div class="form-group">                          
              <label>Tên</label>
              @if($errors->has('ct_name'))<p class='text-red'><strong>{{$errors->first('ct_name')}}</p></strong>@endif   
              <input type="text" class="form-control" id="ct_name" name="ct_name" value="{{$lienhe->ct_name}}">
            </div>
            <div class="form-group">
                <label>Phone</label>
                @if($errors->has('kh_slug'))<p class='text-red'><strong>{{$errors->first('ct_phone')}}</p></strong>@endif   
                <input type="text" class="form-control" id="ct_phone" name="ct_phone" value="{{$lienhe->ct_phone}}">
              </div>
            <div class="form-group">
              <label>Email</label>
              @if($errors->has('kct_email'))<p class='text-red'><strong>{{$errors->first('ct_email')}}</p></strong>@endif   
              <input type="text" class="form-control" id="ct_email" name="ct_email" placeholder="" value="{{$lienhe->ct_email}}">
            </div>
            <div class="form-group"> 	
              <label>Tiêu Đề</label>
              @if($errors->has('ct_title'))<p class='text-red'><strong>{{$errors->first('ct_title')}}</p></strong>@endif   
              <input type="text" class="form-control" id="ct_title" name="ct_title" placeholder="" value="{{$lienhe->ct_title}}">
            </div>              
            <div class="form-group">
              <label>Tin Nhắn</label>
              @if($errors->has('ct_content'))<p class='text-red'><strong>{{$errors->first('ct_content')}}</p></strong>@endif  
              <input type="text" class="form-control" id="ct_content" name="ct_content" placeholder="6 tháng" value="{{$lienhe->ct_content}}">
            </div>                 
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Update</button>
            <button type="reset" class="btn btn-danger">Reset</button>
          </div>
        </form>
      </div>
    </div>
</div>
</section> 
@endsection 