<?php

namespace LaraDex;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    protected $fillable= ['name','avatar','descruption'];
    //
    public function getRouteKeyName() {
        return 'slug';
    }
}
