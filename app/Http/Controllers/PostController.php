<?php

namespace App\Http\Controllers;

use App\Models\{Post};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Storage,File};
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
        $this->validate($request , [
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'image' => 'required|mimes:jpg,jpeg,png|max:2048',
            "files" => "mimes:pdf|max:2048",
            'body' => 'required',
            'href' => 'nullable'
        ]);

        if($request->file('image'))
        {
            $img = $request->file('image');
            $nameimg = Str::random() . '.' . $img->getClientOriginalExtension();
            $img->move('assets/portfolio-img', $nameimg);
        } else {
            $nameimg = '';
        }

        if($request->file('files'))
        {
            $doc = $request->file('files');
            $namedoc = $doc->getClientOriginalName();
            $doc->move('assets/portfolio-file', $namedoc);
        } else {
            $namedoc = '';
        }

        $data = new Post();
        $data->parent_id = 1;
        $data->children_id = 1;
        $data->title = $request->title;
        $data->slug = $request->slug;
        $data->image = "portfolio-img/" . $nameimg;
        $data->files = "portfolio-file/" . $namedoc;
        $data->body = $request->body;
        $data->excerpt = Str::limit(strip_tags($request->body), 50);
        $data->href = $request->href;
        $data->save();

        return back()->with('success', 'Portfolio post telah ditambahkan');
    }

    public function PortfolioPostDlt(Request $request, Post $post)
    {
        if($post->image){
            Storage::delete("assets/" . $post->image);
        };
        if($post->files){
            Storage::delete("assets/" . $post->files);
        }
        $post->delete();
        return back()->with('success', 'Portfolio post telah dihapus');
    }

    public function ProjectPost(Request $request)
    {
        $this->validate($request , [
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'image' => 'required|mimes:jpg,jpeg,png|max:2048',
            "files" => "mimes:pdf|max:2048",
            'body' => 'required',
            'href' => 'nullable'
        ]);

        if($request->file('image'))
        {
            $img = $request->file('image');
            $nameimg = Str::random() . '.' . $img->getClientOriginalExtension();
            $img->move('assets/project-img', $nameimg);
        } else {
            $nameimg = '';
        }

        if($request->file('files'))
        {
            $doc = $request->file('files');
            $namedoc = $doc->getClientOriginalName();
            $doc->move('assets/project-file', $namedoc);
        } else {
            $namedoc = '';
        }

        $data = new Post();
        $data->parent_id = 2;
        $data->children_id = 1;
        $data->title = $request->title;
        $data->slug = $request->slug;
        $data->image = "project-img/" . $nameimg;
        $data->files = "project-file/" . $namedoc;
        $data->body = $request->body;
        $data->excerpt = Str::limit(strip_tags($request->body), 50);
        $data->href = $request->href;
        $data->save();

        return back()->with('success', 'Produk post telah ditambahkan');
    }

    public function ProjectPostDlt(Request $request, Post $post)
    {
        if($post->image){
            Storage::delete("assets/" . $post->image);
        };
        if($post->files){
            Storage::delete("assets/" . $post->files);
        }
        $post->delete();
        return back()->with('success', 'Portfolio post telah dihapus');
    }
}
