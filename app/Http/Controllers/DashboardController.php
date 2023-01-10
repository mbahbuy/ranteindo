<?php

namespace App\Http\Controllers;

use App\Models\{Views,Item,Post};
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $aboutvalue = Views::AboutValue();
        return view('dashboard.index', [
            'title' => 'Dashboard',
            'home' => Item::TopItem(),
            'services' => Item::ServicesItem(),
            'aboutprojectvalue' => $aboutvalue['title'],
            'aboutclientvalue' => $aboutvalue['body'],
            'aboutprojectberjalanvalue' => $aboutvalue['image'],
            'portfolio' => Post::PortfolioPosts(),
            'project' => Post::ProjectPosts(),
            'videos' => Item::VideosItem(),
            'contactemail' => Item::ContactInfoEmail(),
            'contacttlp' => Item::ContactInfoTlp(),
            'footer' => Item::Footer()
        ]);
    }
}
