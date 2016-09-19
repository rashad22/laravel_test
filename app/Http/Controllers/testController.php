<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class testController extends Controller {

    //
    public function test() {
        return view('student');
    }

    public function savestudent() {
        echo 'dfddfd';
    }

}
