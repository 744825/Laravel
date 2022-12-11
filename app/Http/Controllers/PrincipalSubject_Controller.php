<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Models\PrincipalSubjectMaster;

class PrincipalSubject_Controller extends Controller

{
    //IMPORTANT
    //If this is changed corresponding changes need to be done web.php routing file
    protected $endpoint='principalsubject';
    protected $tableName = "Principal Subject Master";

   private function model(){
        return  new PrincipalSubjectMaster();
    }


    function index()
    {

        return view("table.display", [
            'endpoint' => $this->endpoint,
            'colName' => $this->model()->getCols() ,
            'recordList' => PrincipalSubjectMaster::paginate(25) ]);
    }

    function create()
    {
        $mod = new PrincipalSubjectMaster();
        return view("table.add",  [
            'colName' => $this->model()->getCols() ,
            'endpoint' => $this->endpoint,
            'tableName' => $this->tableName]
        );

    }


    function add(Request $request)
    {

        $formFields = $request->validate([
            'PRINCIPAL2' => 'required',
            'PRINCIPAL_' => ['required', Rule::unique('cms_principal_subject_master', 'PRINCIPAL_')],
            'CC_CLASS_N' => 'required',
            'DDC_CLASS_' => ['required', 'digits_between:1,2']

        ]);

        $formFields['user_id'] = auth()->id();

        PrincipalSubjectMaster::create($formFields);
        return redirect("/" . $this->endpoint)->with('message', 'Record is added successfully!');
    }

    function edit($id)
    {
        return view("table.edit", ['recordValue' => PrincipalSubjectMaster::find($id),
         'colName' => $this->model()->getCols(),
         'endpoint' => $this->endpoint,
         'tableName' => $this->tableName]
        );
    }

    function delete(Request $req)
    {
        PrincipalSubjectMaster::destroy($req->id);
        return redirect("/" . $this->endpoint)->with('message', 'Record is deleted successfully!');   //
    }

    function update(Request $req)
    {
        $record = PrincipalSubjectMaster::find($req->PRINCIPAL_);
        $input = $req->all();
        $record->update($input);
        return redirect("/" . $this->endpoint)->with('message', 'Record Updated successfully!');
    }
}
