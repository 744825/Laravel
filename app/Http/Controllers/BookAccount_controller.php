<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\BookOfAccountMaster;

class BookAccount_controller extends Controller

{
    function index()
    {
        $bookAccount=BookOfAccountMaster::all();
        return view("bookaccount.bookaccount",compact('bookAccount'));

        }


        function create()
        {
            return view("bookaccount.addba");

            }


        function addBookAccount(Request $req)
        {
            $bookAccount = new BookOfAccountMaster();
            $bookAccount->SECTION_ID=$req->SECTION_ID;
                $bookAccount->BOOKS_OF_A=$req->BOOKS_OF_A;
                $bookAccount->BOOKS_OF_2=$req->BOOKS_OF_2;
                $bookAccount->INSTITUTE=$req->INSTITUTE;
                $bookAccount->LOCATION=$req->LOCATION;
                $bookAccount->save();
                return redirect('bookaccount');


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
