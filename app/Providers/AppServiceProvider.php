<?php

namespace App\Providers;

use App\Models\Mod_category;
use App\Models\Mod_city;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('pages.includes.header', function ($view) {

            $categories                 = Mod_category::where('status',1)->get();
            $cities                     = Mod_city::where('status',1)->get();
            $view->with([
                'categories'=> $categories,
                'cities'    =>  $cities
            ]);
        });
        VerifyEmail::toMailUsing(function ($notifiable,$url){
            $mail = new MailMessage;
            $mail->subject('Welcome!');
            $mail->markdown('pages.accounts.account_confirmation', ['url' => $url]);
            return $mail;
        });
    }

}
