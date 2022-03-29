<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Models\User;
use App\Models\Image;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AdminUsersController extends Controller
{

    public $default_dir = "app" . DIRECTORY_SEPARATOR;

    public $_store_dir = "assets" . DIRECTORY_SEPARATOR . "img" . DIRECTORY_SEPARATOR . "user";

    protected function getTable()
    {
        $columns_table = collect();

        $coll = collect();
        $coll->name = 'first_name';
        $coll->title = 'First name';
        $coll->image = 'images';

        $columns_table->push($coll);

        $coll = collect();
        $coll->name = 'last_name';
        $coll->title = 'last name';

        $columns_table->push($coll);

        $coll = collect();
        $coll->name = 'email';
        $coll->title = 'E-Mail';

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
        $field->name = 'first_name';
        $field->title = 'First Name';
        $field->is_required = true;
        $fields->push($field);

        $field = collect();
        $field->name = 'last_name';
        $field->title = 'First Name';
        $field->is_required = true;
        $fields->push($field);

        $field = collect();
        $field->name = 'email';
        $field->title = 'E-Mail';
        $field->is_required = true;
        $fields->push($field);
                
        $field = collect();
        $field->name = 'password';
        $field->title = 'Password';
        $field->is_password = true;
        $fields->push($field);
                
        $field = collect();
        $field->name = 'role';
        $field->use_role = true;
        $field->is_required = true;
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
        $column = 'first_name';
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

        $url = 'admin.users';
        $table_name = 'users';
        $columns_table = $this->getTable();

        return view('admin.users.index', compact('columns_table', 'table_name', 'url', 'search', 'column', 'is_asc', 'current_page'));
    }

    public function create(Request $request)
    {
        $fields = $this->getFields();
        return view('admin.users.create', compact('fields'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|unique:users',
            'first_name' => 'required',
            'last_name' => 'required',
            'role' => 'required'
        ]);
        
        if($request->has('password') && trim($request->password) != ''){
            $request->validate([
                'password' => 'required| min:6',
                'password_confirmation' => 'required|same:password|min:6'
            ]);
        }
        

        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->email_verified_at = Carbon::now();
        $user->is_active = intval($request->input('is_active', 0)) == 1;
        
        if($request->has('password') && trim($request->password) != '')
            $user->password = Hash::make($request->password);
        
        $user->assignRole($request->role);
        $r = $user->save();

        if ($request->images) {
            $_src = $request->file('images')->store($this->_store_dir);

            $_I = new Image();
            $_I->name = $user->full_name;
            $_I->alt = $user->full_name;
            $_I->src = $_src;
            $_I->imageable_type = get_class($user);
            $_I->imageable_id = $user->id;
            $_I->save();
        }

        if ($r)
            session()->flash('message', 'User created with successfully!');
        else
            session()->flash('error', 'It was not possible to save the User, operation canceled!');

        return redirect(route('admin.users'));
    }

    public function edit(User $user)
    {
        $fields = $this->getFields();
        return view('admin.users.edit', compact('fields', 'user'));
    }

    public function update(Request $request, User $user)
    {        
        $request->validate([
            'email' => 'required|unique:users,email,'.$user->id,
            'first_name' => 'required',
            'last_name' => 'required',
            'role' => 'required'
        ]);
        
        if($request->has('password') && trim($request->password) != ''){
            $request->validate([
                'password' => 'required| min:6',
                'password_confirmation' => 'required|same:password|min:6'
            ]);
        }
        
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->is_active = intval($request->input('is_active', 0)) == 1;
              
        if($request->has('password') && trim($request->password) != '')
            $user->password = Hash::make($request->password);
        
        if(!$user->hasRole($request->role)){
            $user->roles()->detach();
            $user->assignRole($request->role);
        }
        
        $r = $user->save();

        if (intval($request->input('images_remove', 0)) == 1) {
            foreach ($user->images as $image) {
                if (File::exists(storage_path($this->default_dir . $image->src))) {
                    Storage::delete($image->src);
                }
                $image->delete();
            }
        }

        if ($request->images) {

            foreach ($user->images as $image) {
                if (File::exists(storage_path($this->default_dir . $image->src))) {
                    Storage::delete($image->src);
                }
                $image->delete();
            }

            $_src = $request->file('images')->store($this->_store_dir);

            $_I = new Image();
            $_I->name = $user->full_name;
            $_I->alt = $user->full_name;
            $_I->src = $_src;
            $_I->imageable_type = get_class($user);
            $_I->imageable_id = $user->id;
            $_I->save();
        }

        if ($r)
            session()->flash('message', 'User updated with successfully!');
        else
            session()->flash('error', 'It was not possible to save the User, operation canceled!');

        return redirect(route('admin.users'));
    }

    public function destroy(User $user)
    {
        if($user->id == Auth::user()->id){
            session()->flash('error', 'It was not possible to remove the User, operation canceled!');
            return redirect(route('admin.users'));
        }
        
        if ($user->images()->exists()) {
            
            foreach ($user->images as $image) {
                
                if (File::exists(storage_path($this->default_dir . $image->src))) {
                    Storage::delete($image->src);
                }
                
                $image->delete();
            }
        }
        
        $r = $user->delete();
        
        if ($r)
            session()->flash('message', 'User deleted with successfully!');
        else
            session()->flash('error', 'It was not possible to remove the User, operation canceled!');

        return redirect(route('admin.users'));
    }
}
