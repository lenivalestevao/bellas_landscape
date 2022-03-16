<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Models\Image;
use App\Models\Page;

class AdminPagesController extends Controller
{

    public $default_dir = "app" . DIRECTORY_SEPARATOR;

    public $_store_dir = "assets" . DIRECTORY_SEPARATOR . "img" . DIRECTORY_SEPARATOR . "page";

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
        
        
        $field = collect();
        $field->name = 'html';
        $field->title = 'Body';
        $field->is_html = true;
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

        $url = 'admin.pages';
        $table_name = 'pages';
        $columns_table = $this->getTable();

        return view('admin.pages.index', compact('columns_table', 'table_name', 'url', 'search', 'column', 'is_asc', 'current_page'));
    }

    public function create(Request $request)
    {
        $fields = $this->getFields();
        return view('admin.pages.create', compact('fields'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:pages',
            'slug' => 'unique:pages',
        ]);
        $page_slug = $request->input('slug', '');
        
        if(!$page_slug)
            $page_slug = $request->name;
        
        $page = new Page();
        $page->name = $request->name;
        $page->html = $request->html;
        $page->is_active = intval($request->input('is_active', 0)) == 1;
        $page->slug = Str::slug($page_slug, '-');
        $r = $page->save();

        if ($request->images) {
            $_src = $request->file('images')->store($this->_store_dir);

            $_I = new Image();
            $_I->name = $page->name;
            $_I->alt = $page->name;
            $_I->src = $_src;
            $_I->imageable_type = get_class($page);
            $_I->imageable_id = $page->id;
            $_I->save();
        }

        if ($r)
            session()->flash('message', 'Page created with successfully!');
        else
            session()->flash('error', 'It was not possible to save the Page, operation canceled!');

        return redirect(route('admin.pages'));
    }

    public function edit(Page $page)
    {
        $fields = $this->getFields();
        return view('admin.pages.edit', compact('fields', 'page'));
    }

    public function update(Request $request, Page $page)
    {
        $request->validate([
            'name' => 'required|unique:pages,name,' . $page->id,
            'slug' => 'unique:pages,slug,' . $page->id
        ]);
        
        $page_slug = $request->input('slug', '');
        
        if(!$page_slug)
            $page_slug = $request->name;
       
        $page->name = $request->name;
        $page->html = $request->html;
        $page->is_active = intval($request->input('is_active', 0)) == 1;
        $page->slug = Str::slug($page_slug, '-');

        $r = $page->save();

        if (intval($request->input('images_remove', 0)) == 1) {
            foreach ($page->images as $image) {
                if (File::exists(storage_path($this->default_dir . $image->src))) {
                    Storage::delete($image->src);
                }
                $image->delete();
            }
        }

        if ($request->images) {
            
            foreach ($page->images as $image) {
                if (File::exists(storage_path($this->default_dir . $image->src))) {
                    Storage::delete($image->src);
                }
                $image->delete();
            }
            
            $_src = $request->file('images')->store($this->_store_dir);

            $_I = new Image();
            $_I->name = $page->name;
            $_I->alt = $page->name;
            $_I->src = $_src;
            $_I->imageable_type = get_class($page);
            $_I->imageable_id = $page->id;
            $_I->save();
        }

        if ($r)
            session()->flash('message', 'Page updated with successfully!');
        else
            session()->flash('error', 'It was not possible to save the Page, operation canceled!');

        return redirect(route('admin.pages'));
    }

    public function destroy(Page $page)
    {
        if ($page->images()->exists()) {
            
            foreach ($page->images as $image) {
                if (File::exists(storage_path($this->default_dir . $image->src))) {
                    Storage::delete($image->src);
                }
                
                $image->delete();
            }
        }
        
        $r = $page->delete();
        
        if ($r)
            session()->flash('message', 'Page deleted with successfully!');
        else
            session()->flash('error', 'It was not possible to remove the Page, operation canceled!');

        return redirect(route('admin.pages'));
           
    }
}
