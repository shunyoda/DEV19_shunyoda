<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pref extends Model
{
    protected $fillable = [
                  'code'
                  , 'name'
                        ];
                        
 public static function selectlist()
{
    $prefs = Pref::all();
    $list = array();
    $list += array( "" => "選択してください" ); //selectlistの先頭を空に
    foreach ($prefs as $pref) {
       $list += array( $pref->name => $pref->name );
    }
    return $list;
}

}




