<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.gallery.gallery', [
            'title' => 'Galleries',
            'photo' => 'Photo',
            'type' => 'Type',
            'note' => 'Catatan',
            'galleries' => Gallery::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.gallery.create', [
            'title' => 'Tambah Photo',
            'jobs' => Job::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'job_id' => 'required',
            'note' => 'required',
            'name' => 'image|file|max:2048'
        ]);
        $name = date('Ymdhis') . '.' . $request->file('name')->getClientOriginalExtension();
        $validateData['name'] = $name;
        $request->file('name')->move('img/gallery', $name);
        Gallery::create($validateData);
        return redirect('/gallery')->with('success', 'New Photo has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(gallery $gallery)
    {
        return view('dashboard.gallery.show', [
            'title' => 'Gallery',
            'gallery' => $gallery
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(gallery $gallery)
    {
        return view('dashboard.gallery.edit', [
            'title' => 'Edit photo',
            'gallery' => $gallery,
            'jobs' => Job::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, gallery $gallery)
    {
        $validateData = $request->validate([
            'job_id' => 'required',
            'note' => 'required',
            'name' => 'image|file|max:1024'
        ]);
        if ($request->name) {
            $name = date('Ymdhis') . '.' . $request->file('name')->getClientOriginalExtension();
            $validateData['name'] = $name;
            $path = public_path('/img/gallery/') . $gallery->name;
            @unlink($path);
            $request->file('name')->move('img/gallery', $name);
        } else {
            $validateData['name'] = $gallery->name;
        }
        Gallery::where('id', $gallery->id)->update($validateData);
        return redirect('/gallery')->with('success', 'New Photo has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(gallery $gallery)
    {
        $path = public_path('/img/gallery/') . $gallery->name;
        @unlink($path);
        Gallery::destroy($gallery->id);
        return redirect('/gallery')->with('delete', 'Photo has been deleted!');
    }
}
