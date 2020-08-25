<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use App\MyClasses\MyService;
use Illuminate\Support\Facades\DB;
use App\Person;

class HelloController extends Controller
{
    public function index(Request $request) {
        $msg = "Show record";
        $records = Person::all();
        $data = [
            'msg' => $msg,
            'data' => $records
        ];
        return view('hello.index',$data);
    }

    public function save($id,$name) {
        $record = Person::find($id);
        $record->name = $name;
        $record -> save();
        return redirect()->route('hello');
    }
}
