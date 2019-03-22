<?php

namespace AlaCartaYa;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function users(){ 
            return $this->belongsToMany(Role::class)->withTimestamps(); 
    }
}
