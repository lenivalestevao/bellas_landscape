<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Product;
use App\Models\Page;

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
        $products = Product::orderBy('id','DESC')->limit(12)->get();
        return view('frontend.home.index', compact('products')); 
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
        
    public function shop(Request $request){
        $view = $request->input('view','grid');
        $category = $request->input('category', null);
        
        $exists_category = Category::select(DB::raw("COUNT(*) as nCount"))->where('active', true)->where('categories.slug', $category)->get()->first()->nCount;
        
        if($exists_category<=0){
            $category = null;
        }
        
        return view('frontend.product.index', compact('category','view')); 
    }
    
    public function cart(Request $request){
        return view('frontend.cart.index'); 
    }
}
