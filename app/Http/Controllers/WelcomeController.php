<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = blog::latest()->limit(2)->get();
        // dd($blogs);
        return view('welcome',compact('blogs'));
        
    }

}