<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminSettingController extends Controller
{
    public function __invoke(Request $request )
    {
        return view('admin.settings.setting');
    }
}
