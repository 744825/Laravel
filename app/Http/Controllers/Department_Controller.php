<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Models\DepartmentMaster;

class Department_Controller extends Controller

{
    //IMPORTANT
    //If this is changed corresponding changes need to be done web.php routing file
    protected $endpoint='department';
    protected $tableName = "Department Master";

   private function model(){
        return  new DepartmentMaster();
    }


    function index()
    {

        return view("table.display", [
            'endpoint' => $this->endpoint,
            'colName' => $this->model()->getCols() ,
            'recordList' => DepartmentMaster::paginate(25) ]);
    }

    function create()
    {
        $mod = new DepartmentMaster();
        return view("table.add",  [
            'colName' => $this->model()->getCols() ,
            'endpoint' => $this->endpoint,
            'tableName' => $this->tableName]
        );

    }

    function add(Request $request)
    {

        $formFields = $request->validate([
            'INSTITUTE_' => 'required',
            'DEPARTMENT' => ['required', Rule::unique('cms_department_master', 'DEPARTMENT')],
            'DEPARTMEN2' => 'required',
            'ADDED_BY' => 'required',

        ]);

        $formFields['user_id'] = auth()->id();

        DepartmentMaster::create($formFields);
        return redirect("/" . $this->endpoint)->with('message', 'Record is added successfully!');
    }

    function edit($id)
    {
        return view("table.edit", ['recordValue' => DepartmentMaster::find($id),
         'colName' => $this->model()->getCols(),
         'endpoint' => $this->endpoint,
         'tableName' => $this->tableName]
        );
    }

    function delete(Request $req)
    {
        DepartmentMaster::destroy($req->id);
        return redirect("/" . $this->endpoint)->with('message', 'Record is deleted successfully!');   //
    }

    function update(Request $req)
    {
        $record = DepartmentMaster::find($req->DEPARTMENT);
        $input = $req->all();
        $record->update($input);
        return redirect("/" . $this->endpoint)->with('message', 'Record Updated successfully!');
    }
}
