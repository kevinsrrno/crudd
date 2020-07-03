<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\pertanyaan;
class PertanyaanController extends Controller
{
         public function index(){
        $items=pertanyaan::get_all();
        //dd($items);
        return view('jawaban.index',compact('items'));
    }

    public function create(){
        return view('jawaban.form');
    }
    public function create1($id){
        $items = pertanyaan::ucok2($id);
        //dd($items);
           return view('jawaban.form2',compact('items'));
    }


    public function store(Request $request){
     // dd($_REQUEST->all());
     $data = $request->all();
     unset($data["_token"]);
      $items = pertanyaan::save($data);
     // dd($items);
      if($items){
        return redirect('/pertanyaan');
      }
    }

    public function edit($id_jb){
        $items = pertanyaan::ucok($id_jb);
     //dd($items);
        return view('jawaban.edit',compact('items'));

    }
    
    public function update($id,request $request){
        $items = pertanyaan::update($id,$request->all());
       return redirect('/pertanyaan');
    }

    public function show($id_tanya){
        $items = pertanyaan::find_by_id($id_tanya);
     //dd($items);
        return view('jawaban.show1',compact('items'));
     }
     public function delete($id){
        $items= pertanyaan::delete($id);
		
        // alihkan halaman ke halaman pegawai
        return redirect('/pertanyaan');
     }
        
    
}
