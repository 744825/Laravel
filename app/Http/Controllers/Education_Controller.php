<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Models\EducationMaster;

use function Symfony\Component\String\b;

class Education_Controller extends Controller

{
    //IMPORTANT
    //If this is changed corresponding changes need to be done web.php routing file
    protected $endpoint='education';
    protected $tableName = "Education Master";

   private function model(){
        return  new EducationMaster();
    }


    function index()
    {

        return view("table.display", [
            'endpoint' => $this->endpoint,
            'colName' => $this->model()->getCols() ,
            'recordList' => EducationMaster::paginate(25) ]);
    }

    function create()
    {
        $mod = new EducationMaster();
        return view("table.add",  [
            'colName' => $this->model()->getCols() ,
            'endpoint' => $this->endpoint,
            'tableName' => $this->tableName]
        );

    }


    function add(Request $request)
    {
        $formFields = $request->validate([
            'SECTION_ID' => ['required', Rule::unique('cms_educational_details', 'MEMBER_ID')],
            'INSTITUTE_' => ['required','between:1,10'],
            'SECTION' => ['required','between:1,15']
        ]);

        EducationMaster::create($formFields);
        return redirect("/" . $this->endpoint)->with('message', 'Record is added successfully!');
    }

    function edit($id)
    {
        return view("table.edit", ['recordValue' => EducationMaster::find($id),
         'colName' => $this->model()->getCols(),
         'endpoint' => $this->endpoint,
         'tableName' => $this->tableName]
        );
    }

    function delete(Request $req)
    {
        EducationMaster::destroy($req->id);
        return redirect("/" . $this->endpoint)->with('message', 'Record is deleted successfully!');   //
    }

    function update(Request $req)
    {
        $record = EducationMaster::find($req->MEMBER_ID);


        $input = $req->validate([
            'MEMBER_ID ' => ['required', Rule::exists('cms_educational_details', 'MEMBER_ID')],
            'PASSING_YE' => ['required','between:1,11'],
            'OBTAINED_M' => ['required','between:1,11'],
            'MAXIMUM_MA' => ['required','between:1,11'],
            'GRADE' => 'required',
            'INSTITUTE' => 'required',
            'QUALIFIED_' => 'required',
            'BOARD_UNIV' => 'required'


        ]);
        $record->update($input);
        return redirect("/" . $this->endpoint)->with('message', 'Record Updated successfully!');
    }
}
