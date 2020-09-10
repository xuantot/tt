@extends('backend.master.master')
@section('title','TAGS')
@section('content')

<section class="content-header">
  <h1>TAGS<small></small></h1>    
</section>      
<section class="content">
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Danh Sách</h3>
         
        </div>
        <!-- /.box-header -->
        <div class="box-body">
      
        <div class="row">
            <div class="col-md-10 col-sm-10 col-xs-12">
              @if (session('thongbao'))            
              <p class="text-green"><i class="icon fa fa-check-circle"></i> &nbsp;<strong>{{session('thongbao')}}</strong></p>
              @endif
            </div>
            <div class="col-md-2 col-sm-2 col-xs-12 text-right"><a href="admin/tags/add"><button type="button" class="btn btn-block btn-primary btn-xs">Thêm Tags</button></a></div>
        </div>
       <br>
          <table class="table table-hover" id="datatbl">
            <thead>
                <tr class="bg-thead">
                    <th>No</th>       
                    <th>Tags Name</th>          
                    <th>Link</th>                  
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>            
              @php
                $no = 0;
              @endphp
            @foreach ($tags as $row)
            <tr>
              <td>{{++$no}}</td>           
              <td>{{$row->tag_name}}</td>
              <td>{{$row->tag_slug}}</td>          
              <td>
                <a href={{url('admin/tags/edit/'.$row->id)}} ><i class="fa fa-edit font-icon-ph"></i></a>&nbsp;&nbsp;
                <a href={{url('admin/tags/delete/'.$row->id)}} ><i class="fa fa-trash font-icon-ph"></i></a>
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