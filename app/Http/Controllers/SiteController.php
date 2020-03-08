<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        $fullname = "Tiptanya Sangoursub";
        $website = "Books";
        return view('about',[
            'fullname'=> $fullname,
            'website'=> $website
        ]);
    }
}
