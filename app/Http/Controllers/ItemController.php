<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ItemController extends Controller
{
    public function TopItem(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|min:5|max:255',
            'body' => 'nullable|max:255',
            'href' => 'required|min:5|max:255'
        ]);

        $validatedData['parent_id'] = 2;
        $validatedData['children_id'] = 1;
        Item::create($validatedData);

        return back()->with('success', 'Sambutan telah ditambahkan');
    }

    public function TopItemDlt(Request $request, Item $item)
    {
        $item->delete();
        return back()->with('success', 'Sambutan telah dihapus');
    }

    public function ServicesItem(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|min:5|max:255',
            'body' => 'nullable|max:255',
            'image' => 'required|min:5|max:255'
        ]);

        $validatedData['parent_id'] = 3;
        $validatedData['children_id'] = 1;
        Item::create($validatedData);

        return back()->with('success', 'Service item telah ditambahkan');
    }

    public function ServicesItemDlt(Request $request, Item $item)
    {
        $item->delete();
        return back()->with('success', 'Service item telah dihapus');
    }

    public function ProjectItem(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|min:5|max:255',
            'body' => 'nullable|max:255',
            'image' => 'required|image|file|max:2048',
            'href' => 'required|min:5|max:255'
        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('project');
        } else {
            $validatedData['image'] = null;
        }

        $validatedData['parent_id'] = 4;
        $validatedData['children_id'] = 1;
        Item::create($validatedData);

        return back()->with('success', 'Project item telah ditambahkan');
    }

    public function ProjectItemDlt(Request $request, Item $item)
    {
        Storage::delete($item->image);
        $item->delete();
        return back()->with('success', 'Project item telah dihapus');
    }

    public function ContactInfoEmail(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|min:5|max:255'
        ]);

        $data['body'] = $validatedData['email'];
        $data['parent_id'] = 5;
        $data['children_id'] = 1;
        Item::create($data);

        return back()->with('success', 'Service item telah ditambahkan');
    }

    public function ContactInfoTlp(Request $request)
    {
        $validatedData = $request->validate([
            'nomor' => 'required|min:5|max:255'
        ]);

        $data['body'] = $validatedData['nomor'];
        $data['parent_id'] = 5;
        $data['children_id'] = 2;
        Item::create($data);

        return back()->with('success', 'Service item telah ditambahkan');
    }

    public function ContactInfoEmailDlt(Request $request, Item $item)
    {
        $item->delete();
        return back()->with('success', 'Info Email telah dihapus');
    }

    public function ContactInfoTlpDlt(Request $request, Item $item)
    {
        $item->delete();
        return back()->with('success', 'Info Telephon telah dihapus');
    }

    public function FooterItem(Request $request)
    {
        $validatedData = $request->validate([
            'href' => 'required|min:5|max:255',
            'image' => 'required|min:5|max:255'
        ]);

        $validatedData['parent_id'] = 6;
        $validatedData['children_id'] = 1;
        Item::create($validatedData);

        return back()->with('success', 'Service item telah ditambahkan');
    }

    public function FooterItemDlt(Request $request, Item $item)
    {
        $item->delete();
        return back()->with('success', 'Footer telah dihapus');
    }
}
