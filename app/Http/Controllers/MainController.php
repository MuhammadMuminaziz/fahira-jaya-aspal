<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class MainController extends Controller
{
    public function index()
    {
        return view('index', [
            'comments' => Comment::latest()->paginate(10),
            'blogs' => Blog::with('job')->latest()->paginate(10),
            'allPhoto' => Gallery::with('job')->latest()->paginate(10),
            'aspalPhoto' => Gallery::with('job')->where('job_id', 1)->latest()->paginate(10),
            'blockPhoto' => Gallery::with('job')->where('job_id', 2)->latest()->paginate(10)
        ]);
    }

    public function comment()
    {
        return view('dashboard.index', [
            'title' => 'Comment',
            'photo' => 'Photo',
            'nama' => 'Nama',
            'komentar' => 'Komentar',
            'comments' => Comment::all()
        ]);
    }

    public function addComment(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'min:3',
            'comment' => 'required',
            'photo' => 'image|file|max:2048'
        ]);

        if ($request->file('photo')) {
            $name = date('Ymdhis') . '.' . $request->file('photo')->getClientOriginalExtension();
            $validateData['photo'] = $name;
            $request->file('photo')->move('img/comment', $name);
        } else {
            $validateData['photo'] = 'default.png';
        }

        Comment::create($validateData);
        return redirect('/');
    }

    public function deleteComment(Comment $comment)
    {
        $path = public_path('/img/comment/') . $comment->photo;
        if ($comment->photo != 'default.png') {
            if (file_exists($path)) {
                @unlink($path);
            }
        }
        Comment::destroy($comment->id);
        return redirect('/comment')->with('success', 'New Comment has been deleted!');
    }

    public function blogs()
    {
        return view('blogs.index', [
            'blog' => Blog::latest()->paginate(12)->withQueryString()
        ]);
    }

    public function blog(Blog $blog)
    {
        return view('blogs.blog', [
            'blog' => $blog
        ]);
    }
}
