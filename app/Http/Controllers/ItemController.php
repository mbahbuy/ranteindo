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

    public function VideosItem(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|min:5|max:255',
            'body' => 'nullable|max:255',
            'image' => 'image|file|max:2048',
            'href' => 'required|min:5|max:255'
        ]);

        $validatedData['parent_id'] = 4;
        $validatedData['children_id'] = 1;
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('videos-img');
        };
        Item::create($validatedData);

        return back()->with('success', 'Videos item telah ditambahkan');
    }

    public function VideosItemDlt(Request $request, Item $item)
    {
        if ($item->image) {
            Storage::delete($item->image);
        };
        $item->delete();
        return back()->with('success', 'Videos item telah dihapus');
    }

    public function ManagerItem(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|min:5|max:255',
            'body' => 'required|max:255',
            'image' => 'image|file|max:2048',
        ]);

        $validatedData['parent_id'] = 5;
        $validatedData['children_id'] = 1;
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('manager-img');
        };
        Item::create($validatedData);

        return back()->with('success', 'Manager item telah ditambahkan');
    }

    public function ManagerItemDlt(Request $request, Item $item)
    {
        if ($item->image) {
            Storage::delete($item->image);
        };
        $item->delete();
        return back()->with('success', 'Manager item telah dihapus');
    }

    public function ContactInfoEmail(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|min:5|max:255'
        ]);

        $data['body'] = $validatedData['email'];
        $data['parent_id'] = 6;
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
        $data['parent_id'] = 6;
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

        $validatedData['parent_id'] = 7;
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
