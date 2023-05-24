<?php

namespace App\Http\Controllers;

use App\Models\{Views, Item, Post};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Storage, Validator, Response};

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
        if ($request->oldImage) {
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
            'main' => Views::TopImg(),
            'sambutan' => Item::TopItem()
        ]);
    }

    public function TopImage(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|file|max:2048'
        ]);

        $validatedData['parent_id'] = 2;
        $validatedData['children_id'] = 1;
        if ($request->oldImage) {
            Storage::delete($request->oldImage);
        };
        $validatedData['image'] = $request->file('image')->store('main');

        Views::where('parent_id', $validatedData['parent_id'])->where('children_id', $validatedData['children_id'])->update(['active' => false]);
        Views::create($validatedData);

        return back()->with('success', 'Main banner Berasil diperbarui!');
    }

    public function Services()
    {
        $icondata =  Item::Icons();
        foreach ($icondata as $key) {
            $data[] = array(
                "text" => $key['title'],
                "value" => $key['body'],
                "imageSrc" => asset('assets') . '/' . $key['href']
            );
        }
        $icons = json_encode($data);
        return view('dashboard.views.services', [
            'title' => 'Dashboard - Services',
            'servicestitle' => Views::ServicesTitle(),
            'items' => Item::ServicesItem(),
            'icons' => $icons
        ]);
    }

    public function ServicesTitle(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required'
        ]);

        $validatedData['parent_id'] = 3;
        $validatedData['children_id'] = 1;
        if ($request->old_title !== $validatedData['title']) {
            Views::where('parent_id', $validatedData['parent_id'])->where('children_id', $validatedData['children_id'])->update(['active' => false]);
            Views::create($validatedData);
        };

        return back()->with('success', 'Services Title Berasil diperbarui!');
    }

    public function About()
    {
        return view('dashboard.views.about', [
            'title' => 'Dashboard - About',
            'aboutimg' => Views::AboutImg(),
            'abouttitle' => Views::AboutTitle(),
            'aboutbody' => Views::AboutBody(),
            'aboutvalue' => Views::AboutValue()
        ]);
    }

    public function AboutImage(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|file|max:2048'
        ]);

        $validatedData['parent_id'] = 4;
        $validatedData['children_id'] = 1;
        if ($request->oldImage) {
            Storage::delete($request->oldImage);
        };
        $validatedData['image'] = $request->file('image')->store('main');

        Views::where('parent_id', $validatedData['parent_id'])->where('children_id', $validatedData['children_id'])->update(['active' => false]);
        Views::create($validatedData);

        return back()->with('success', 'Main banner Berasil diperbarui!');
    }

    public function AboutText(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'nullable',
            'body' => 'nullable'
        ]);
        if ($validatedData['title'] != null && $validatedData['body'] != null) {
            $data['title'] = ($validatedData['title'] !== null || $validatedData['title'] !== '') ? $validatedData['title'] : Views::AboutTitle();
            $data['body'] = ($validatedData['body'] !== null || $validatedData['body'] !== '') ? $validatedData['body'] : Views::AboutBody();
            $data['parent_id'] = 4;
            $data['children_id'] = 2;
            Views::where('parent_id', $data['parent_id'])->where('children_id', $data['children_id'])->update(['active' => false]);
            Views::create($data);
        }

        return back()->with('success', 'About Text Berasil diperbarui!');
    }

    public function AboutRelationship(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'image' => 'required'
        ]);

        $same = Views::AboutValue();
        if ($validatedData['title'] != $same['title'] && $validatedData['body'] != $same['body'] && $validatedData['image'] != $same['image']) {
            $data['title'] = ($validatedData['title'] != $same['title']) ? $validatedData['title'] : $same['title'];
            $data['body'] = ($validatedData['body'] != $same['body']) ? $validatedData['body'] : $same['body'];
            $data['image'] = ($validatedData['image'] != $same['image']) ? $validatedData['image'] : $same['image'];
            $data['parent_id'] = 4;
            $data['children_id'] = 3;
            Views::where('parent_id', $data['parent_id'])->where('children_id', $data['children_id'])->update(['active' => false]);
            Views::create($data);
        }

        return back()->with('success', 'About Relationship Value Berasil diperbarui!');
    }

    public function Portfolio()
    {
        return view('dashboard.views.portfolio', [
            'title' => 'Dashboard - Portfolio',
            'portfoliotitle' => Views::PortfolioTitle(),
            'items' => Post::PortfolioPosts()
        ]);
    }

    public function PortfolioTitle(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required'
        ]);

        $validatedData['parent_id'] = 5;
        $validatedData['children_id'] = 1;
        if ($request->old_title !== $validatedData['title']) {
            Views::where('parent_id', $validatedData['parent_id'])->where('children_id', $validatedData['children_id'])->update(['active' => false]);
            Views::create($validatedData);
        };

        return back()->with('success', 'Portfolio Title Berasil diperbarui!');
    }

    public function Project()
    {
        return view('dashboard.views.project', [
            'title' => 'Dashboard - Produk',
            'projecttitle' => Views::ProjectTitle(),
            'items' => Post::ProjectPosts()
        ]);
    }

    public function ProjectTitle(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required'
        ]);

        $validatedData['parent_id'] = 6;
        $validatedData['children_id'] = 1;
        if ($request->old_title !== $validatedData['title']) {
            Views::where('parent_id', $validatedData['parent_id'])->where('children_id', $validatedData['children_id'])->update(['active' => false]);
            Views::create($validatedData);
        };

        return back()->with('success', 'Produk Title Berasil diperbarui!');
    }

    public function Videos()
    {
        return view('dashboard.views.videos', [
            'title' => 'Dashboard - Videos',
            'items' => Item::VideosItem()
        ]);
    }

    public function Manager()
    {
        return view('dashboard.views.manager', [
            'title' => 'Dashboard - Manager',
            'managertitle' => Views::ManagerTitle(),
            'items' => Item::ManagerItem()
        ]);
    }

    public function ManagerVisibility(Request $request)
    {
        $validatedData = $request->validate([
            'status' => 'required|numeric|in:1,0'
        ]);
        Views::where(['parent_id' => 7], ['children_id' => 1])->update(['active' => (int)$validatedData['status']]);
        if ($validatedData['status'] == 0) {
            return back()->with('success', 'Contact Manager disembunyikan!');
        }
        return back()->with('success', 'Contact Manager disematkan!');
    }

    public function ManagerTitle(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required'
        ]);

        $validatedData['parent_id'] = 7;
        $validatedData['children_id'] = 2;
        if ($request->old_title !== $validatedData['title']) {
            Views::where('parent_id', $validatedData['parent_id'])->where('children_id', $validatedData['children_id'])->update(['active' => false]);
            Views::create($validatedData);
        };

        return back()->with('success', 'Manager Title Berasil diperbarui!');
    }

    public function Contact()
    {
        return view('dashboard.views.contact', [
            'title' => 'Dashboard - Contact',
            'contacttitle' => Views::ContactTitle(),
            'email' => Item::ContactInfoEmail(),
            'tlp' => Item::ContactInfoTlp()
        ]);
    }

    public function ContactTitle(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required'
        ]);

        $validatedData['parent_id'] = 8;
        $validatedData['children_id'] = 1;
        if ($request->old_title !== $validatedData['title']) {
            Views::where('parent_id', $validatedData['parent_id'])->where('children_id', $validatedData['children_id'])->update(['active' => false]);
            Views::create($validatedData);
        };

        return back()->with('success', 'Contact Title Berasil diperbarui!');
    }

    public function Footer()
    {
        return view('dashboard.views.footer', [
            'title' => 'Dashboard - Footer',
            'footer' => Item::Footer()
        ]);
    }
}
