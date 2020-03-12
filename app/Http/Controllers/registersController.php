<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Todo;

class registersController extends Controller
{
    public function index(){
        return view("welcome");
    }


public function store(Request $request){
$request->validate([
    "name" =>"required",
    
   "mobile" =>"required",
    
    
    "email"=> "required",
]);
$user=new Todo;
$user->name = $request->name;
$user->email =$request->email;
$user->mobile = $request->mobile;
$user->save(); 
//return"'<div class='alert alert-success noshadow'>your data is saved.</div>";
return redirect()->back()->with('message',"you are succses");
//\app\Todo::create(request->all());
//return Redirect::back()->withInput($request->all())->withErrors($validator);

}}