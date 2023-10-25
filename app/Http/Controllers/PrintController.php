<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Member;
use App\Models\Book;

class PrintController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */



    //PRINT BARCODE
    public function print_book(Request $request)
    {
        return view('dashboard.print.printbook', [
            'book' => Book::where('id', $request->id)->first(),
            'active' => 'books',
        ]);
    }
}
