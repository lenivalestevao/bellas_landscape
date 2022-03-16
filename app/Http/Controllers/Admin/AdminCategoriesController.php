<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;
use App\Models\Image;

class AdminCategoriesController extends Controller
{

    public $default_dir = "app" . DIRECTORY_SEPARATOR;

    public $_store_dir = "assets" . DIRECTORY_SEPARATOR . "img" . DIRECTORY_SEPARATOR . "category";

    protected function getTable()
    {
        $columns_table = collect();

        $coll = collect();
        $coll->name = 'title';
        $coll->title = 'Title';
        $coll->image = 'images';

        $columns_table->push($coll);

        $coll = collect();
        $coll->name = 'active';
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
        $field->name = 'title';
        $field->title = 'Title';
        $field->is_required = true;
        $fields->push($field);

        $field = collect();
        $field->name = 'slug';
        $field->title = 'Slug';
        $fields->push($field);

        $field = collect();
        $field->name = 'active';
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

        $url = 'admin.categories';
        $table_name = 'categories';
        $columns_table = $this->getTable();

        return view('admin.categories.index', compact('columns_table', 'table_name', 'url', 'search', 'column', 'is_asc', 'current_page'));
    }

    public function create(Request $request)
    {
        $fields = $this->getFields();
        return view('admin.categories.create', compact('fields'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:categories',
            'slug' => 'unique:categories',
        ]);
        $page_slug = $request->input('slug', '');
        
        if(!$page_slug)
            $page_slug = $request->title;
        
        $category = new Category();
        $category->title = $request->title;
        
        $category->active = intval($request->input('active', 0)) == 1;
        $category->slug = Str::slug($page_slug, '-');
        $r = $category->save();

        if ($request->images) {
            $_src = $request->file('images')->store($this->_store_dir);

            $_I = new Image();
            $_I->name = $category->title;
            $_I->alt = $category->title;
            $_I->src = $_src;
            $_I->imageable_type = get_class($category);
            $_I->imageable_id = $category->id;
            $_I->save();
        }

        if ($r)
            session()->flash('message', 'Category created with successfully!');
        else
            session()->flash('error', 'It was not possible to save the Category, operation canceled!');

        return redirect(route('admin.categories'));
    }

    public function edit(Category $category)
    {
        $fields = $this->getFields();
        return view('admin.categories.edit', compact('fields', 'category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'title' => 'required|unique:categories,title,' . $category->id,
            'slug' => 'unique:categories,slug,' . $category->id
        ]);
        
        $page_slug = $request->input('slug', '');
        
        if(!$page_slug)
            $page_slug = $request->title;
       
        $category->title = $request->title;
        $category->active = intval($request->input('active', 0)) == 1;
        $category->slug = Str::slug($page_slug, '-');

        $r = $category->save();

        if (intval($request->input('images_remove', 0)) == 1) {
            foreach ($category->images as $image) {
                if (File::exists(storage_path($this->default_dir . $image->src))) {
                    Storage::delete($image->src);
                }
                $image->delete();
            }
        }

        if ($request->images) {
            
            foreach ($category->images as $image) {
                if (File::exists(storage_path($this->default_dir . $image->src))) {
                    Storage::delete($image->src);
                }
                $image->delete();
            }
            
            $_src = $request->file('images')->store($this->_store_dir);

            $_I = new Image();
            $_I->name = $category->title;
            $_I->alt = $category->title;
            $_I->src = $_src;
            $_I->imageable_type = get_class($category);
            $_I->imageable_id = $category->id;
            $_I->save();
        }

        if ($r)
            session()->flash('message', 'Category updated with successfully!');
        else
            session()->flash('error', 'It was not possible to save the Category, operation canceled!');

        return redirect(route('admin.categories'));
    }

    public function destroy(Category $category)
    {
        if ($category->products()->exists()) {
            session()->flash('error', 'It was not possible to remove the Category, operation canceled!');
        } else {
            if ($category->images()->exists()) {

                foreach ($category->images as $image) {
                    if (File::exists(storage_path($this->default_dir . $image->src))) {
                        Storage::delete($image->src);
                    }

                    $image->delete();
                }
            }

            $r = $category->delete();

            if ($r)
                session()->flash('message', 'Category deleted with successfully!');
            else
                session()->flash('error', 'It was not possible to remove the Category, operation canceled!');
        }

        return redirect(route('admin.categories'));
    }
}
