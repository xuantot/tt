<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

use App\models\category;
use App\models\diachi;
use App\models\contentgt;
use App\models\tintuc;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
  

    public function boot()
    {
        Schema::defaultStringLength(191);

        $all_var['category_menu'] = category::Where('status','1')->orderBy('order', 'asc')->get();
        $all_var['diachi']  = diachi::all()->first();
        $all_var['co_1']    = contentgt::where('id_gt',1)->get()->first();
        $all_var['co_2']    = contentgt::where('id_gt',2)->get()->first();        
        $all_var['tinhot']  = tintuc::Where('blog_active','1')->Where('blog_hot','1')->orderBy('created_at', 'desc')->take(4)->get();
        $all_var['tinmoi']  = tintuc::Where('blog_active','1')->orderBy('created_at', 'desc')->take(4)->get();
    //   view::share('current_user', khoahoc::all());

         //   dd($all_var);
            view::share('current_user',$all_var);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('path.public', function(){ return base_auth('public');});
    }
}
