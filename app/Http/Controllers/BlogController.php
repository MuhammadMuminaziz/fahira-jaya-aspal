<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.blog.blog', [
            'title' => 'Blogs',
            'photo' => 'Photo',
            'judul' => 'Judul',
            'type' => 'Type',
            'blogs' => Blog::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.blog.create', [
            'title' => 'Tambah Blog',
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
            'title' => 'required',
            'body' => 'required',
            'photo' => 'image|file|max:2048'
        ]);
        $name = date('Ymdhis') . '.' . $request->file('photo')->getClientOriginalExtension();
        $validateData['photo'] = $name;
        $request->file('photo')->move('img/blog', $name);
        $validateData['slug'] = strtolower(implode('-', explode(' ', $request->title)));
        $validateData['excerpt'] = Str::limit(strip_tags($request->body), 100, '...');
        Blog::create($validateData);
        return redirect('/blog')->with('success', 'New Blog has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('dashboard.blog.show', [
            'title' => 'Blog',
            'blog' => $blog
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('dashboard.blog.edit', [
            'title' => 'Edit Blog',
            'jobs' => Job::all(),
            'blog' => $blog
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $validateData = $request->validate([
            'job_id' => 'required',
            'title' => 'required',
            'body' => 'required',
            'photo' => 'image|file|max:2048'
        ]);

        if ($request->photo) {
            $name = date('Ymdhis') . '.' . $request->file('photo')->getClientOriginalExtension();
            $validateData['photo'] = $name;
            $path = public_path('/img/blog/') . $blog->photo;
            @unlink($path);
            $request->file('photo')->move('img/blog', $name);
        } else {
            $validateData['photo'] = $blog->photo;
        }
        $validateData['slug'] = strtolower(implode('-', explode(' ', $request->title)));
        $validateData['excerpt'] = Str::limit(strip_tags($request->body), 100, '...');
        Blog::where('id', $blog->id)->update($validateData);
        return redirect('/blog')->with('success', 'a Blog has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $path = public_path('/img/blog/') . $blog->photo;
        @unlink($path);
        Blog::destroy($blog->id);
        return redirect('/blog')->with('delete', 'Blog has been deleted!');
    }
}
