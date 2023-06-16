<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PrivateController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function getAudio($audio) {
        // return 231;

        $path = Storage::disk('private')->path('audios/'. $audio);

        if (!Storage::disk('private')->exists('audios/'. $audio)) {
            abort(404);
        }

        $headers = [
            'Content-Type' => 'audio/mpeg',
        ];

        return response()->file($path, $headers);
    }

}
