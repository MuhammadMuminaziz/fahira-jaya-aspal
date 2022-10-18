<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Gallery;
use Illuminate\Http\Request;

class PavingController extends Controller
{
    public function index()
    {
        return view('paving.index', [
            'blogs' => Blog::with('job')->where('job_id', 2)->latest()->paginate(10),
            'blockPhoto' => Gallery::with('job')->where('job_id', 2)->latest()->paginate(10)
        ]);
    }
}
