<?php

namespace App\Providers;

use App\Filament\Auth\MyLogoutResponse;
use App\Models\Category;
use Filament\Http\Responses\Auth\Contracts\LogoutResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(LogoutResponse::class, MyLogoutResponse::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Facades\View::composer('layout', function (View $view) {
            $view->with('categories', Category::has('posts')->get());
        });
    }
}
