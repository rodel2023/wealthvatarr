<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ChangePasswordController extends Controller
{
    public function changePassword(Request $request)
    {
        $user = auth()->user(); // Get the currently authenticated user

    // Validate the request data
    $request->validate([
        'old_password' => 'required',
        'password' => 'required|confirmed|min:8',
    ]);

    // Check if the old password matches the user's current password
    if (!Hash::check($request->old_password, $user->password)) {
        return redirect()->back()->withErrors(['old_password' => 'The provided old password is incorrect.']);
    }

    // Update the user's password
    $user->update([
        'password' => bcrypt($request->password),
    ]);


    // Flash a success message
    Session::flash('success', 'Password changed successfully.');

    return redirect()->back();
    }
}
