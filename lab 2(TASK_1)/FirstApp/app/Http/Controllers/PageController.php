<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function contact(){
         return view('contact');
    }

    public function service(){
         $name="Tanvir";
         $id="18";
         $names=array("T-shirt","Shirt","sari","lehanga");
        return view('service')
        ->with ('Name',$name)
        ->with ('Id',$id)
        ->with ('Names',$names);
   }
   public function team(){
     $name="Tanvir";
     $id="18";
     $member=array("Tanvir","rahim","karim","jabbar");
    return view('Our_Team')
    ->with ('Name',$name)
    ->with ('Id',$id)
    ->with ('Names',$member);
}

}
