<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::get('tintuc\{blog_slug}','frontend\TintucController@ShowData');
// Route::get('gioithieu','frontend\GioithieuController@ShowData');
// Route::get('tintuc','frontend\TintucController@ShowData');
// Route::get('khoahoc', function () {
//     return view('frontend.landing');
// });
// Route::get('lienhe', function () {
//     return view('frontend.contact');
// });
// Route::get('chitiet', function () {
//     return view('frontend.detailnews');
// });
// Route::get('khoahocmoi', function () {
//     return view('frontend.comming');
// });

Route::group(['prefix' => 'login','middleware'=>'CheckLogin'], function () {   
    Route::get('/','backend\LoginController@GetView_Login');
    Route::post('/','backend\LoginController@Post_Login');
});

Route::get('logout','backend\LoginController@Log_out');

Route::group(['prefix' => 'admin','middleware'=>'CheckLogout'], function () {   

    Route::group(['prefix' => 'dashboard'], function () {   
            Route::get('view','backend\AdminController@GetIndex');
            Route::get('editvideohome/{id}','backend\AdminController@GetEdit_Videohome');
            Route::post('editvideohome/{id}','backend\AdminController@PostEdit_Videohome');
            Route::get('editgt/{id}','backend\AdminController@GetEdit_Gioithieu');
            Route::post('editgt/{id}','backend\AdminController@PostEdit_Gioithieu');                     
        });
        Route::group(['prefix' => 'danhmuc'], function () {   
            Route::get('list','backend\CategoryController@GetView_Category');
            Route::get('add','backend\CategoryController@GetAdd_Category');
            Route::post('add','backend\CategoryController@PostAdd_Category');
            Route::get('edit/{id}','backend\CategoryController@GetEdit_Category');
            Route::post('edit/{id}','backend\CategoryController@PostEdit_Category');
            Route::get('delete/{id}', 'backend\CategoryController@Delete_Category');             
        });

        Route::group(['prefix' => 'tags'], function () {   
            Route::get('list','backend\TagsController@GetView_Tags');
            Route::get('add','backend\TagsController@GetAdd_Tags');
            Route::post('add','backend\TagsController@PostAdd_Tags');
            Route::get('edit/{id}','backend\TagsController@GetEdit_Tags');
            Route::post('edit/{id}','backend\TagsController@PostEdit_Tags');
            Route::get('delete/{id}', 'backend\TagsController@Delete_Tags');             
        });
      
        Route::group(['prefix' => 'slideanh'], function () {   
            Route::get('list','backend\SlideanhController@GetView_Slideanh');
            Route::get('add','backend\SlideanhController@GetAdd_Slideanh');
            Route::post('add','backend\SlideanhController@PostAdd_Slideanh');
            Route::get('edit/{id}','backend\SlideanhController@GetEdit_Slideanh');
            Route::post('edit/{id}','backend\SlideanhController@PostEdit_Slideanh');
            Route::get('delete/{id}', 'backend\SlideanhController@Delete_Slideanh');
        });

        Route::group(['prefix' => 'lienhe'], function () {   
            Route::get('list','backend\LienheController@GetView_Lienhe');          
            Route::get('edit/{id}','backend\LienheController@GetEdit_Lienhe');
            Route::post('edit/{id}','backend\LienheController@PostEdit_Lienhe');
            Route::get('delete/{id}', 'backend\LienheController@Delete_Lienhe');
        });
        //---------- 1 ----------------------------------------------------
      
        Route::group(['prefix' => 'dktheodoi'], function () {               
            Route::get('list','backend\DktheodoiController@GetView_Dktheodoi');
            Route::get('add','backend\DktheodoiController@GetAdd_Dktheodoi');
            Route::post('add','backend\DktheodoiController@PostAdd_Dktheodoi');
            Route::get('edit/{id}','backend\DktheodoiController@GetEdit_Dktheodoi');
            Route::post('edit/{id}','backend\DktheodoiController@PostEdit_Dktheodoi');
            Route::get('delete/{id}', 'backend\DktheodoiController@Delete_Dktheodoi');
        });
        Route::group(['prefix' => 'doitac'], function () {   
            Route::get('list','backend\DoitacController@GetView_Doitac');
            Route::get('add','backend\DoitacController@GetAdd_Doitac');
            Route::post('add','backend\DoitacController@PostAdd_Doitac');
            Route::get('edit/{id}','backend\DoitacController@GetEdit_Doitac');
            Route::post('edit/{id}','backend\DoitacController@PostEdit_Doitac');
            Route::get('delete/{id}','backend\DoitacController@Delete_Doitac');
        });
        Route::group(['prefix' => 'tintuc'], function () {   
            Route::get('list','backend\TintucController@GetView_Tintuc');
            Route::get('add','backend\TintucController@GetAdd_Tintuc');
            Route::post('add','backend\TintucController@PostAdd_Tintuc');
            Route::get('addtags/{id}','backend\TintucController@GetAddTags_Tintuc');
            Route::post('addtags/{id}','backend\TintucController@PostAddTags_Tintuc');
            Route::get('deletetag/{id_news}/{id_tags}','backend\TintucController@DeleteTags_Tintuc');
            Route::get('edit/{id}','backend\TintucController@GetEdit_Tintuc');
            Route::post('edit/{id}','backend\TintucController@PostEdit_Tintuc');
            Route::get('delete/{id}','backend\TintucController@Delete_Tintuc');
        });
        Route::group(['prefix' => 'thanhvien'], function () {               
            Route::get('list','backend\ThanhvienController@GetView_Thanhvien');    
            Route::get('add','backend\ThanhvienController@GetAdd_Thanhvien');     
            Route::get('edit/{id}','backend\ThanhvienController@GetEdit_Thanhvien');
            Route::post('edit/{id}','backend\ThanhvienController@PostEdit_Thanhvien');         
        });

        Route::group(['prefix' => 'seo'], function () {               
            Route::get('view','backend\SeoController@GetView_Seo');
            Route::get('editseo/{id}','backend\SeoController@GetEdit_Seo');
            Route::post('editseo/{id}','backend\SeoController@PostEdit_Seo');    
        });


        Route::group(['prefix' => 'diachi'], function () {               
            Route::get('view','backend\DiachiController@GetView_Diachi'); 
            Route::post('view','backend\DiachiController@PostEdit_Diachi');     
        });




        Route::group(['prefix' => 'setting'], function () {   
            Route::group(['prefix' => 'seo'], function () {             
                Route::get('view','backend\SeoController@GetView_Seo');
                Route::get('editseo/{id}','backend\SeoController@GetEdit_Seo');
                Route::post('editseo/{id}','backend\SeoController@PostEdit_Seo');
            });    
            Route::group(['prefix' => 'diachi'], function () {             
                Route::get('view','backend\DiachiController@GetView_Diachi');              
                Route::post('view','backend\DiachiController@PostEdit_Diachi');
            });   

        });
});

Route::get('','frontend\HomeController@ShowHome');
Route::get('local','frontend\HomeController@ShowHome');
Route::get('{cate_slug}','frontend\HomeController@ShowData');
Route::get('{cate_slug}/{blog_slug}','frontend\HomeController@ShowBlog');

Route::post('subscribe','frontend\DktheodoiController@AddDkth');
Route::post('lienhe-news','frontend\LienheController@AddLienhe');
Route::post('resgisterkh','frontend\KhoahocController@AddMember');
