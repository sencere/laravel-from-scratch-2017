<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Billing\Stripe;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Stripe::class, function(){
            return new Stripe(config('services.stripe.secret'));
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->composer('layouts.sidebar', function($view) {
            $view->with('archives', \App\Models\Post::archives());
            $view->with('tags', \App\Models\Tag::has('posts')->pluck('name'));
        });
    }
}
