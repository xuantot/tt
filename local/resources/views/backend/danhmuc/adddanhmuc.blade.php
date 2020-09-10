@extends('backend.master.master')
@section('title','Danh Mục Bài Viết')
@section('content')

<section class="content-header">
  <h1>Danh Mục Bài Viết <small> Thêm Danh Mục</small></h1>    
</section>      
<section class="content">
 
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Nhập Thông Tin Danh Mục</h3>         
        </div>
        <!-- /.box-header -->
      
           
        <div class="box-body">   
            @if (session('thongbao'))            
        <p class="text-green"><i class="icon fa fa-check-circle"></i> &nbsp;<strong>{{session('thongbao')}}</strong></p>
        @endif     
       <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12" style="border-right: 2px solid gray;">
          <form  method="post" enctype="multipart/form-data" action="">
            {{csrf_field()}}
            <div class="box-body">

              <div class="form-group">
                <label>Danh Mục Cha</label>
                <select class="form-control" name="parent_id" id="parent_id">                
                  <option value='0'>--ROOT--</option> 
                    @foreach ($category_parent as $name)
                    <option value="{{$name->id}}">{{$name->name}}</option>   
                    @endforeach                 
                </select>
              </div>      

              <div class="form-group">                          
                <label>Tên Danh Mục</label>
                @if($errors->has('name'))<p class='text-red'><strong>{{$errors->first('name')}}</p></strong>@endif   
                <input type="text" class="form-control" id="name" name="name" placeholder="Xã Hội" value="{{old('name')}}" autocomplete="off">
              </div>

              <div class="form-group">                          
                <label>URL</label>
                @if($errors->has('slug'))<p class='text-red'><strong>{{$errors->first('slug')}}</p></strong>@endif   
                <input type="text" class="form-control" id="slug" name="slug" placeholder="tin-xa-hoi" value="{{old('slug')}}" autocomplete="off">
              </div>

              <div class="form-group">
                <label>Mô tả ngắn</label>
                @if($errors->has('short_description'))<p class='text-red'><strong>{{$errors->first('short_description')}}</p></strong>@endif   
                <input type="text" class="form-control" id="short_description" name="short_description" placeholder="" autocomplete="off" value="{{old('short_description')}}">
              </div>

              <div class="form-group">
                <label>Ảnh Mô Tả ( 240 x 296px )</label>    
                @if($errors->has('img'))<p class='text-red'><strong>{{$errors->first('img')}}</p></strong>@endif     
                <input type="file" class="form-control" id="form_pic" name="img" class="form-control" style="display:none" onchange="changeImg(this)">
                <img id="avatar" class="thumbnail cursorpoint" width="240px" height="296px" src="public/image/import-img.png">
                <p class="help-block">Upload file .JPG .PNG and not greater than 5M </p>
              </div>    

              <div class="form-group">
                <label>Sắp Xếp</label>
                @if($errors->has('order'))<p class='text-red'><strong>{{$errors->first('order')}}</p></strong>@endif   
                <input type="number" class="form-control" id="order" name="order" placeholder="" autocomplete="off">
              </div>  

              <div class="form-group">
                <label>Status</label>
                <select class="form-control" name="status" id="status">  
                  <option value='0'>Deactive</option> 
                  <option value='1'>Active</option>               
                </select>
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
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>

<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Information Category</h4>
        </div>
        <div class="modal-body">
           <div id="result"></div>
        </div>
        <div class="modal-footer">
          </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

  <script>
    function loadinfor(id)
      {          
        $.ajax({
        url:"{{url('admin/danhmuc/info')}}", 
        type:"GET", 
        dataType:"text",
        data:{"id":id, "_token":<?php echo csrf_token() ?>},
        success:function(data){       
         $('#result').html(data);
        }
        error: function() {
          alert("There was an error. Try again please!");
        }
      });
   
      }
    </script>
  @endsection