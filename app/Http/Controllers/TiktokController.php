<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use ProtoneMedia\LaravelFFMpeg\FFMpeg\FFProbe;

class TiktokController extends Controller
{
    public function create(Request $request)
    {
        return $this->initPost($request);
    }

    public function initPost(Request $request)
    {
        $video = $request->file('video');
        $count = round($video->getSize() / 10000000);
        $ffprobe = FFProbe::create();
        $duration = $ffprobe->format($video->getContent())->get('duration');
        $duration = explode(".", $duration)[0];

        $title = $request->get('title');
        $privacyLevel = $request->get('privacy_level');
        $disableDuet = $request->get('disable_duet');
        $disableComment = $request->get('disable_comment');
        $disableStitch = $request->get('disable_stitch');

        return $duration;
    }
    public function callback(Request $request)
    {
        Log::info($request);

        return response()->json("Ok");
    }
}
