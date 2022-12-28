<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'title' => 'Dashboard',
            'home' => Item::TopItem(),
            'services' => Item::ServicesItem(),
            'project' => Item::ProjectItem(),
            'contactemail' => Item::ContactInfoEmail(),
            'contacttlp' => Item::ContactInfoTlp(),
            'footer' => Item::Footer()
        ]);
    }
}
