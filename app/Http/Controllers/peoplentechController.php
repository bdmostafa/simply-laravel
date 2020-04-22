<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class peoplentechController extends Controller
{
    public function index(){
        $title = 'PNT Home';
        return view('peoplentech', compact('title'));
    }

    public function about(){
        $title = 'About PNT';
        $details = 'This is an example of compact function for data passing...';
        return view('about', compact('title', 'details'));
    }

    public function form(){
        return view('form');
    }

    public function preview(Request $request){
        // dd($request->all());

        // $name = $request->name;
        // $email = $request->email;
        // $phone = $request->phone;

        // dump($request->all());
        $data = [];
        $data['name'] = $request['full_name'];
        $data['email'] = $request['email_address'];
        $data['phone'] = $request['phone_number'];

        DB::table('info')->insert($data);
        // dd($data);
        return redirect()->route('show');
        
    }

    public function show() {
        // $results = DB::table('info')->first();
        // dd($results);
        // $name = $result->name;
        // $email = $result->email;
        // $phone = $result->phone;
        
        // return view('preview', compact('name', 'email', 'phone'));

        $results = DB::table('info')->get();

        return view('preview', compact('results'));
    }
}
