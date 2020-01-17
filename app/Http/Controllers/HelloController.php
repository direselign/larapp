<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(){

        $d = [
            'name'=>'Direselign',
            'age'=>'36',
            'dept'=>'CS',
        ];
        return view('hello', compact('d'));
    }
    public function about_test(){
        $test = "This is data";
        #return $test;

        return view('about', compact('test'));
    }
    public function services(){

        $services = \App\Service::all();
        #dd($services);
        // return view('service')->with($services)
        return view('service', compact('services'));
    }
}
