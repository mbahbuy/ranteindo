<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use App\Mail\{ContactMail, ContactSubMail, SubscriberMail};

class Contact extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public static function boot() {
        parent::boot();
        static::created(function ($item) {
            if($item->parent_id == 1)
            {
                $adminEmail = 'mbahbagonk@gmail.com';
                Mail::to($adminEmail)->send(new ContactMail($item));
                Mail::to($item->email)->send(new ContactSubMail($item));
            } else {
                Mail::to($item->email)->send(new SubscriberMail($item));
            }
        });
    }
}