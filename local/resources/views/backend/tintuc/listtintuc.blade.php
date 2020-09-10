@extends('backend.master.master')
@section('title','Tin Tức')
@section('content')

<section class="content-header">
  <h1>TIN TỨC<small></small></h1>    
</section>      
<section class="content">
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">DANH SÁCH</h3>         
        </div>
        <!-- /.box-header -->
        <div class="box-body">
         
        <div class="row">
            <div class="col-md-10 col-sm-10 col-xs-12">
                @if (session('thongbao'))            
                <p class="text-green"><i class="icon fa fa-check-circle"></i> &nbsp;<strong>{{session('thongbao')}}</strong></p>
                @endif
            </div>
            <div class="col-md-2 col-sm-2 col-xs-12 text-right"><a href="admin/tintuc/add"><button type="button" class="btn btn-block btn-primary btn-sm">Thêm Tin Tức</button></a></div>
        </div>
       <br>
          <table class="table table-hover" id="datatbl" >
            <thead>
                <tr class="bg-thead">
                    <th>No</th>
                    <th>Picture</th>
                    <th>Tin tức</th>
                    <th>URL</th>
                    <th>Category</th>
                    <th>Sắp Xếp</th>
                    <th>Status</th>
                    <th>Hot</th>
                    <th>Last update</th>
                    <th>Setting-Edit-Delete</th>
                  </tr>
            </thead>
            <tbody>
            
              @php
                $no = 0;
              @endphp
            @foreach ($tintuc as $row)
            <tr>
              <td>{{++$no}}</td>
              <td><div class="product-img">
                <img src="public/image/{{$row->blog_pic}}" height="80px" alt="{{$row->blog_title}}">
              </div></td>
              <td>{{$row->blog_title}}</td>
              <td>{{$row->blog_slug}}        
              </td>
              <td>{{$row->category->name}}</td>
              <td>{{$row->blog_order}}</td>
              <td>
              @if ($row->blog_active) <span class="label label-success">Active</span>
              @else                 <span class="label label-danger">Deactive</span>
              @endif   
              </td>
              <td>
              @if ($row->blog_hot) <i class="fa fa-fw fa-tint text-red font-icon-ph"></i>
              @else                 <span>--</span>
              @endif   
              </td>

              <td>{{$row->updated_at}}</td>
              <td>
                <a href={{url('admin/tintuc/addtags/'.$row->id_blog)}} ><i class="fa fa-cog font-icon-ph"></i></a>&nbsp;&nbsp;
                <a href={{url('admin/tintuc/edit/'.$row->id_blog)}} ><i class="fa fa-edit font-icon-ph"></i></a>&nbsp;&nbsp;
                <a href={{url('admin/tintuc/delete/'.$row->id_blog)}} ><i class="fa fa-trash font-icon-ph"></i></a>
              </td>
            </tr>
            @endforeach                   
          </tbody></table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>

@endsection