@extends('backend.master.master')
@section('title','SỬA TAGS')
@section('content')


<section class="content-header">
  <h1>SỬA TAGS<small></small></h1>   
  <ol class="breadcrumb">
    <li><a href="admin/tags/list"><button type="button" class="btn btn-block btn-danger btn-xs">BACK</button></a></li>
  </ol> 
</section>  
 
<section class="content">
<div class="row">   
    <div class="col-md-12">
    <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">SỬA THÔNG TIN</h3>          
        </div>
        <!-- /.box-header -->
        <!-- form start -->

        <form  method="post" enctype="multipart/form-data" action="">
          {{csrf_field()}}
          <div class="box-body">
            <div class="form-group">                          
              <label>Tên</label>
              @if($errors->has('tag_name'))<p class='text-red'><strong>{{$errors->first('tag_name')}}</p></strong>@endif   
              <input type="text" class="form-control" id="name" name="tag_name" placeholder="" value="{{$tags->tag_name}}">
            </div>
          
            {{-- <div class="form-group">
                <label>Link</label>
                @if($errors->has('tag_slug'))<p class='text-red'><strong>{{$errors->first('tag_slug')}}</p></strong>@endif   
                <input type="text" class="form-control" id="slug" name="tag_slug" placeholder="" value="{{$tags->tag_slug}}">
               </div> --}}

               <input type="hidden" class="form-control" id="slug" name="tag_slug" placeholder="" value="{{$tags->tag_slug}}">


          </div>
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Update</button>&nbsp;
            <button type="reset" class="btn btn-danger">Reset</button>
          </div>
        </form>
      </div>
    </div>
</div>
</section>   

@endsection 