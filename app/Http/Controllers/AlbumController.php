<?php

namespace App\Http\Controllers;

use App\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = Album::latest()->get();

        return view('album.index', compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $album = new Album();

        return view('album.create', compact('album'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $album = Album::create($this->requestValidation());

        $this->storeImage($album);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function show(Album $album)
    {
        return view('album.show', compact('album'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function edit(Album $album)
    {
        return view('album.edit', compact('album'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Album $album)
    {
        $album->update($this->requestValidation());

        $this->storeImage($album);

        return view('album.show', compact('album'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function destroy(Album $album)
    {
        $album->delete();
    }

    protected function requestValidation()
    {
        return tap(request()->validate([
            'name' => 'required | min:2',
            'description' => 'required | min:2',
        ]), function(){
            if(request()->hasFile('image')){
                request()->validate([
                    'image' => 'file | image | max:10000'
                ]);
            }
        });
    }

    protected function storeImage($album)
    {
        if(request()->has('image')){

            $album->update([
                'image' => request()->image->store('uploads', 'public')
            ]);
        }
    }
}
