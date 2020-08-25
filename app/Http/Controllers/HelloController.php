<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use App\MyClasses\MyService;

class HelloController extends Controller
{
    public function index(MyServiceInterface $myService, int $id = -1) {
        $myservice = setId($id);
        $data = [
            'msg' => $myservice ->say(),
            'data' => $myservice -> alldata() 
        ];
        return view('hello.index',$data);
    }

    public function other(Request $request) {
        Storage::disk('local') -> putfile('files',$request->file('file'));
        return redirect()->route('hello');
    }
}
