<?php

namespace App\Http\Controllers;
use App\Models\blogmanagement;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function addblog(){
         return view('blog.index');
    }
    public function blog(){
        return view('blog.addblog');
   }
   public function save(Request $a){
       $data=new blogmanagement;
       $data->title=$a->title;
       $data->short_description=$a->short_description;
       $data->long_description=$a->long_description;
       $data->date=$a->date;
       $data->save();
       if($data){
           return redirect('blog/addblog')->with('message','Data Successfully Inserted!.');
       }
   }
   public function display(){
       $data=blogmanagement::orderBy('id','desc')->get();
       return view('blog.display',compact('data'));
   }
   public function view($id){
    $data=blogmanagement::find($id);
    return view('blog.view',compact('data'));
   }
   public function edit($id){
    $data=blogmanagement::find($id);
    return view('blog.edit',compact('data'));
   }
   public function update(Request $a){
    $data=blogmanagement::find($a->id);
    $data->title=$a->title;
    $data->short_description=$a->short_description;
    $data->long_description=$a->long_description;
    $data->date=$a->date;
    $data->save();
    if($data){
        return redirect('blog/display')->with('message','Data Successfully Updated!.');
    }
    
   }
   public function delete($id){
    $data=blogmanagement::find($id);
    $deleted=$data->delete();
    if($deleted){
        return redirect('blog/display')->with('message','Data Successfully Deleted!.');
    }
   }
}
