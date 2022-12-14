<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Models\BookOfAccountMaster;

class BookAccount_controller extends Controller

{
    //IMPORTANT
    //If this is changed corresponding changes need to be done web.php routing file
    protected $endpoint='bookaccount';
    protected $tableName = "Book Account Master";

   private function model(){
        return  new BookOfAccountMaster();
    }


    function index()
    {

        return view("table.display", [
            'endpoint' => $this->endpoint,
            'colName' => $this->model()->getCols() ,
            'recordList' => BookOfAccountMaster::paginate(25) ]);
    }

    function create()
    {
        $mod = new BookOfAccountMaster();
        return view("table.add",  [
            'colName' => $this->model()->getCols() ,
            'endpoint' => $this->endpoint ,
            'tableName' => $this->tableName]
        );
    }


    function add(Request $request)
    {

        $formFields = $request->validate([
            'LOCATION' => 'required',
            'BOOKS_OF_A' => ['required', Rule::unique('am_books_of_account_master', 'BOOKS_OF_A')],
            'BOOKS_OF_2' => 'required',
            'INSTITUTE' => 'required',
            'SECTION_ID' => ['required', 'digits_between:1,2']

        ]);

        $formFields['user_id'] = auth()->id();

        BookOfAccountMaster::create($formFields);
        return redirect("/" . $this->endpoint)->with('message', 'Record is added successfully!');
    }

    function edit($id)
    {
        return view("table.edit", ['recordValue' => BookOfAccountMaster::find($id),
         'colName' => $this->model()->getCols(),
         'endpoint' => $this->endpoint,
         'tableName' => $this->tableName]
        );
    }

    function delete(Request $req)
    {
        BookOfAccountMaster::destroy($req->id);
        return redirect("/" . $this->endpoint)->with('message', 'Record is deleted successfully!');   //
    }

    function update(Request $req)
    {
        $bookAcc = BookOfAccountMaster::find($req->BOOKS_OF_A);
        $input = $req->all();
        $bookAcc->update($input);
        return redirect("/" . $this->endpoint)->with('message', 'Record Updated successfully!');
    }
}
