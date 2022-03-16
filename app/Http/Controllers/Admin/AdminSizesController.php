<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Models\Image;
use App\Models\Size;

class AdminSizesController extends Controller
{

    public $default_dir = "app" . DIRECTORY_SEPARATOR;

    public $_store_dir = "assets" . DIRECTORY_SEPARATOR . "img" . DIRECTORY_SEPARATOR . "size";

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
        $column = 'name';
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

        $url = 'admin.sizes';
        $table_name = 'sizes';
        $columns_table = $this->getTable();

        return view('admin.sizes.index', compact('columns_table', 'table_name', 'url', 'search', 'column', 'is_asc', 'current_page'));
    }

    public function create(Request $request)
    {
        $fields = $this->getFields();
        return view('admin.sizes.create', compact('fields'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:sizes',
            'slug' => 'unique:sizes',
        ]);
        $page_slug = $request->input('slug', '');
        
        if(!$page_slug)
            $page_slug = $request->name;
        
        $size = new Size();
        $size->name = $request->name;
        $size->is_active = intval($request->input('is_active', 0)) == 1;
        $size->slug = Str::slug($page_slug, '-');
        $r = $size->save();

        if ($request->images) {
            $_src = $request->file('images')->store($this->_store_dir);

            $_I = new Image();
            $_I->name = $size->name;
            $_I->alt = $size->name;
            $_I->src = $_src;
            $_I->imageable_type = get_class($size);
            $_I->imageable_id = $size->id;
            $_I->save();
        }

        if ($r)
            session()->flash('message', 'Size created with successfully!');
        else
            session()->flash('error', 'It was not possible to save the Size, operation canceled!');

        return redirect(route('admin.sizes'));
    }

    public function edit(Size $size)
    {
        $fields = $this->getFields();
        return view('admin.sizes.edit', compact('fields', 'size'));
    }

    public function update(Request $request, Size $size)
    {
        $request->validate([
            'name' => 'required|unique:sizes,name,' . $size->id,
            'slug' => 'unique:sizes,slug,' . $size->id
        ]);
        
        $page_slug = $request->input('slug', '');
        
        if(!$page_slug)
            $page_slug = $request->name;
       
        $size->name = $request->name;
        $size->is_active = intval($request->input('is_active', 0)) == 1;
        $size->slug = Str::slug($page_slug, '-');

        $r = $size->save();

        if (intval($request->input('images_remove', 0)) == 1) {
            foreach ($size->images as $image) {
                if (File::exists(storage_path($this->default_dir . $image->src))) {
                    Storage::delete($image->src);
                }
                $image->delete();
            }
        }

        if ($request->images) {
            
            foreach ($size->images as $image) {
                if (File::exists(storage_path($this->default_dir . $image->src))) {
                    Storage::delete($image->src);
                }
                $image->delete();
            }
            
            $_src = $request->file('images')->store($this->_store_dir);

            $_I = new Image();
            $_I->name = $size->name;
            $_I->alt = $size->name;
            $_I->src = $_src;
            $_I->imageable_type = get_class($size);
            $_I->imageable_id = $size->id;
            $_I->save();
        }

        if ($r)
            session()->flash('message', 'Size updated with successfully!');
        else
            session()->flash('error', 'It was not possible to save the Size, operation canceled!');

        return redirect(route('admin.sizes'));
    }

    public function destroy(Size $size)
    {
        if ($size->images()->exists()) {
            
            foreach ($size->images as $image) {
                if (File::exists(storage_path($this->default_dir . $image->src))) {
                    Storage::delete($image->src);
                }
                
                $image->delete();
            }
        }
        
        $r = $size->delete();
        
        if ($r)
            session()->flash('message', 'Size deleted with successfully!');
        else
            session()->flash('error', 'It was not possible to remove the Size, operation canceled!');

        return redirect(route('admin.sizes'));
           
    }
}
