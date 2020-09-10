@extends('backend.master.master')
@section('title','Trang chủ')
@section('content')

<section class="content">
<div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
            <h3>{{count($category)}}</h3>

              <p>Danh Mục</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
                <h3>{{count($tintuc)}}</h3>
              <p>Blog</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{count($tags)}}</h3>

              <p>Tags</p>
            </div>
            <div class="icon">
              <i class="fa fa-tags"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
                <h3>{{count($dktheodoi)}}</h3>

              <p>Đăng Ký Theo Dõi</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
  </div>
   
  @if (session('thongbao'))          
    <p class="text-green"><i class="icon fa fa-check-circle"></i> &nbsp;<strong>{{session('thongbao')}}</strong></p>
  @endif

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Video Home</h3>             
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-hover">
                <thead class="bg-thead">
                  <tr>
                    <th>Image</th>
                    <th>Link</th>
                    <th>Edit</th>       
                  </tr>
                </thead>
                <tbody>
                <tr>
                  <td><img src="public/image/{{$videohome->video_pic}}" alt="{{$videohome->video_pic}}"  width="400px" height="310px"></td>
                  <td>{{$videohome->video_url}}</td>
                  <td><a href="admin/dashboard/editvideohome/{{$videohome->id_video}}" ><i class="fa fa-edit font-icon-ph"></i></a></td>              
                </tr>                
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Nội Dung Trang Giới Thiệu</h3>
            
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-hover">
                <thead class="bg-thead">
                    <tr>
                        <th>No</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Nội Dung</th>      
                        <th>Edit</th> 
                    </tr>
                </thead>                
                <tbody>
                @foreach ($contentgt as $show_contentgt)
                <tr>           
                  <td>{{$show_contentgt->id_gt}}</td>                      
                  <td><img src="public/image/{{$show_contentgt->gt_pic_a}}" alt="{{$show_contentgt->gt_pic_a}}"  width="340px" height="260px"></td>
                  <td>{{$show_contentgt->gt_title_a}}</td>
                  <td>{!!($show_contentgt->gt_content_a)!!}</td>
                  <td><a href="admin/dashboard/editgt/{{$show_contentgt->id_gt}}"><i class="fa fa-edit font-icon-ph"></i></a></td>              
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