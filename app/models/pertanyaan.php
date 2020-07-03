<?php

namespace App\models;
use Illuminate\Support\Facades\DB;
class pertanyaan{
    public static function get_all(){
        $items = DB::table('pertanyaan')->get();
        return $items;
    }
    public static function save($data){
        $new_item= DB::table('pertanyaan')->insert($data);

        return $new_item;
    }
    public static function find_by_id($id){
        $items =DB::table('pertanyaan')->where('id_tanya',$id)->get();
        return $items;
    }
    public static function ucok($id){
        $items =DB::table('pertanyaan')->where('id_tanya',$id)->first();
        return $items;
    }
    public  static function update($id, $request){
        $items = DB::table('pertanyaan')
        ->where('id_tanya',$id)
        ->update([
            'judul'=> $request["judul"],
            'isi'=> $request["isi"]
        ]);
        return $items;
    }
    public  static function delete($id){
        $items=DB::table('pertanyaan')->where('id_tanya',$id)->delete();
        return $items;
    }
    public static function ucok2($id){
        $items =DB::table('pertanyaan')->where('id_tanya',$id)->first();
        return $items;
    }
}





?>
