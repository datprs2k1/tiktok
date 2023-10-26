<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TiktokController extends Controller
{
    public function create(Request $request)
    {
        $video = $request->file('video');
    }
    public function callback(Request $request)
    {
        Log::info($request);

        return response()->json("Ok");
    }
}
