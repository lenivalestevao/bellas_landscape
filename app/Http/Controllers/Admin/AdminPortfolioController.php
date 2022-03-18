<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Team;
use App\Models\Image;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Models\Portfolio;



class AdminPortfolioController extends Controller
{
    public $default_dir = "app" . DIRECTORY_SEPARATOR;
    
    public $_store_dir = "assets" . DIRECTORY_SEPARATOR . "img" . DIRECTORY_SEPARATOR . "portfolio";
    
    protected function getTable()
    {
        
        $columns_table = collect();
        
        $coll = collect();
        $coll->name = 'title';
        $coll->title = 'title';
        $coll->image = 'images';
        
        $columns_table->push($coll);
        
        $coll = collect();
        $coll->name = 'service->name';
        $coll->title = 'Service';
        
        $columns_table->push($coll);
                
        $coll = collect();
        $coll->name = 'is_active';
        $coll->title = 'Active';
        $coll->is_bool = true;
        
        $columns_table->push($coll);
        
        $coll = collect();
        $coll->name = 'created_at';
        $coll->title = 'created At';
        $coll->is_date = true;
        
        $columns_table->push($coll);
        
        return $columns_table;
    }
    
       
    public function __invoke(Request $request)
    {
        $search = "";
        $current_page = 1;
        $column = 'title';
        $is_asc = 'ASC';
        
        if ($request->input('column') && strlen($request->column) > 0) {
            $column = trim($request->column);
        }
        
        if ($request->input('order') && strlen($request->order) > 0) {
            $is_asc = trim($request->order);
        }
        
        if ($request->input('page') && intval($request->page) > 0) {
            $current_page = intval($request->page);
        }
        
        if ($request->input('search') && strlen(trim($request->search)) > 0) {
            $search = trim($request->search);
        }
        
        $url = 'admin.portfolio';
        $table_name = 'portfolio';
        $columns_table = $this->getTable();
        
        return view('admin.portfolio.index', compact('columns_table', 'table_name', 'url', 'search', 'column', 'is_asc', 'current_page'));
    }
    
    public function create(Request $request)
    {
//         $fields = $this->getFields();
//         return view('admin.teams.create', compact('fields'));
    }
    
    public function store(Request $request)
    {
//         $request->validate([
//             'name' => 'required|unique:teams'
//         ]);
//         $page_slug = $request->input('slug', '');
        
//         if(!$page_slug)
//             $page_slug = $request->name;
            
//             $team = new Team();
//             $team->name = $request->name;
//             $team->job_title = Str::title($request->input('job_title', 'Helper'));
//             $team->is_active = intval($request->input('is_active', 0)) == 1;
//             $r = $team->save();
            
//             if ($request->images) {
//                 $_src = $request->file('images')->store($this->_store_dir);
                
//                 $_I = new Image();
//                 $_I->name = $team->name;
//                 $_I->alt = $team->name;
//                 $_I->src = $_src;
//                 $_I->imageable_type = get_class($team);
//                 $_I->imageable_id = $team->id;
//                 $_I->save();
//             }
            
//             if ($r)
//                 session()->flash('message', 'Person created with successfully!');
//             else
//                 session()->flash('error', 'It was not possible to save the Person, operation canceled!');
                    
//             return redirect(route('admin.teams'));
    }
    
    public function edit(Team $team)
    {
//         $fields = $this->getFields();
//         return view('admin.teams.edit', compact('fields', 'team'));
    }
    
    public function update(Request $request, Team $team)
    {
//         $request->validate([
//             'name' => 'required|unique:teams,name,' . $team->id
//         ]);
        
            
//         $team->name = Str::title($request->name);
//         $team->job_title = Str::title($request->input('job_title', 'Helper'));
//         $team->is_active = intval($request->input('is_active', 0)) == 1;
       
//         $r = $team->save();
        
//         if (intval($request->input('images_remove', 0)) == 1) {
//             foreach ($team->images as $image) {
//                 if (File::exists(storage_path($this->default_dir . $image->src))) {
//                     Storage::delete($image->src);
//                 }
//                 $image->delete();
//             }
//         }
        
//         if ($request->images) {
            
//             foreach ($team->images as $image) {
//                 if (File::exists(storage_path($this->default_dir . $image->src))) {
//                     Storage::delete($image->src);
//                 }
//                 $image->delete();
//             }
            
//             $_src = $request->file('images')->store($this->_store_dir);
            
//             $_I = new Image();
//             $_I->name = $team->name;
//             $_I->alt = $team->name;
//             $_I->src = $_src;
//             $_I->imageable_type = get_class($team);
//             $_I->imageable_id = $team->id;
//             $_I->save();
//         }
        
//         if ($r)
//             session()->flash('message', 'Person updated with successfully!');
//         else
//             session()->flash('error', 'It was not possible to save the Person, operation canceled!');
                
//         return redirect(route('admin.teams'));
    }
    
    public function destroy(Team $team)
    {
//         if ($team->images()->exists()) {
            
//             foreach ($team->images as $image) {
//                 if (File::exists(storage_path($this->default_dir . $image->src))) {
//                     Storage::delete($image->src);
//                 }
                
//                 $image->delete();
//             }
//         }
        
//         $r = $team->delete();
        
//         if ($r)
//             session()->flash('message', 'Person deleted with successfully!');
//         else
//             session()->flash('error', 'It was not possible to remove the Person, operation canceled!');
                
//         return redirect(route('admin.teams'));
    }
}
