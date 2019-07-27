<?php

namespace Zhang\SjunitLaravel\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

/**
 * 这是测试单元的服务提供者
 * 用来加载sjunit组价
 * 传统的加载composer组件的方式   composer require xxx
 * Class SJunitServiceProvider
 * @package Zhang\SjunitLaravel\Providers
 */
class SJunitServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
//        echo '这是sjunit服务提供者';
        //注册组件路由
        $this->registerRoutes();
        //指定的组件的名称，自定义的资源目录地址
        $this->loadViewsFrom(
            __DIR__.'/../../resources/views', 'sjunit' //命名空间,组件名
        );

    }

    //参考别人的
    /**
     * Register the package routes.
     *注册组件的路由
     * @return void
     */
    private function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/../Http/routes.php');
        });
    }
    /**
     * Get the Telescope route group configuration array.
     *
     * @return array
     */
    private function routeConfiguration()
    {
        return [
            //定义访问路由的域名
            //'domain' => config('telescope.domain', null),
            //定义路由的命名空间
            'namespace' => 'Zhang\SjunitLaravel\Http\Controllers',
            //前缀
            'prefix' => 'sjunit',
            //中间件
            'middleware' => 'web',
        ];
    }


}