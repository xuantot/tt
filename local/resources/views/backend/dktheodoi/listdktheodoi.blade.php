@extends('backend.master.master')
@section('title','Đăng Ký Theo Dõi')
@section('content')

<section class="content-header">
  <h1>ĐĂNG KÝ THEO DÕI<small></small></h1>    
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
          @if (session('thongbao'))            
                <p class="text-green"><i class="icon fa fa-check-circle"></i> &nbsp;<strong>{{session('thongbao')}}</strong></p>
            @endif
        <div class="row">
            <div class="col-md-10 col-sm-10 col-xs-12"></div>
            <div class="col-md-2 col-sm-2 col-xs-12 text-right"><a href="admin/dktheodoi/add"><button type="button" class="btn btn-block btn-primary btn-xs">Thêm Đăng Ký</button></a></div>
        </div>
       <br>
        <table class="table table-hover" id="datatbl">
            <thead>
                <tr class="bg-thead">
                    <th>No</th>       
                    <th>Email</th>                           
                    <th>Ngày đăng ký</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>            
              @php
                $no = 0;
              @endphp
            @foreach ($dktheodoi as $row)
            <tr>
              <td>{{++$no}}</td>             
              <td>{{$row->dkth_email}}</td>       
              <td>{{$row->updated_at}}</td>
              <td>
                <a href={{url('admin/dktheodoi/edit/'.$row->id_dktd)}} ><i class="fa fa-edit font-icon-ph"></i></a>&nbsp;&nbsp;
                <a href={{url('admin/dktheodoi/delete/'.$row->id_dktd)}} ><i class="fa fa-trash font-icon-ph"></i></a>
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