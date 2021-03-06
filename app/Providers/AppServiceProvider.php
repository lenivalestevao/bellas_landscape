<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Page;
use App\Models\Setting;
use Illuminate\Support\Facades\View;
use App\Models\Menu;
use App\Models\Alert;

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
        if(!app()->runningInConsole()){
            
            $setting = Setting::get()->first();
            if($setting){
                View::share('wb_setting', $setting);
            }
            
            $menus = Menu::where('is_active', true)->get();
            if($setting){
                View::share('wb_menu', $menus);
            }
            
            $show_about_us = false;
            $apage = Page::where('slug','about-us')->get()->first();
            if($apage && $apage->is_active)
                $show_about_us = true;
            
            View::share('show_about_us', $show_about_us);
            
            
            $show_privacy_policy = false;
            $tpage = Page::where('slug','privacy-policy')->get()->first();
            if($tpage && $tpage->is_active)
                $show_privacy_policy  = true;
            
            View::share('show_privacy_policy', $show_privacy_policy);
            
            
            $show_terms_of_service = false;
            $ppage = Page::where('slug','terms-of-service')->get()->first();
            if($ppage && $ppage->is_active)
                $show_terms_of_service = true;
            
            View::share('show_terms_of_service', $show_terms_of_service);
            
            $alerts = Alert::where('is_active', true)->get();
            View::share('alerts', $alerts);
        }
    }
}
