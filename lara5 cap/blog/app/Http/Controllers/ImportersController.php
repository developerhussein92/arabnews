<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\importer;

class ImportersController extends Controller
{
    //

    public function create()
    {
        return view('front.importers.new_importer');
    }

    public function store(Request $req)
    {
        vb($req,[
            'email'=>'email',
            'password'=>'min:4',
            'g-recaptcha-response' =>  'required|recaptcha',
        ]);
        $ni = new importer();
        $ni->email = $req->email;
        $ni->password = $req->password;
        $ni->save();
    }

}
