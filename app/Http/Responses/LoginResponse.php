<?php

namespace App\Http\Responses;

use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{

    public function toResponse($request)
    {
        if ($request->wantsJson()) {
            return response()->json(['two_factor' => false]);
        }
        
        if(Auth::user()->hasRole('super')) {
            return redirect()->intended(route('admin.dashboard'));
        } elseif(Auth::user()->hasRole('user')) {

            $url_preview = $request->session()->pull('url_preview');
            if($url_preview && $url_preview != ''){
                $request->session()->forget(['url_preview']);
                return redirect()->intended($url_preview);
            }else{
                return redirect()->intended(route('frontend.my-account.profile'));
            }
        }

        return $request->wantsJson()
        ? response()->json(['two_factor' => false])
        : redirect()->intended(config('fortify.home'));
    }

}
