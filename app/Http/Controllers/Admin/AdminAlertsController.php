<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;
use App\Models\Image;
use App\Models\Alert;

class AdminAlertsController extends Controller
{

    protected function getTable()
    {
        $columns_table = collect();

        $coll = collect();
        $coll->name = 'title';
        $coll->title = 'Title';

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
        $field->name = 'title';
        $field->title = 'Title';
        $field->is_required = true;
        $fields->push($field);

        $field = collect();
        $field->name = 'type_msg';
        $field->title = 'Alert Color';
        $field->use_types = true;
        $field->is_required = true;
        $fields->push($field);
        
        $field = collect();
        $field->name = 'is_active';
        $field->title = 'Active';
        $field->is_bool = true;
        $field->is_required = true;
        $fields->push($field);
        
        $field = collect();
        $field->name = 'msg';
        $field->title = 'Message';
        $field->is_text = true;
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

        $url = 'admin.alerts';
        $table_name = 'alerts';
        $columns_table = $this->getTable();

        return view('admin.alerts.index', compact('columns_table', 'table_name', 'url', 'search', 'column', 'is_asc', 'current_page'));
    }

    public function create(Request $request)
    {
        $fields = $this->getFields();
        return view('admin.alerts.create', compact('fields'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'msg' => 'required',
        ]);
        
        $alert = new Alert();
        $alert->title = $request->title;
        $alert->type_msg = $request->type_msg;
        $alert->msg = $request->msg;
        $alert->is_active = intval($request->input('is_active', 0)) == 1;
        
        $r = $alert->save();
        
        if ($r)
            session()->flash('message', 'Alert created with successfully!');
        else
            session()->flash('error', 'It was not possible to save the Alert, operation canceled!');

        return redirect(route('admin.alerts'));
    }

    public function edit(Alert $alert)
    {
        $fields = $this->getFields();
        return view('admin.alerts.edit', compact('fields', 'alert'));
    }

    public function update(Request $request, Alert $alert)
    {
        $request->validate([
            'title' => 'required',
            'msg' => 'required',
        ]);
        
        $alert->title = $request->title;
        $alert->type_msg = $request->type_msg;
        $alert->msg = $request->msg;
        $alert->is_active = intval($request->input('is_active', 0)) == 1;
        
        $r = $alert->save();
        

        if ($r)
            session()->flash('message', 'Alert updated with successfully!');
        else
            session()->flash('error', 'It was not possible to save the Alert, operation canceled!');

        return redirect(route('admin.alerts'));
    }

    public function destroy(Alert $alert)
    {       

        $r = $alert->delete();

        if ($r)
            session()->flash('message', 'Alert deleted with successfully!');
        else
            session()->flash('error', 'It was not possible to remove the Alert, operation canceled!');
        

        return redirect(route('admin.alerts'));
    }
}
