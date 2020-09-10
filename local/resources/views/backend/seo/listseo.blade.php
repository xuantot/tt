@extends('backend.master.master')
@section('title','SEO')
@section('content')

<section class="content-header">
  <h1>SEO<small></small></h1>   

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
       <br>
          <table class="table table-hover">
            <thead>
                <tr class="bg-thead">
                    <th>No</th>
                    <th>Picture</th>
                    <th>Page</th>
                    <th>Meta Title</th>    
                  
                    <th>Meta Description</th> 
                    <th>Meta keywords</th> 
                    <th>Action</th>
                  </tr>
            </thead>
            <tbody>
            
              @php
                $no = 0;
              @endphp
            @foreach ($seo as $row)
            <tr>
              <td>{{++$no}}</td>
              <td><div class="product-img">
                <img src="public/image/{{$row->seo_pic}}" height="100px" alt="Khoa Hoc">
              </div></td>
              <td>{{$row->seo_page}}</td>
              <td>{{$row->seo_title}}</td>
             
              <td>{{$row->seo_des}}</td> 
              <td>{{$row->seo_keywords}}</td> 
              <td>
                <a href={{url('admin/seo/editseo/'.$row->id_seo)}} ><i class="fa fa-edit font-icon-ph"></i></a>&nbsp;&nbsp;
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