@extends('backend.master.master')
@section('title','Tin Tức')
@section('content')


<section class="content-header">
  <h1>TIN TỨC<small></small></h1>   
  <ol class="breadcrumb">
    <li><a href="admin/tintuc/list"><button type="button" class="btn btn-block btn-primary btn-xs">Finished</button></a></li>
  </ol> 
</section>  
 
<section class="content">
  <div class="row">   
      <div class="col-md-8 col-sm-12">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">REVIEW BÀI VIẾT</h3>      
            <div class="box-tools pull-right">             
              <a href={{url('admin/tintuc/edit/'.$tintuc->id_blog)}}> <button type="button" class="btn btn-box-tool" ><i class="fa fa-edit font-icon-ph text-red"></i></button></a>
            </div>    
          </div>
         
          <div class="box-body">      
              <div class="post">
                  <div class="user-block">
                                         
                  <span class="label label-info">{{$tintuc->category->name}}</span>
               <h2>{{$tintuc->blog_title}}</h2>
                <ul class="list-inline">
                  <li><a href="#" class="link-black text-sm"><i class="fa fa-user margin-r-5"></i>{{$tintuc->ita_user->full_name}}</a></li>
                <li><a href="#" class="link-black text-sm"><i class="fa fa-clock-o margin-r-5"></i>{{ date('M d Y', $tintuc->created_at->timestamp) }}</a>
                  </li>                 
                </ul>
                  </div>                  
                  <!-- /.user-block -->
                  <div class="row margin-bottom">
                    <div class="col-sm-12">
                      <strong>{{$tintuc->blog_des}}</strong>
                      <br><br>
                      <img class="img-responsive" src="public/image/{{$tintuc->blog_pic}}" alt="Photo">
                      <br>
                      <div>{!! $tintuc->blog_content !!}</div>
                    </div>
                    <!-- /.col -->     
                    
                    <div class="col-sm-12">
                      <ul class="list-inline">
                          <li>Thẻ Tags :</li>                         
                      @foreach ($tags_list as $row_ta)
                       <li>
                          <span class="label label-primary">#{{$row_ta->tags->tag_name}}</span>
                      </li>   
                      @endforeach      
                      </ul>
                    </div>
                   </div>
                  <!-- /.row -->                               
                </div>
          </div>
          <!-- /.box-body -->
         </div>
      </div>
        {{-- Tags --}}
      <div class="col-md-4 col-sm-12">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">TAGS</h3>          
          </div>
         
          <div class="box-body">
      
<div class="row">

<div class="col-md-12">
    @if (session('thongbao'))            
    <p class="text-green"><i class="icon fa fa-check-circle"></i> &nbsp;<strong>{{session('thongbao')}}</strong></p>
    @endif
    <form  method="post" enctype="multipart/form-data" action="">
      {{csrf_field()}}
    <div class="form-group">
        <label>Chọn Từ Có Sẵn</label>
        <select class="form-control select2" multiple="multiple" data-placeholder="Select Tags"
                style="width: 100%;" name="tags_new[]">
              @foreach ($tags as $item_tags)
                  <option value="{{$item_tags->id}}">{{$item_tags->tag_name}}</option>
              @endforeach        
        </select>
    </div>

    <label>hoặc Nhập Tags Name</label>
    <div class="input-group input-group-sm">        
        <input type="text" class="form-control" name="tag_single" id="name">
            <span class="input-group-btn">
              <button type="submit" class="btn btn-success btn-flat">SAVE</button>
            </span>
    </div>
    @if($errors->has('tag_single'))<p class='text-red'><strong>{{$errors->first('tag_single')}}</p></strong>@endif  
      <input type="hidden" value="{{$tintuc->id_blog}}" name="news_id">

      <input type="hidden" class="form-control" id="slug" name="tag_slug" placeholder="" value="{{old('tag_slug')}}" autocomplete="off">

    </form>
    </div> 
  </div>
    
          </div>
          <!-- /.box-body -->
        </div>

        <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">TAGS LIST</h3>          
            </div>
           
            <div class="box-body">
        
              <table class="table table-bordered">
                <tbody><tr>           
                  <th>Tags</th>               
                  <th style="width: 40px">Delete</th>
                </tr>
                @foreach ($tags_list as $row_tags)
                <tr>             
                   <td>{{$row_tags->tags->tag_name}}</td>                 
                  <td style="text-align:center">
                    <a href={{url('admin/tintuc/deletetag/'.$tintuc->id_blog.'/'.$row_tags->id)}} ><i class="fa fa-trash font-icon-ph"></i></a>
                  </td>
                </tr>    
                @endforeach             
              </tbody></table>


            </div>
            <!-- /.box-body -->
        </div>


      </div>
  </div>
</section>    


@endsection 