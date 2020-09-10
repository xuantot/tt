@extends('backend.master.master')
@section('title','Danh Mục Bài Viết')
@section('content')

<section class="content-header">
  <h1>Danh Mục Bài Viết <small></small></h1>    
</section>      
<section class="content">
 
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Danh Sach</h3>         
        </div>
        <!-- /.box-header -->
      
           
        <div class="box-body">   
        
        <div class="row">
            <div class="col-md-10 col-sm-10 col-xs-12">
                @if (session('thongbao'))            
                <p class="text-green"><i class="icon fa fa-check-circle"></i> &nbsp;<strong>{{session('thongbao')}}</strong></p>
                @endif     
            </div>
            <div class="col-md-2 col-sm-2 col-xs-12 text-right"><a href="admin/danhmuc/add"><button type="button" class="btn btn-block btn-primary btn-sm">Thêm Danh Mục</button></a></div>
        </div>
        <br>
       <div class="row">
    
        <div class="col-md-12 col-sm-12 col-xs-12">
          <table class="table table-hover" >
              <thead>
                  <tr style="background-color:#fdf3e6">
                      <th style="width: 10px"><i class="fa fa-star text-yellow"></th>
                      <th>Tên Danh Mục</th>
                      <th>Image</th>
                      <th>Url</th>
                      <th>Order</th>
                      <th style="width: 70px;text-align: center">Status</th>
                      <th style="width: 70px;text-align: center">Edit</th>
                      <th style="width: 50px;text-align: center">Delete</th>
                    </tr>
              </thead>
              <tbody>              

                @foreach ($category_parent as $cate_all)
                <tr>
                  <td><i class="fa fa-circle text-blue"></i></td>
                  <td><a  class="set-modal" >{{$cate_all->name}}</a></td>                 
                  <td><div class="product-img">
                      <img src="public/image/{{$cate_all->img}}" height="30px" alt="{{$cate_all->blimg}}">
                    </div></td>
                  <td>{{$cate_all->slug}}</td>
                  <td>{{$cate_all->order}}</td>
                  <td style="text-align: center;">                    
                  @if($cate_all->status == 1)
                    <span class="label label-success">Active</span>
                  @else
                    <span class="label label-danger">Deactive</span>
                  @endif
                  </td>
                  <td style="text-align: center;font-size:20px"><a href={{url('admin/danhmuc/edit/'.$cate_all->id)}} ><i class="fa fa-edit"></i></a></td>
                  <td style="text-align: center;font-size:20px">
                  @if($cate_all->is_delete)
                    <a href={{url('admin/danhmuc/delete/'.$cate_all->id)}} ><i class="fa fa-trash"></i></a>
                  @else
                  --
                  @endif
                  </td>
                </tr>
                  {{ShowCategory($category_all,$cate_all->id)}}
                @endforeach  
          
              </tbody>
            </table>
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