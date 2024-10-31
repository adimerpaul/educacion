<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Area extends Model{
    use SoftDeletes;
    protected $fillable = ['nombre'];
    function users(){
        return $this->hasMany(User::class);
    }
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
}
