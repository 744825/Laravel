<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Models\SectionMaster;

use function Symfony\Component\String\b;

class SectionMaster_Controller extends Controller

{
    //IMPORTANT
    //If this is changed corresponding changes need to be done web.php routing file
    protected $endpoint='section-mstr';
    protected $tableName = "Section Master";

   private function model(){
        return  new SectionMaster();
    }


    function index()
    {

        return view("table.display", [
            'endpoint' => $this->endpoint,
            'colName' => $this->model()->getCols() ,
            'recordList' => SectionMaster::paginate(25) ]);
    }

    function create()
    {
        $mod = new SectionMaster();
        return view("table.add",  [
            'colName' => $this->model()->getCols() ,
            'endpoint' => $this->endpoint,
            'tableName' => $this->tableName]
        );

    }


    function add(Request $request)
    {
        $formFields = $request->validate([
            'SECTION_ID' => ['required', Rule::unique('cms_section_master', 'SECTION_ID')],
            'INSTITUTE_' => ['required','between:1,10'],
            'SECTION' => ['required','between:1,15']
        ]);

        SectionMaster::create($formFields);
        return redirect("/" . $this->endpoint)->with('message', 'Record is added successfully!');
    }

    function edit($id)
    {
        return view("table.edit", ['recordValue' => SectionMaster::find($id),
         'colName' => $this->model()->getCols(),
         'endpoint' => $this->endpoint,
         'tableName' => $this->tableName]
        );
    }

    function delete(Request $req)
    {
        SectionMaster::destroy($req->id);
        return redirect("/" . $this->endpoint)->with('message', 'Record is deleted successfully!');   //
    }

    function update(Request $req)
    {
        $record = SectionMaster::find($req->SECTION_ID);


        $input = $req->validate([
            'SECTION_ID' => ['required', Rule::exists('cms_section_master', 'SECTION_ID')],
            'INSTITUTE_' => ['required','between:1,10'],
            'SECTION' => ['required','between:1,15']

        ]);
        $record->update($input);
        return redirect("/" . $this->endpoint)->with('message', 'Record Updated successfully!');
    }
}
