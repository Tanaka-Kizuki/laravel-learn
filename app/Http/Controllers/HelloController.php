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
<<<<<<< HEAD
    public function index(MyServiceInterface $myService, int $id = -1) {
        $myservice = setId($id);
        $data = [
            'msg' => $myservice ->say(),
            'data' => $myservice -> alldata() 
=======
    public function index(Request $request) {
        $msg = "Show record";
        $records = Person::all();
        $data = [
            'msg' => $msg,
            'data' => $records
>>>>>>> db
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
