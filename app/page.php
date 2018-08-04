<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class page extends Model
{
   public function notes()
   {
            return $this->hasMany(note::class);
      
   }
}
