<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // About elements
        $about_item = About::first();
        return view('back.abouts.index', compact('about_item'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.abouts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Image validation
        $request->validate([
            'title' => 'min:3',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);


        $abouts = new About;
        $abouts->title = $request->title;
        $abouts->description = $request->description;

        if ($request->hasfile('image')) {

            $imageName = Str::slug($request->title) . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'), $imageName);
            $abouts->image = 'uploads/' . $imageName;
        }
//        dd($abouts->image);
        $abouts->save();
        notify()->success('Successful Addition!');
        return redirect()->route('adminabouts.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $about_item = About::first();
//        dd($about_item);
        return view('back.abouts.update', compact('about_item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "update calishti";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
