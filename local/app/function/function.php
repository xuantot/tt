<?php
// Request::fullUrl() // Returns: http://laravel.dev/test?test=1 
//---------------------------------------------------------------------------------
function current_page($uri = "/")
{
return request()->path() == $uri;
}
//---------------------------------------------------------------------------------
function get_current_page()  // Request::path() // Returns: test 
{
return request()->path() ;
}
//---------------------------------------------------------------------------------
function get_url() // Request::url() // Returns: http://laravel.dev/test 
{
return request()->url() ; 
}
//---------------------------------------------------------------------------------
function get_root() // Request::root() // Returns: http://laravel.dev 
{
return request()->root() ;
}
//---------------------------------------------------------------------------------
function check_current_page($str) // dùng cho slide bar
{
   $check = 1;
   $get_url = request()->path() ;
   $string_menu = explode('/', $get_url);

   if (isset($string_menu[1])){
    $check = ($string_menu[1]==$str)?1:0;   
    return $check ;
   }
    else return 0;


}
//---------------------------------------------------------------------------------
function check_current_sub_page($str) // dùng cho slide bar
{
   $check = 1;
   $get_url = request()->path() ;
   $string_menu = explode('/', $get_url);
   if (isset($string_menu[2])){
   $check = ($string_menu[2]==$str)?1:0;
   return $check ;}
   else {
   return 0;
   }


}
//---------------------------------------------------------------------------------
function tag_blog($str)   // dùng cho các keywords của blog
{
  $all_string = '<a href="#">IIA</a>';
if (isset($str)){
    $a_tag = explode(',', $str);
    foreach($a_tag as $value)
    {
        $all_string .= '<a href="#">'.$value.'</a>';
    }
} 
    return $all_string ;
}
//---------------------------------------------------------------------------------
function convert_time($timestamp)   // dùng cho các keywords của blog
{
    $date_info = explode(' ', $timestamp);
    return $date_info[0] ;
}
//---------------------------------------------------------------------------------
function check_gv($id,$mang)
{
    if (isset($mang)&&isset($id))
    {
        foreach($mang as $key=>$value)
        {
            foreach ($value as $key_sub=>$row)
            {
                if ($id == $row) {return 1;}
            }
        }
        return 0;
    }   
}

function ShowCategory($mang,$parent)
{
    foreach($mang as $row)
    {
        if($row->parent_id==$parent && $row->level == 2)
        {
         echo  "<tr>"  ;
         echo  "<td></td>";
         echo  "<td><i class='fa fa-circle text-blue' style='font-size:10px;margin-right:10px'></i> $row->name</td>";
         echo  "<td><div class='product-img'><img src='public/image/$row->img' height='30px' alt='$row->blimg'></div></td>";
         echo  "<td>$row->slug</td>";
         echo  "<td>$row->order</td>";
         echo  "<td style='text-align: center;'>";
         if ($row->status == 1)
         echo "<span class='label label-success'>Active</span>";
         else 
         echo "<span class='label label-danger'>Deactive</span>";
         echo  "</td>";
         echo  "<td style='text-align: center;font-size:20px'><a href='admin/danhmuc/edit/$row->id'><i class='fa fa-edit'></i></a></td>";
if ($row->is_delete)
         echo  "<td style='text-align: center;font-size:20px'><a href='admin/danhmuc/delete/$row->id'><i class='fa fa-trash'></i></a></td>";
else 
         echo  "<td style='text-align: center;font-size:20px'>--</td>";
         echo  "</tr>";
        }
    }

}
function Show_News_Category_d($mang)
{
    foreach($mang as $row)
    {
        if ($row->level == 1)
        {

         echo "<option value='$row->id'>$row->name</option>";   
         
         foreach($mang as $sub)
         {
            if ($sub->parent_id == $row->id){
                echo "<option value='$sub->id'>-- $sub->name</option>";   
            }
         } 
        }
    }
}
function Edit_News_Category_d($mang,$id)
{
    foreach($mang as $row)
    {
        if ($row->level == 1)
        {
            if ($row->id == $id)
            echo "<option selected value='$row->id'>$row->name</option>";   
            else echo "<option value='$row->id'>$row->name</option>";   
         foreach($mang as $sub)
         {
            if ($sub->parent_id == $row->id){
                if ($sub->id == $id)
                echo "<option selected value='$sub->id'>-- $sub->name</option>";     
                else    echo "<option value='$sub->id'>-- $sub->name</option>";    
            }
         } 
        }
    }
}

function Show_News_Category($mang)
{
    foreach($mang as $row)
    {
        if ($row->level == 1)
        {

         echo "<optgroup label='$row->name'></optgroup>";   
         
         foreach($mang as $sub)
         {
            if ($sub->parent_id == $row->id){
                echo "<option value='$sub->id'>-- $sub->name</option>";   
            }
         } 
        }
    }
}
function Edit_News_Category($mang,$id)
{
    foreach($mang as $row)
    {
        if ($row->level == 1)
        {
            echo "<optgroup label='$row->name'></optgroup>";   
         foreach($mang as $sub)
         {
            if ($sub->parent_id == $row->id){
                if ($sub->id == $id)
                echo "<option selected value='$sub->id'>-- $sub->name</option>";     
                else    echo "<option value='$sub->id'>-- $sub->name</option>";    
            }
         } 
        }
    }
}
function category_menu($mang)
{
    foreach($mang as $row)
    {
        if ($row->level == 1)
        {
           if (check_current_page($row->slug)) { echo "<li class='nav-item dropdown active'>";}            
            else {echo "<li class='nav-item dropdown'>";}
        //     echo "<li class='nav-item dropdown'>";
            echo "<a href='$row->slug' class='nav-link' data-toggle='dropdown'>$row->name <i class='fa fa-angle-down'></i></a>";
            echo "<ul class='dropdown-menu' role='menu'>";
            foreach($mang as $sub)
            {
                if ($sub->parent_id == $row->id){
            //       if (check_current_sub_page($row->slug)) {echo  "<li class='active'><a href='$sub->slug'>$sub->name</a></li>" ;}
            //       else {echo  "<li class=''><a href='$sub->slug'>$sub->name</a></li>" ;}
              echo  "<li class=''><a href='$sub->slug'>$sub->name</a></li>" ;
                }
            } 
            echo "</ul>";
            echo "</li>";
       
        }

    }
}
