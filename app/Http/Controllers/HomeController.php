<?php

namespace App\Http\Controllers;

use App\Models\{Views,Item, Post};
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $aboutvalue = Views::AboutValue();
        return view('home.index', [
            'title' => 'Masa Depan Manufaktur Indonesia',
            'home' => Item::TopItem(),
            'services' => Item::ServicesItem(),
            'aboutprojectvalue' => $aboutvalue['title'],
            'aboutclientvalue' => $aboutvalue['body'],
            'aboutprojectberjalanvalue' => $aboutvalue['image'],
            'portfolio' => Post::PortfolioPosts(),
            'project' => Post::ProjectPosts(),
            'videos' => Item::VideosItem(),
            'contactemail' => Item::ContactInfoEmail(),
            'contacttlp' => Item::ContactInfoTlp(),
            'footer' => Item::Footer()
        ]);
    }

    public function Project()
    {
        return view('home.project', [
            'title' => 'Project',
            'switch' => '',
            'project' => Post::ProjectPosts(),
            'services' => Item::ServicesItem(),
            'portfolio' => Post::PortfolioPosts(),
            'footer' => Item::Footer()
        ]);
    }

    public function ProjectPost(Post $post)
    {
        return view('home.project', [
            'title' => $post->title,
            'switch' => 'post',
            'post' => $post,
            'services' => Item::ServicesItem(),
            'portfolio' => Post::PortfolioPosts(),
            'footer' => Item::Footer()
        ]);
    }

    public function ProjectContoh()
    {
        return view('home.project', [
            'title' => 'Project',
            'switch' => 'contoh',
            'services' => Item::ServicesItem(),
            'portfolio' => Post::PortfolioPosts(),
            'footer' => Item::Footer()
        ]);
    }

    public function Portfolio()
    {
        return view('home.portfolio', [
            'title' => 'Portfolio',
            'switch' => '',
            'services' => Item::ServicesItem(),
            'portfolio' => Post::PortfolioPosts(),
            'footer' => Item::Footer()
        ]);
    }

    public function PortfolioPost(Post $post)
    {
        return view('home.portfolio', [
            'title' => $post->title,
            'switch' => 'post',
            'post' => $post,
            'services' => Item::ServicesItem(),
            'portfolio' => Post::PortfolioPosts(),
            'footer' => Item::Footer()
        ]);
    }

    public function PortfolioContoh()
    {
        return view('home.portfolio', [
            'title' => 'Portfolio',
            'switch' => 'contoh',
            'services' => Item::ServicesItem(),
            'portfolio' => Post::PortfolioPosts(),
            'footer' => Item::Footer()
        ]);
    }

    public function Videos()
    {
        return view('home.videos', [
            'title' => 'Videos',
            'videos' => Item::VideosItem(),
            'services' => Item::ServicesItem(),
            'portfolio' => Post::PortfolioPosts(),
            'footer' => Item::Footer()
        ]);
    }

}
