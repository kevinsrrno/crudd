<?php

namespace App\models;
use Illuminate\Support\Facades\DB;

class jawaban{
    public static function get_all(){
        $items = DB::table('jawaban')->get();
        return $items;
    }
    public static function save($data){
        $new_item= DB::table('jawaban')->insert($data);

        return $new_item;
    }
    public static function find_by_id($id){
        $items =DB::table('jawaban')->where('id_jb',$id)->get();
        return $items;
    }
}





?>
