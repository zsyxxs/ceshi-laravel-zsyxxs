> shineyork-sjunit-laravel 

方便与laravel框架中对于某一个类的方法调试；类似于单元测试 
> 框架要求 

Laravel >= 5.1 

> 安装 

composer require "shineyork/sjunit-laravel" 

> 配置 
> Laravel 应用 

在 `config/app.php` 注册 ServiceProvider 和 Facade (Laravel 5.5无需手动注册) 
'providers' => [ ShineYork\SJunitLaravel\SJunitServiceProvide::class, ]

然后在浏览器中直接访问路由 
Route::get('/', 'SJunitController@index'); 
Route::post('/', 'SJunitController@store')->name('junit.store');