<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TypeBooks;

class TypeBooksController extends Controller
{
    public function index() {
        $typebooks = TypeBooks::all();
        $count = TypeBooks::count();

        $typebooks = TypeBooks::paginate(3);

        return view('typebooks.index',[
            'typebooks' => $typebooks,
            'count' => $count
        ]);
    }

    public function destroy($id) {
        Typebooks::destroy($id);
        return back();
    }
}
