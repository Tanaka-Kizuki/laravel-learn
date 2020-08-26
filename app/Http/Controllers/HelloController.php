<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use App\MyClasses\MyService;
use Illuminate\Support\Facades\DB;
use App\Person;
use App\Event\PersonEvent;

class HelloController extends Controller
{
    public function index() {
        return view('hello.index');
    }

    public function send() {
        $id = $request -> input('id');
        $person = Person::find($id);

        event(new PersonEvent($person));
        $data = [
            'input' => '',
            'msg' => 'id=' . $id,
            'data' => [$person], 
        ];
        return view('hello.index',$data);
    }
}
