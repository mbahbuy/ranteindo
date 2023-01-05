<?php

namespace App\Http\Controllers;

use App\Models\{Views,Item};
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
            'project' => Item::ProjectItem(),
            'contactemail' => Item::ContactInfoEmail(),
            'contacttlp' => Item::ContactInfoTlp(),
            'footer' => Item::Footer()
        ]);
    }
}
