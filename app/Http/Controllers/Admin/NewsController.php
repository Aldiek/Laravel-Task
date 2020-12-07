<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newss = News::get();
        return view('admin.pages.news.news', compact('newss'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();

        return view('admin.pages.news.add', compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $fileName = time() . '_' . $request->photo->getClientOriginalName();
        $filePath = $request->file('photo')->storeAs('img', $fileName, 'news');
        News::create([
            'photo' => $filePath,
            'name' => $request->name,
            'category' => $request->category,
            'content' => $request->content,
        ]);
        return redirect('admin/news');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = News::find($id);
        return view('admin.pages.news.show', compact('news'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::find($id);
        $categories = Category::get();

        return view('admin.pages.news.edit', compact('categories', 'news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fileName = time() . '_' . $request->photo->getClientOriginalName();
        $filePath = $request->file('photo')->storeAs('uploads', $fileName, 'public');

        $fileName = time() . '_' . $request->photo->getClientOriginalName();
        $filePath = $request->file('photo')->storeAs('uploads', $fileName, 'public');
        News::where('id', $id)->update([
            'photo' => '/storage/' . $filePath,
            'name' => $request->name,
            'category' => $request->category,
            'content' => $request->content,
        ]);
        return redirect('admin/news');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        News::find($id)->delete();
        return redirect()->back();
    }
}
