<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Product;
use App\Models\Page;
use App\Models\Service;
use App\Models\Team;
use App\Models\Portfolio;

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
        $teams = Team::all();
        
        if($page && $page->is_active)
            return view('frontend.about-us.index', compact('page','teams')); 
        else
            return redirect(route('frontend.home'));
    }
    
    public function privacy_policy(Request $request){
        $page = Page::where('slug','privacy-policy')->get()->first();
        if($page && $page->is_active)
            return view('frontend.privacy-policy.index', compact('page')); 
        else
            return redirect(route('frontend.home'));
    }
    
    public function terms_of_service(Request $request){
        $page = Page::where('slug','terms-of-service')->get()->first();
        if($page && $page->is_active)
            return view('frontend.terms-of-service.index', compact('page')); 
        else 
            return redirect(route('frontend.home'));
    }
        
    public function contact_us(Request $request){
        return view('frontend.contact.index'); 
    }
    
    public function portfolio(Request $request){
        $portfolios = Portfolio::with('service')->get();
        $services = Service::all();
        
//         dd($portfolios);
        return view('frontend.portfolio.index', compact('portfolios', 'services'));
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
