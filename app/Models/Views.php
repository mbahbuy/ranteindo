<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Views extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    
    public function parent(){
        return $this->belongsTo(self::class, 'parent_id');
    }

    public function children(){
        return $this->hasMany(self::class, 'children_id');
    }

    public function icon(){
        return $this->belongsTo('App\Models\Item', 'href', 'image');
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

    public function ServicesTitle()
    {
        $title = self::select('title')->where('parent_id', 3)->where('children_id', 1)->where('active', true)->first();
        if($title == true){
            if($title->title !== '' || $title->title !== null){
                return $title->title;
            } else {
                return 'We Provide The Best Service With Our Tools Our Services';
            }
        } else {
            return 'We Provide The Best Service With Our Tools Our Services';
        }
    }

    public function AboutImg()
    {
        $img = self::select('image')->where('parent_id', 4)->where('children_id', 1)->where('active', true)->first();
        if($img == true){
            if($img->image !== '' || $img->image !== null){
                return $img->image;
            } else {
                return 'img/about-left-image.png';
            }
        } else {
            return 'img/about-left-image.png';
        }
    }

    public function AboutTitle()
    {
        $title = self::select('title')->where('parent_id', 4)->where('children_id', 2)->where('active', true)->first();
        if($title == true){
            if($title->title !== '' || $title->title !== null){
                return $title->title;
            } else {
                return 'Grow your website with our SEO Tools & Project Management';
            }
        } else {
            return 'Grow your website with our SEO Tools & Project Management';
        }
    }

    public function AboutBody()
    {
        $body = self::select('body')->where('parent_id', 4)->where('children_id', 2)->where('active', true)->first();
        if($body == true){
            if($body->body !== '' || $body->body !== null){
                return $body->body;
            } else {
                return 'You can browse free HTML templates on Too CSS website. Visit the website and explore latest website templates for your projects.';
            }
        } else {
            return 'You can browse free HTML templates on Too CSS website. Visit the website and explore latest website templates for your projects.';
        }
    }

    public function AboutValue()
    {
        $data = self::select(['title', 'body', 'image'])->where('parent_id', 4)->where('children_id', 3)->where('active', true)->first();
        if($data == true){
            if($data !== '' || $data !== null){
                return $data;
            } else {
                $datas = [
                    "title" => 199,
                    "body" => 100,
                    "image" => 499
                ];
                return $datas;
            }
        } else {
            $datas = [
                "title" => 199,
                "body" => 100,
                "image" => 499
            ];
            return $datas;
        }
    }

    public function PortfolioTitle()
    {
        $title = self::select('title')->where('parent_id', 5)->where('children_id', 1)->where('active', true)->first();
        if($title == true){
            if($title->title !== '' || $title->title !== null){
                return $title->title;
            } else {
                return 'Our Recent Projects & Case Studies for Clients Our Portfolio';
            }
        } else {
            return 'Our Recent Projects & Case Studies for Clients Our Portfolio';
        }
    }

    public function ProjectTitle()
    {
        $title = self::select('title')->where('parent_id', 6)->where('children_id', 1)->where('active', true)->first();
        if($title == true){
            if($title->title !== '' || $title->title !== null){
                return $title->title;
            } else {
                return 'Select a suitable plan for your next projects Our Plans';
            }
        } else {
            return 'Select a suitable plan for your next projects Our Plans';
        }
    }

    public function ContactTitle()
    {
        $title = self::select('title')->where('parent_id', 7)->where('children_id', 1)->where('active', true)->first();
        if($title == true){
            if($title->title !== '' || $title->title !== null){
                return $title->title;
            } else {
                return 'Feel free to Contact us via the HTML form';
            }
        } else {
            return 'Feel free to Contact us via the HTML form';
        }
    }
}
