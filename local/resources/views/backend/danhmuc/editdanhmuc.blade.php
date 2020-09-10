@extends('backend.master.master')
@section('title','Danh Mục Bài Viết')
@section('content')

<section class="content-header">
  <h1>Danh Mục Bài Viết <small></small></h1>  
  <ol class="breadcrumb">
      <li><a href="admin/danhmuc/list"><button type="button" class="btn btn-block btn-danger btn-xs">BACK</button></a></li>
    </ol>        
</section>      
<section class="content">
 
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Sửa Danh Mục</h3>    
         
        </div>
        <!-- /.box-header -->
      
           
        <div class="box-body">   
            @if (session('thongbao'))            
        <p class="text-red"><i class="icon fa fa-times-circle"></i> &nbsp;<strong>{{session('thongbao')}}</strong></p>
        @endif     
       <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12" >
          <form  method="post" enctype="multipart/form-data" action="">
            {{csrf_field()}}
            <div class="box-body">

              @if ($category->id !=1 && $category->id !=2)
              <div class="form-group">
                <label>Danh Mục Cha</label>
                <select class="form-control" name="parent_id" id="parent_id">                
                  <option value='0'>--ROOT--</option> 
                    @foreach ($category_parent as $name)
                     
                      <option @if ($name->id  == $category->parent_id ) selected  @endif  value="{{$name->id}}">{{$name->name}}</option>   
                  
                    @endforeach                 
                </select>
              </div>      
              @else 
              <input type="hidden" class="form-control" id="parent_id" name="parent_id" value="{{$category->parent_id}}">
              @endif

              <div class="form-group">                          
                <label>Tên Danh Mục</label>
                @if($errors->has('name'))<p class='text-red'><strong>{{$errors->first('name')}}</p></strong>@endif   
                <input type="text" class="form-control" id="name" name="name" placeholder="Xã Hội" value="{{$category->name}}">
              </div>

              <div class="form-group">                          
                <label>URL</label>
                @if($errors->has('slug'))<p class='text-red'><strong>{{$errors->first('slug')}}</p></strong>@endif   
                <input type="text" class="form-control" id="slug" name="slug" placeholder="tin-xa-hoi" value="{{$category->slug}}">
              </div>

              <div class="form-group">
                <label>Mô tả ngắn</label>
                @if($errors->has('short_description'))<p class='text-red'><strong>{{$errors->first('short_description')}}</p></strong>@endif   
                <input type="text" class="form-control" id="short_description" name="short_description" placeholder="" value="{{$category->short_description}}">
              </div>

              <div class="form-group">
                <label>Ảnh Mô Tả ( 240 x 296px )</label>    
                @if($errors->has('img'))<p class='text-red'><strong>{{$errors->first('img')}}</p></strong>@endif     
                <input type="file" class="form-control" id="form_pic" name="img" class="form-control" style="display:none" onchange="changeImg(this)">
                <img id="avatar" class="thumbnail cursorpoint" width="240px" height="296px" src={{url('public/image/'.$category->img)}}>
                <p class="help-block">Upload file .JPG .PNG and not greater than 5M </p>
              </div>    
              @if ($category->id !=1 && $category->id !=2)
              <div class="form-group">
                <label>Sắp Xếp</label>
                @if($errors->has('order'))<p class='text-red'><strong>{{$errors->first('order')}}</p></strong>@endif   
                <input type="number" class="form-control" id="order" name="order" placeholder="" value={{$category->order}}>
              </div>  
              @else 
                <input type="hidden" class="form-control" id="order" name="order" value={{$category->order}}>
              @endif
              <div class="form-group">
                <label>Status</label>
                <select class="form-control" name="status" id="status">                      
                  <option value='0' @if ($category->status  == 0) selected  @endif >Deactive</option>      
                  <option value='1' @if ($category->status  == 1) selected  @endif >Active</option>      
                </select>
              </div>                        
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Update</button>&nbsp;
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

@endsection