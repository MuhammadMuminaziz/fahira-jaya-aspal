<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Gallery;
use Illuminate\Http\Request;

class AspalController extends Controller
{
    public function index()
    {
        return view('aspal.index', [
            'blogs' => Blog::with('job')->where('job_id', 1)->latest()->paginate(10),
            'aspalPhoto' => Gallery::with('job')->where('job_id', 1)->latest()->paginate(10)
        ]);
    }
}
