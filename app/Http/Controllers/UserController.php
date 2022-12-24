<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\{Hash,Auth};
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function password(Request $request)
    {
        $validatedData = $request->validate([
            'old_password' => 'required|min:6|max:255',
            'new_password' => 'required|min:6|same:password_confirmation|different:old_password',
            'password_confirmation' => 'required|min:6|same:new_password'
        ]);

        if(!Hash::check($validatedData['old_password'], Auth::user()->password))
        {
            return back()->withPasswordStatus(__('confirm your password first!'));
        }

        Auth::user()->update(['password' => Hash::make($validatedData['new_password'])]);

        return back()->withPasswordStatus(__('Password successfully updated.'));
    }
}
