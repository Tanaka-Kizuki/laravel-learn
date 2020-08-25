<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class HelloController extends Controller
{
    public function index(Request $request, Response $response) {
        $name = $request -> query('name');
        $mail = $request -> query('mail');
        $age = $request -> query('age');
        $msg = $name. ',' .$mail . ',' .$age;
        $keys = ['名前','メール','年齢'];
        $values = [$name,$mail,$age];
        $data = [
            'msg' => $msg,
            'keys' => $keys,
            'values' => $values,
        ];
        $request -> flash();
        return view('hello.index',$data);
    }

    public function other(Request $request) {
        Storage::disk('local') -> putfile('files',$request->file('file'));
        return redirect()->route('hello');
    }
}
