<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index', [
            'title' => 'Home',
            'home' => Item::TopItem(),
            'services' => Item::ServicesItem(),
            'project' => Item::ProjectItem(),
            'contactemail' => Item::ContactInfoEmail(),
            'contacttlp' => Item::ContactInfoTlp(),
            'footer' => Item::Footer()
        ]);
    }
}
