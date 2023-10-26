<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Landingpage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LandingPageController extends Controller
{

    public function show($page)
    {

        switch ($page) {
            case 'contact':
                return view('landingpage.contact');
            case 'product':
                return view('landingpage.programs');
            case 'about':
                return view('landingpage.about');
            case 'login':
                    return view('auth.login');
            case 'register':
                    return view('auth.register');
            default:
                return view('landingpage.home');
        }
    }


    public function create()
    {
        return view('admin.landingpages.create');
    }

    public function store(Request $request)
{
    $data = $request->validate([
        'name' => 'required',
        'title' => 'required',
        'review' => 'required',
        'description' => 'nullable',
        'price' => 'required|numeric|between:0,999999.99',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5048',
    ]);

    // Generate a unique filename for the uploaded image
    $imageName = uniqid() . '.' . $request->file('image')->getClientOriginalExtension();

    // Specify the custom storage path (e.g., 'public/custom_path')
    $storagePath = 'image';

    // Store the image in the custom path
    $request->file('image')->storeAs($storagePath, $imageName);

    // Save the image path in your database
    $data['image'] = $storagePath . '/' . $imageName;

    $newLandingpage = Landingpage::create($data);

    return redirect(route('landingpages.index'));
}

//Tutor

    public function teamcreate()
    {
        return view('admin.teams.create');
    }

    public function teamstore(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'title' => 'required',
            'description' => 'nullable',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5048',
        ]);

        $imageName = uniqid() . '.' . $request->file('image')->getClientOriginalExtension();
        $storagePath = 'image';
        $request->file('image')->storeAs($storagePath, $imageName);
        $data['image'] = $storagePath . '/' . $imageName;

        $newTeam = Team::create($data);

        return redirect()->route('landingpages.index');
    }


}
