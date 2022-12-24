<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Views extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    
    public function parent(){
        $this->belongsTo(self::class, 'parent_id');
    }

    public function children(){
        $this->hasMany(self::class, 'children_id');
    }

    public function Logo(){
        $img = self::select('image')->where('parent_id', 1)->where('active', true)->first();
        if($img == true){
            if($img->image !== '' || $img->image !== null){
                return $img->image;
            } else {
                return 'img/ranteindo.png';
            }
        } else {
            return 'img/ranteindo.png';
        }
    }

    public function TopImg(){
        $img = self::select('image')->where('parent_id', 2)->where('active', true)->first();
        if($img == true){
            if($img->image !== '' || $img->image !== null){
                return $img->image;
            } else {
                return 'img/banner-right-image.png';
            }
        } else {
            return 'img/banner-right-image.png';
        }
    }

}
