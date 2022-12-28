<?php

namespace App\Http\Controllers;

use App\Models\{Views,Item};
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
        if($request->oldImage){
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
        if($request->old_title !== $validatedData['title']){
            Views::where('parent_id', $validatedData['parent_id'])->where('children_id', $validatedData['children_id'])->update(['active' => false]);
            Views::create($validatedData);
        };

        return back()->with('success', 'Services Title Berasil diperbarui!');
    }

    public function About()
    {
        $iconselected = Views::AboutIcon();
        $icondataproject =  Item::Icons();
        foreach ($icondataproject as $key) {
            $selected = ($iconselected['title'] == $key['href']) ? "selected" : '';
            $dataproject[] = array(
                "text" => $key['title'],
                "value" => $key['body'],
                "imageSrc" => asset('assets') . '/' . $key['href'],
                $selected => $key['title']
            );
        }
        $iconsproject = json_encode($dataproject);

        $icondataclient =  Item::Icons();
        foreach ($icondataclient as $key) {
            $selected = ($iconselected['body'] == $key['href']) ? "selected" : '';
            $dataclient[] = array(
                "text" => $key['title'],
                "value" => $key['body'],
                "imageSrc" => asset('assets') . '/' . $key['href'],
                $selected => $key['title']
            );
        }
        $iconsclient = json_encode($dataclient);

        $icondatapendiri =  Item::Icons();
        foreach ($icondatapendiri as $key) {
            $selected = ($iconselected['image'] == $key['href']) ? "selected" : '';
            $datapendiri[] = array(
                "text" => $key['title'],
                "value" => $key['body'],
                "imageSrc" => asset('assets') . '/' . $key['href'],
                $selected => $key['title']
            );
        }
        $iconspendiri = json_encode($datapendiri);

        return view('dashboard.views.about', [
            'title' => 'Dashboard - About',
            'aboutimg' => Views::AboutImg(),
            'abouttitle' => Views::AboutTitle(),
            'aboutbody' => Views::AboutBody(),
            'aboutvalue' => Views::AboutValue(),
            'projecticon' => $iconsproject,
            'clienticon' => $iconsclient,
            'pendiriicon' => $iconspendiri

        ]);
    }

    public function AboutImage(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|file|max:2048'
        ]);

        $validatedData['parent_id'] = 4;
        $validatedData['children_id'] = 1;
        if($request->oldImage){
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
        if($validatedData['title'] != null && $validatedData['body'] != null){
            $data['title'] = ($validatedData['title'] !== null || $validatedData['title'] !== '') ? $validatedData['title'] : Views::AboutTitle();
            $data['body'] = ($validatedData['body'] !== null || $validatedData['body'] !== '') ? $validatedData['body'] : Views::AboutBody();
            $data['parent_id'] = 4;
            $data['children_id'] = 2;
            Views::where('parent_id', $data['parent_id'])->where('children_id', $data['children_id'])->update(['active' => false]);
            Views::create($data);
        }

        return back()->with('success', 'About Text Berasil diperbarui!');
    }

    public function AboutRelationshipIcon(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'image' => 'required'
        ]);

        $same = Views::AboutIcon();
        if($validatedData['title'] != $same['title'] && $validatedData['body'] != $same['body'] && $validatedData['image'] != $same['image']){
            $data['title'] = ($validatedData['title'] != $same['title'] ) ? $validatedData['title'] : $same['title'];
            $data['body'] = ($validatedData['body'] != $same['body']) ? $validatedData['body'] : $same['body'];
            $data['image'] = ($validatedData['image'] != $same['image']) ? $validatedData['image'] : $same['image'];
            $data['parent_id'] = 4;
            $data['children_id'] = 3;
            Views::where('parent_id', $data['parent_id'])->where('children_id', $data['children_id'])->update(['active' => false]);
            Views::create($data);
        }

        return back()->with('success', 'About Relationship Icon Berasil diperbarui!');
    }

    public function AboutRelationship(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'image' => 'required'
        ]);
        
        $same = Views::AboutValue();
        if($validatedData['title'] != $same['title'] && $validatedData['body'] != $same['body'] && $validatedData['image'] != $same['image']){
            $data['title'] = ($validatedData['title'] != $same['title'] ) ? $validatedData['title'] : $same['title'];
            $data['body'] = ($validatedData['body'] != $same['body']) ? $validatedData['body'] : $same['body'];
            $data['image'] = ($validatedData['image'] != $same['image']) ? $validatedData['image'] : $same['image'];
            $data['parent_id'] = 4;
            $data['children_id'] = 4;
            Views::where('parent_id', $data['parent_id'])->where('children_id', $data['children_id'])->update(['active' => false]);
            Views::create($data);
        }

        return back()->with('success', 'About Relationship Value Berasil diperbarui!');
    }

    public function Project()
    {
        return view('dashboard.views.project', [
            'title' => 'Dashboard - Project',
            'projecttitle' => Views::ProjectTitle(),
            'items' => Item::ProjectItem()
        ]);
    }

    public function ProjectTitle(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required'
        ]);

        $validatedData['parent_id'] = 5;
        $validatedData['children_id'] = 1;
        if($request->old_title !== $validatedData['title']){
            Views::where('parent_id', $validatedData['parent_id'])->where('children_id', $validatedData['children_id'])->update(['active' => false]);
            Views::create($validatedData);
        };

        return back()->with('success', 'Project Title Berasil diperbarui!');
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

        $validatedData['parent_id'] = 6;
        $validatedData['children_id'] = 1;
        if($request->old_title !== $validatedData['title']){
            Views::where('parent_id', $validatedData['parent_id'])->where('children_id', $validatedData['children_id'])->update(['active' => false]);
            Views::create($validatedData);
        };

        return back()->with('success', 'Project Title Berasil diperbarui!');
    }

    public function Footer()
    {
        return view('dashboard.views.footer', [
            'title' => 'Dashboard - Footer',
            'footer' => Item::Footer()
        ]);
    }
}
