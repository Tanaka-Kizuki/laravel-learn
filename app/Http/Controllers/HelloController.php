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
      $data = [
        'msg' => 'this is Vue.js application.',
      ];
      return view('hello.index',$data);
    }
}
