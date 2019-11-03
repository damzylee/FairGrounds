<?php

namespace App\Http\Controllers;

use App\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $like = new Like();

        $like = Like::create($this->requestValidation);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Like  $like
     * @return \Illuminate\Http\Response
     */
    public function show(Like $like)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Like  $like
     * @return \Illuminate\Http\Response
     */
    public function edit(Like $like)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Like  $like
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Like $like)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Like  $like
     * @return \Illuminate\Http\Response
     */
    public function destroy(Like $like)
    {
        $like->delete();
    }

    protected function requestValidation()
    {
        if(request()->has('user_id') && request()->has('comment_id')){
            return request()->validate([
                'user_id' => 'required',
                'comment_id' => 'required'
            ]);            
        }
        elseif(request()->has('user_id') && request()->has('review_id')){
            return request()->validate([
                'user_id' => 'required',
                'review_id' => 'required'
            ]);            
        }
        elseif(request()->has('company_id') && request()->has('comment_id')){
            return request()->validate([
                'company_id' => 'required',
                'comment_id' => 'required'
            ]);            
        }
        else{
            return request()->validate([
                'company_id' => 'required',
                'review_id' => 'required'
            ]);            
        }
    }
}
