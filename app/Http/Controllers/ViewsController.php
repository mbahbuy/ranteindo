<?php

namespace App\Http\Controllers;

use App\Models\Views;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ViewsController extends Controller
{
    public function Logo()
    {
        return view('dashboard.views.logo', [
            'title' => 'Dashboard - Logo',
            'logo' => Views::logo()
        ]);
    }

    public function LogoUpdate(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|file|max:2048'
        ]);

        $validatedData['parent_id'] = 1;
        $validatedData['children_id'] = 1;
        if($request->oldImage){
            Storage::delete($request->oldImage);
        };
        $validatedData['image'] = $request->file('image')->store('main');

        Views::where('parent_id', $validatedData['parent_id'])->where('children_id', $validatedData['children_id'])->update(['active' => false]);
        Views::create($validatedData);

        return redirect('/dashboard')->with('success', 'Logo Berasil diperbarui!');
    }

    public function Top()
    {
        return view('dashboard.views.top', [
            'title' => 'Dashboard - Home',
            'main' => Views::TopImg()
        ]);
    }

    public function TopImage(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|file|max:2048'
        ]);

        $validatedData['parent_id'] = 2;
        $validatedData['children_id'] = 1;
        if($request->oldImage){
            Storage::delete($request->oldImage);
        };
        $validatedData['image'] = $request->file('image')->store('main');

        Views::where('parent_id', $validatedData['parent_id'])->where('children_id', $validatedData['children_id'])->update(['active' => false]);
        Views::create($validatedData);

        return redirect('/dashboard')->with('success', 'Main banner Berasil diperbarui!');
    }

    public function Services()
    {
        return view('dashboard.views.services', [
            'title' => 'Dashboard - Services'
        ]);
    }

    public function About()
    {
        return view('dashboard.views.about', [
            'title' => 'Dashboard - About'
        ]);
    }

    public function Project()
    {
        return view('dashboard.views.project', [
            'title' => 'Dashboard - Project'
        ]);
    }

    public function Contact()
    {
        return view('dashboard.views.contact', [
            'title' => 'Dashboard - Contact'
        ]);
    }

    public function Footer()
    {
        return view('dashboard.views.footer', [
            'title' => 'Dashboard - Footer'
        ]);
    }
}
