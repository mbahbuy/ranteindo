<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class views extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    
    public function parent(){
        $this->belongsTo(self::class, 'parent_id');
    }

    public function children(){
        $this->hasMany(self::class, 'children_id');
    }
}
