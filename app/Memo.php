<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Memo extends Model
{
    protected $fillable = ['memo'];

    //memoとuserを結ぶ
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
