<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Models\InstituteMaster;

class Institute_Controller extends Controller

{
    //IMPORTANT
    //If this is changed corresponding changes need to be done web.php routing file
    protected $endpoint='institute';
    protected $tableName = "Institute Master";

   private function model(){
        return  new InstituteMaster();
    }


    function index()
    {

        return view("table.display", [
            'endpoint' => $this->endpoint,
            'colName' => $this->model()->getCols() ,
            'recordList' => InstituteMaster::paginate(25) ]);
    }

    function create()
    {
        $mod = new InstituteMaster();
        return view("table.add",  [
            'colName' => $this->model()->getCols() ,
            'endpoint' => $this->endpoint,
            'tableName' => $this->tableName]
        );

    }


    function add(Request $request)
    {

        $formFields = $request->validate([
            'INSTITUTE' => 'required',
            'PRINCIPAL_' => ['required', Rule::unique('cms_institute_master', 'INSTITUTE_')],
            'LOCATION' => 'required',
            'DISTRICT' => 'required'

        ]);

        $formFields['user_id'] = auth()->id();

        InstituteMaster::create($formFields);
        return redirect("/" . $this->endpoint)->with('message', 'Record is added successfully!');
    }

    function edit($id)
    {
        return view("table.edit", ['recordValue' => InstituteMaster::find($id),
         'colName' => $this->model()->getCols(),
         'endpoint' => $this->endpoint,
         'tableName' => $this->tableName]
        );
    }

    function delete(Request $req)
    {
        InstituteMaster::destroy($req->id);
        return redirect("/" . $this->endpoint)->with('message', 'Record is deleted successfully!');   //
    }

    function update(Request $req)
    {
        $record = InstituteMaster::find($req->INSTITUTE_);
        $input = $req->all();
        $record->update($input);
        return redirect("/" . $this->endpoint)->with('message', 'Record Updated successfully!');
    }
}
