<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class restdata2 extends Model
{
    protected $table = 'restdata2';
    protected $guarded = array('id');
    public static $rules = array(
      'message'=>'required',
      'url' => 'required'
    );

    public function getData(){
      return $this->is. ':'.$this->message.'('.$this->url.')';
    }
}
