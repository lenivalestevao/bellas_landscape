<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Models\Image;
use App\Models\Service;

class AdminServicesController extends Controller
{

    public $default_dir = "app" . DIRECTORY_SEPARATOR;

    public $_store_dir = "assets" . DIRECTORY_SEPARATOR . "img" . DIRECTORY_SEPARATOR . "service";

    protected function getTable()
    {
        
        $columns_table = collect();
        
        $coll = collect();
        $coll->name = 'name';
        $coll->title = 'Name';
        $coll->image = 'images';
        
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

    protected function getFields()
    {
        $fields = collect();

        $field = collect();
        $field->name = 'id';
        $field->title = 'id';
        $field->is_id = true;
        $fields->push($field);

        $field = collect();
        $field->name = 'images';
        $field->title = 'Image';
        $field->is_image = true;
        $fields->push($field);

        $field = collect();
        $field->name = 'name';
        $field->title = 'Name';
        $field->is_required = true;
        $fields->push($field);

        $field = collect();
        $field->name = 'slug';
        $field->title = 'Slug';
//         $field->is_required = true;
        $fields->push($field);
        
        $field = collect();
        $field->name = 'description';
        $field->title = 'Description';
        $field->is_text = true;
        $fields->push($field);
        
        $field = collect();
        $field->name = 'html';
        $field->title = 'Content';
        $field->is_html = true;
        $fields->push($field);

        $field = collect();
        $field->name = 'is_active';
        $field->title = 'Active';
        $field->is_bool = true;
        $field->is_required = true;
        $fields->push($field);

        return $fields;
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

        $url = 'admin.services';
        $table_name = 'services';
        $columns_table = $this->getTable();

        return view('admin.services.index', compact('columns_table', 'table_name', 'url', 'search', 'column', 'is_asc', 'current_page'));
    }

    public function create(Request $request)
    {
        $fields = $this->getFields();
        return view('admin.services.create', compact('fields'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:services',
            'slug' => 'unique:services'
        ]);
        $page_slug = $request->input('slug', '');
        
        if(!$page_slug)
            $page_slug = $request->name;
        
        $service = new Service();
        $service->name = $request->name;
        $service->description = $request->description;
        $service->html = $request->html;
        $service->is_active = intval($request->input('is_active', 0)) == 1;
        $service->slug = Str::slug($page_slug, '-');
        $r = $service->save();

        if ($request->images) {
            $_src = $request->file('images')->store($this->_store_dir);

            $_I = new Image();
            $_I->name = $service->name;
            $_I->alt = $service->name;
            $_I->src = $_src;
            $_I->imageable_type = get_class($service);
            $_I->imageable_id = $service->id;
            $_I->save();
        }

        if ($r)
            session()->flash('message', 'Service created with successfully!');
        else
            session()->flash('error', 'It was not possible to save the Service, operation canceled!');

        return redirect(route('admin.services'));
    }

    public function edit(Service $service)
    {
        $fields = $this->getFields();
        return view('admin.services.edit', compact('fields', 'service'));
    }

    public function update(Request $request, Service $service)
    {
        $request->validate([
            'name' => 'required|unique:services,name,' . $service->id,
            'slug' => 'unique:services,slug,' . $service->id
        ]);
        
        $page_slug = $request->input('slug', '');
        
        if(!$page_slug)
            $page_slug = $request->name;
       
        $service->name = $request->name;
        $service->is_active = intval($request->input('is_active', 0)) == 1;
        $service->slug = Str::slug($page_slug, '-');

        $r = $service->save();

        if (intval($request->input('images_remove', 0)) == 1) {
            foreach ($service->images as $image) {
                if (File::exists(storage_path($this->default_dir . $image->src))) {
                    Storage::delete($image->src);
                }
                $image->delete();
            }
        }

        if ($request->images) {
            
            foreach ($service->images as $image) {
                if (File::exists(storage_path($this->default_dir . $image->src))) {
                    Storage::delete($image->src);
                }
                $image->delete();
            }
            
            $_src = $request->file('images')->store($this->_store_dir);

            $_I = new Image();
            $_I->name = $service->name;
            $_I->alt = $service->name;
            $_I->src = $_src;
            $_I->imageable_type = get_class($service);
            $_I->imageable_id = $service->id;
            $_I->save();
        }

        if ($r)
            session()->flash('message', 'Service updated with successfully!');
        else
            session()->flash('error', 'It was not possible to save the Service, operation canceled!');

        return redirect(route('admin.services'));
    }

    public function destroy(Service $service)
    {
        if ($service->images()->exists()) {
            
            foreach ($service->images as $image) {
                if (File::exists(storage_path($this->default_dir . $image->src))) {
                    Storage::delete($image->src);
                }
                
                $image->delete();
            }
        }
        
        $r = $service->delete();
        
        if ($r)
            session()->flash('message', 'Service deleted with successfully!');
        else
            session()->flash('error', 'It was not possible to remove the Service, operation canceled!');

        return redirect(route('admin.services'));
    }
}
