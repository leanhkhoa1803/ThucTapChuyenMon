<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\CategoryModel;
use App\Models\ProductModel;
use DB;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $data['category'] = CategoryModel::all();
        $data['product_ram'] = DB::table('products')->select('prod_ram')->distinct()->orderBy('prod_ram','asc')->get();
        $data['product_rom'] = DB::table('products')->select('prod_rom')->distinct()->orderBy('prod_rom','asc')->get();
        view()->share($data);
    }
}
