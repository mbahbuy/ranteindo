<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{

    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);
        $request['parent_id'] = 1;

        Contact::create($request->all());

        return back()->with(['success' => 'Terimakasih atas pesan yang telah anda kirimkan!!!']);
    }

    public function subscribe(Request $request)
    {
        $request->validate(['email' => 'required|email']);
        $request['parent_id'] = 2;

        Contact::create($request->all());

        return back()->with(['success' => 'Terimakasih telah bergabung dengan kami!!!']);
    }

}