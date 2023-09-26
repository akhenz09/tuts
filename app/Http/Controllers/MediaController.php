<?php

namespace App\Http\Controllers;

use App\Models\Audiopodcast;
use App\Models\Videopodcast;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function index()
    {
        $videos = Videopodcast::all();
        $audios = Audiopodcast::all();
        return view('admin.Podcast.index', compact('videos', 'audios'));
    }

    public function videocreate()
    {
        return view('admin.Podcast.videopodcast.create');
    }

    public function audiocreate()
    {
        return view('admin.landingpages.create');
    }

    public function videostore(Request $request)
{
    $data = $request->validate([
        'title' => 'required',
        'description' => 'nullable',
    ]);


    // Generate a unique filename for the uploaded image
    $videoName = uniqid() . '.' . $request->file('video')->getClientOriginalExtension();

    // Specify the custom storage path (e.g., 'public/custom_path')
    $storagePath = 'video';

    // Store the image in the custom path
    $request->file('video')->storeAs($storagePath, $videoName);

    // Save the image path in your database
    $data['video'] = $storagePath . '/' . $videoName;

    $newVideopodcast = Videopodcast::create($data);

    return redirect(route('landingpages.index'));

}

    public function audiostore(Request $request)
{
    $data = $request->validate([
        'title' => 'required',
        'description' => 'nullable',
        'file' => 'required|file|mimes:jpeg,jpg,png,gif|max:5048',
        'audio' =>'nullable|file|mimes:audio/mpeg,mpga,mp3,wav,aac'
    ]);


    // Generate a unique filename for the uploaded image
    $audioName = uniqid() . '.' . $request->file('audio')->getClientOriginalExtension();

    // Specify the custom storage path (e.g., 'public/custom_path')
    $storagePath = 'audio';

    // Store the image in the custom path
    $request->file('audio')->storeAs($storagePath, $audioName);

    // Save the image path in your database
    $data['audio'] = $storagePath . '/' . $audioName;

    $newAudiopodcast = Audiopodcast::create($data);

    return redirect(route('landingpages.index'));
}

}
