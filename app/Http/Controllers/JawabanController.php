<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\jawaban;
class JawabanController extends Controller
{
    
    
    public function index(){
        $items=jawaban::get_all();
       // dd($items);
        return view('jawaban.jb',compact('items'));
    }
    
    public function jawaban(){
        return view('jawaban.form2');
    }


    public function store(Request $request){
        $data = $request->all();
     unset($data["_token"]);
      $items = jawaban::save($data);
      dd($items);
      if($items){
        return redirect('/pertanyaan');
      }
       }


    


       public function show($id_jb){
           $items = jawaban::find_by_id($id_jb);
        //dd($items);
           return view('jawaban.show',compact('items'));
        }
}
