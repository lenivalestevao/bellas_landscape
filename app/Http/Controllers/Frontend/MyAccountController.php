<?php


namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyAccountController extends Controller
{
    public function __invoke()
    {
        return view('frontend.user.profile');
    }
    
    public function orders(Request $request){
        
    }
    
    public function favorite(Request $request){
        
    }
}
