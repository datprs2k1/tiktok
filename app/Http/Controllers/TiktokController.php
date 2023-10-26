<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TiktokController extends Controller
{
    public function create(Request $request)
    {
        $video = $request->file('video');
    }
}
