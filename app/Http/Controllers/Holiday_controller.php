<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Models\HolidayMaster;

class Holiday_Controller extends Controller

{
    //IMPORTANT
    //If this is changed corresponding changes need to be done web.php routing file
    protected $endpoint='holiday';
    protected $tableName = "Holidays Master";

   private function model(){
        return  new HolidayMaster();
    }


    function index()
    {

        return view("table.display", [
            'endpoint' => $this->endpoint,
            'colName' => $this->model()->getCols() ,
            'recordList' => HolidayMaster::paginate(25) ]);
    }

    function create()
    {
        $mod = new HolidayMaster();
        return view("table.add",  [
            'colName' => $this->model()->getCols() ,
            'endpoint' => $this->endpoint,
            'tableName' => $this->tableName]
        );

    }


    function add(Request $request)
    {

        $formFields = $request->validate([
            'INSTITUTE_' => ['required','between:1,10'],
           // 'PRINCIPAL_' => ['required', Rule::unique('cms_principal_subject_master', 'PRINCIPAL_')],
            'DATE' => 'required',
            'REASON' => 'required',
            'ADDED_BY' => ['required','between:1,3'],
            'EDITED_BY' => ['required','between:1,3']
           // 'DDC_CLASS_' => ['required', 'digits_between:1,2']

        ]);

      //  $formFields['user_id'] = auth()->id();

        HolidayMaster::create($formFields);
        return redirect("/" . $this->endpoint)->with('message', 'Record is added successfully!');
    }

    function edit($id)
    {
        return view("table.edit", ['recordValue' => HolidayMaster::find($id),
         'colName' => $this->model()->getCols(),
         'endpoint' => $this->endpoint,
         'tableName' => $this->tableName]
        );
    }

    function delete(Request $req)
    {
        HolidayMaster::destroy($req->id);
        return redirect("/" . $this->endpoint)->with('message', 'Record is deleted successfully!');   //
    }

    function update(Request $req)
    {
        $record = HolidayMaster::find($req->INSTITUTE_);
        $input = $req->all();
        $record->update($input);
        return redirect("/" . $this->endpoint)->with('message', 'Record Updated successfully!');
    }
}
