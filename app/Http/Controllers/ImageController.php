<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as ImageIntervention;

use Intervention\Image\ImageManagerStatic;


class ImageController extends Controller
{
    private $default_dir = "app".DIRECTORY_SEPARATOR."assets".DIRECTORY_SEPARATOR."img".DIRECTORY_SEPARATOR;
    
    public function __invoke(Request $request)
    {
        
        if ($request->has('type') && $request->type == 'logo') {
            $img = ImageIntervention::cache(function ($image) use ($request) {
                $image->make(storage_path("{$this->default_dir}gmo3.png"))->fit($request->size);
            }, 1440, true);
            $img->invert();
            $img->encode('png', 100);
            return $img->response();
            
        }
        
        
        $_image = Image::find($request->image);
        if(!$_image)
            return null;
        
        $ext = explode(".", $_image->src)[1];
        $img = ImageIntervention::cache(function ($image) use ($request, $_image) {
            $image->make(storage_path('app'.DIRECTORY_SEPARATOR.$_image->src))->fit($request->size);
        }, 1440, true);

        $img->encode($ext, 100);
        return $img->response();
    }
}
