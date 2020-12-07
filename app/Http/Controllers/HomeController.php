<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $news = News::count();
        $category = Category::count();
        return view('admin.home', compact('news', 'category'));
    }
    public function admin()
    {
        return redirect('admin/home');
    }
}
