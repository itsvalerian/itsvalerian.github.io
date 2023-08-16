<?php

namespace App\Http\Controllers;

use App\News;
use App\Country;
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
        $news = News::latest()->get(); 
        return view('news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::get();
        return view('news.create', compact('countries'));

        // return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([ 
            'title'=>'required',
            'country_id'=>'required',  
            'content'=>'required', 
            ]);
        $news = News::create([ 
            'title' => $request->input('title'),
            'country_id' => $request->input('country_id'), 
            'content' => $request->input('content') 
        ]); 
        
        return redirect('/news')->with('success','Berita/Pengumuman telah disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        $countries = Country::get(); 
        
        return view('news.edit', compact('news', 'countries'));


        // return view('news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $request->validate([ 
            'title'=>'required',
            'country_id'=>'required',  
            'content'=>'required', 
            ]);
            
        $news = News::whereId($news->id)->update([ 
            'title' => $request->input('title'),
            'country_id' => $request->input('country_id'), 
            'content' => $request->input('content') 
        ]); 
        
        return redirect('/news')->with('success','Berita/Pengumuman telah diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $news = News::find($news->id); 
        $news->delete(); 
        
        return redirect('/news')->with('success','Berita/Pengumuman telah dihapus!');
    }
}
