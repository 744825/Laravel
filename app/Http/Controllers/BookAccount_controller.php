<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\BookOfAccountMaster;

class BookAccount_controller extends Controller

{
    function index()
    {


        return view("bookaccount.bookaccount",[
            'bookAccount' => BookOfAccountMaster::paginate(25)
        ]);

        }




        function create()
        {
            return view("bookaccount.addba");

            }


        function addBookAccount(Request $request)
        {

            $formFields = $request->validate([
                'LOCATION' => 'required',
                'BOOKS_OF_A' => ['required', Rule::unique('am_books_of_account_master', 'BOOKS_OF_A')],
                'BOOKS_OF_2' => 'required',
                'INSTITUTE' => 'required',
                'SECTION_ID' => ['required', 'digits_between:1,4']

            ]);

            $formFields['user_id'] = auth()->id();

            BookOfAccountMaster::create($formFields);

            return redirect('/bookaccount')->with('message', 'Record is added successfully!');




            }

  function editBookAccount(  $BOOKS_OF_A)
{
    $BookAcc = BookOfAccountMaster::find($BOOKS_OF_A);
        // $input = $req->all();
        // $BookAcc->update($input)
        return view("bookaccount.editbookaccount",compact('BookAcc'));



    }

             function delete(Request $req)
            {

                BookOfAccountMaster::destroy($req->id);
                return redirect('bookaccount')->with('flash_message', 'Contact deleted!');   //
            }

            function update(Request $req)
            {
                $bookAcc = BookOfAccountMaster::find($req->BOOKS_OF_A);
                $input = $req->all();
                $bookAcc->update($input);
                return redirect('bookaccount')->with('flash_message', 'Contact Updated!');
            }


}
