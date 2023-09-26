<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\Models\UserArchetype;

class ContactController extends Controller
{
    public function showForm()
    {
        // return view('contact');
        $user = auth()->user();
        $access_level = json_decode($user->access_level);
        $user_archetype = UserArchetype::where('email', $user->email)->orderBy('id', 'DESC')->first();
        
        $archetype = $user_archetype->archetype;
        return view('dashboard.avatar.contact', ["title"=>"Contact Us", "user" => $user]);
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Mail::to('support@wealthavatar.net')->send(new ContactFormMail($request->all()));
        Mail::to('support@wealthavatar.net')->send(new ContactFormMail($request->input('name'), $request->input('email'), $request->input('message')));

        return redirect()->route('dashboard.avatar.contact')->with('success', 'Message sent successfully!');
    }
}
