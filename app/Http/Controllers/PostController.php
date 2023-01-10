<?php

namespace App\Http\Controllers;

use App\Models\{Post};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class PostController extends Controller
{
    public function Slug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }

    public function PortfolioPost(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'image' => 'image|file|max:2048',
            'body' => 'required',
            'href' => 'nullable'
        ]);
        $validatedData['parent_id'] = 1;
        $validatedData['children_id'] = 1;
        if($request->file('image'))
        {
            $validatedData['image'] = $request->file('image')->store('posts-portfolio');
        };

        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 100);
        Post::create($validatedData);

        return back()->with('success', 'Portfolio post telah ditambahkan');
    }

    public function PortfolioPostDlt(Request $request, Post $post)
    {
        if($post->image){
            Storage::delete($post->image);
        };
        $post->delete();
        return back()->with('success', 'Portfolio post telah dihapus');
    }

    public function ProjectPost(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'image' => 'image|file|max:2048',
            'body' => 'required',
            'href' => 'nullable'
        ]);
        $validatedData['parent_id'] = 2;
        $validatedData['children_id'] = 1;
        if($request->file('image'))
        {
            $validatedData['image'] = $request->file('image')->store('posts-project');
        };

        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 100);
        Post::create($validatedData);

        return back()->with('success', 'Portfolio post telah ditambahkan');
    }

    public function ProjectPostDlt(Request $request, Post $post)
    {
        if($post->image){
            Storage::delete($post->image);
        };
        $post->delete();
        return back()->with('success', 'Portfolio post telah dihapus');
    }
}
