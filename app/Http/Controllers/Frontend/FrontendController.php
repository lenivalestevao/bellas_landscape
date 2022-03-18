<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Product;
use App\Models\Page;
use App\Models\Service;

class FrontendController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * HOMEPAGE
     */
    public function __invoke(Request $request)
    {        
        $services = Service::all();
        return view('frontend.home.index', compact('services')); 
    }
    
    public function about_us(Request $request){
        $page = Page::where('slug','about-us')->get()->first();
        return view('frontend.about-us.index', compact('page')); 
    }
    
    public function contact_us(Request $request){
        return view('frontend.contact.index'); 
    }
    
    public function portfolio(Request $request){
        return view('frontend.portfolio.index');
    }
    
    public function our_services(Request $request){
        return view('frontend.service.index');
    }
        
    public function show_service($slug){
        $service = Service::where('slug', $slug)->get()->first();
        if(!$service)
            return redirect(route('frontend.home'));
        
        return view('frontend.service.show', compact('service'));
    }
    
}
