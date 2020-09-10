@extends('backend.master.master')
@section('title','Thêm Đăng Ký Theo Dõi')
@section('content')


<section class="content-header">
  <h1>ĐĂNG KÝ THEO DÕI<small></small></h1>   
  <ol class="breadcrumb">
    <li><a href="admin/dktheodoi/list"><button type="button" class="btn btn-block btn-danger btn-xs">BACK</button></a></li>
  </ol> 
</section>  
 
<section class="content">
<div class="row">   
    <div class="col-md-12">
    <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">NHẬP THÔNG TIN</h3>          
        </div>
        <!-- /.box-header -->
        <!-- form start -->

        <form  method="post" enctype="multipart/form-data" action="">
          {{csrf_field()}}
          <div class="box-body">
            <div class="form-group">                          
              <label>Địa Chỉ Email</label>
              @if($errors->has('dkth_email'))<p class='text-red'><strong>{{$errors->first('dkth_email')}}</p></strong>@endif   
              <input type="text" class="form-control" id="dkth_email" name="dkth_email" placeholder="abc@gmail.com">
            </div>            
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>&nbsp;
            <button type="reset" class="btn btn-danger">Reset</button>
          </div>
        </form>
      </div>
    </div>
</div>
</section>   

@endsection 