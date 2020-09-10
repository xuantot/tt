<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">  
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">     

        <li @if (check_current_page('dashboard')) class="active" @endif>
            <a href="admin/dashboard/view"><i class="fa fa-home"></i><span>Home</span></a>         
        </li>

        <li @if (check_current_page('danhmuc')) class="active" @endif>
          <a href="admin/danhmuc/list"><i class="fa fa-list-alt"></i><span>Danh Mục</span></a>         
        </li>
     
        <li @if (check_current_page('tintuc')) class="active" @endif>
            <a href="admin/tintuc/list"><i class="fa fa-newspaper-o"></i><span>Tin Tức</span></a>         
          </li>

        <li @if (check_current_page('tags')) class="active" @endif>
          <a href="admin/tags/list"><i class="fa fa-tags"></i><span>Quản Lý Tags</span></a>         
        </li>

        <li @if (check_current_page('slideanh')) class="active" @endif>
          <a href="admin/slideanh/list"><i class="fa fa-file-image-o"></i><span>Slide Ảnh</span></a>         
        </li>

        <li @if (check_current_page('lienhe')) class="active" @endif>
            <a href="admin/lienhe/list"><i class="fa fa-headphones"></i><span>Liên Hệ</span></a>         
        </li>

        <li @if (check_current_page('dktheodoi')) class="active" @endif>
          <a href="admin/dktheodoi/list"><i class="fa fa-paper-plane-o"></i><span>Đăng Ký Theo Dõi</span></a>         
        </li>

        <li @if (check_current_page('doitac')) class="active" @endif>
          <a href="admin/doitac/list"><i class="fa fa-smile-o"></i><span>Đối Tác</span></a>         
        </li>

        <li @if (check_current_page('thanhvien')) class="active" @endif>
            <a href="admin/thanhvien/list"><i class="fa fa-user"></i><span>Thành Viên</span></a>         
        </li>

        <li @if (check_current_page('seo')) class="active" @endif>
          <a href="admin/seo/view"><i class="fa fa-cog"></i><span>SEO</span></a>         
        </li>

        <li @if (check_current_page('diachi')) class="active" @endif>
        <a href="admin/diachi/view"><i class="fa fa-map"></i><span>Địa Chỉ</span></a>         
        </li>



     <!--  
        <li @if (check_current_page('setting')) class="treeview active menu-open" @else class="treeview"  @endif>
            <a href="#">
              <i class="fa fa-cog"></i>
              <span>Cài Đặt</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li  @if (check_current_sub_page('seo')) class="active"  @endif><a href="admin/setting/seo/view"><i class="fa fa-circle-o text-red"></i>SEO</a></li>       
              <li  @if (check_current_sub_page('diachi')) class="active"  @endif><a href="admin/setting/diachi/view"><i class="fa fa-circle-o text-red"></i>Thông tin Liên Hệ</a></li>
            </ul>
        </li>  
          -->
           
    </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
