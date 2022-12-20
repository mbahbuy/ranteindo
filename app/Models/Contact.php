<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use App\Mail\{ContactMail, SubscriberMail};

class Contact extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public static function boot() {
        parent::boot();
        static::created(function ($item) {
            // $adminEmail = 'customer@ranteindo.com';
            $adminEmail = 'mbahbagonku@gmail.com';
            if($item->parent_id == 1)
            {
                Mail::to($adminEmail)->send(new ContactMail($item));
            } else {
                Mail::to($adminEmail)->send(new SubscriberMail($item));
            }
        });
    }
}