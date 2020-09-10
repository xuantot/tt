@extends('backend.master.master')
@section('title','Khóa Học')
@section('content')

<section class="content-header">
  <h1>KHÓA HỌC<small></small></h1>    
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
            @if (session('thongbao'))            
                <p class="text-green"><i class="icon fa fa-check-circle"></i> &nbsp;<strong>{{session('thongbao')}}</strong></p>
            @endif        
          <table class="table table-hover" id="datatbl">
            <thead>
                <tr class="bg-thead">
                    <th>No</th>                   
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Title</th>
                    <th>Message</th>
                    <th>Created</th>
                    <th>Action</th>
                  </tr>
            </thead>
            <tbody>
            
              @php
                $no = 0;
              @endphp
            @foreach ($lienhe as $row)
            <tr>
              <td>{{++$no}}</td>              
              <td>{{$row->ct_name}}</td>
              <td>{{$row->ct_phone}}</td>
              <td>{{$row->ct_email}}</td>
              <td>{{$row->ct_title}}</td>
              <td>{{$row->ct_content}}</td>
              <td>{{$row->updated_at}}</td>
              <td>
                <a href={{url('admin/lienhe/edit/'.$row->id_contact)}} ><i class="fa fa-edit font-icon-ph"></i></a>&nbsp;&nbsp;
                <a href={{url('admin/lienhe/delete/'.$row->id_contact)}} ><i class="fa fa-trash font-icon-ph"></i></a>
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