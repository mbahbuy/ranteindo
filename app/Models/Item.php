<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(self::class, 'children_id');
    }

    public function views()
    {
        return $this->hasMany('App\Models\Views', 'image', 'href');
    }

    public function Icons()
    {
        $icon = self::select(["title", "body", "href"])->where('parent_id', 1)->get();
        return $icon;
    }

    public function TopItem()
    {
        $item = self::where('parent_id', 2)->orderBy('id', 'DESC')->get();
        return $item;
    }

    public function ServicesItem()
    {
        $item = self::where('parent_id', 3)->orderBy('id', 'DESC')->get();
        return $item;
    }

    public function VideosItem()
    {
        $item = self::where('parent_id', 4)->orderBy('id', 'DESC')->get();
        return $item;
    }

    public function ManagerItem()
    {
        $item = self::where('parent_id', 5)->latest()->get();
        return $item;
    }

    public function ContactInfoEmail()
    {
        $item = self::where('parent_id', 6)->where('children_id', 1)->orderBy('id', 'DESC')->get();
        return $item;
    }

    public function ContactInfoTlp()
    {
        $item = self::where('parent_id', 6)->where('children_id', 2)->orderBy('id', 'DESC')->get();
        return $item;
    }

    public function Footer()
    {
        $item = self::where('parent_id', 7)->where('children_id', 1)->orderBy('id', 'DESC')->get();
        return $item;
    }
}
