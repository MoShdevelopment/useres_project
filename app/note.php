<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class note extends Model
{
    //
    protected $fillable=['text'];
    public function page()
    {
             return $this->belongsTo(page::class);
       
    }
}
