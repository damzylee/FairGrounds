<?php

namespace App\Http\Controllers;

use App\MakeRequest;
use Illuminate\Http\Request;

class MakeRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $makeRequests = MakeRequest::all();

        return view('request.index', compact('makeRequests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $makeRequest = new MakeRequest();

        return view('request.create', compact('makeRequest'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $makeRequest = MakeRequest::create($this->requestValidation());

        $makeRequests = new MakeRequest();

        return view('request.create', compact('makeRequests'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MakeRequest  $makeRequest
     * @return \Illuminate\Http\Response
     */
    public function show(MakeRequest $makeRequest)
    {
        return view('request.show', 'makeRequest');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MakeRequest  $makeRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(MakeRequest $makeRequest)
    {
        return view('request.edit', 'makeRequest');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MakeRequest  $makeRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MakeRequest $makeRequest)
    {
        $makeRequest->update($this->requestValidation());

        return view('request.show', 'makeRequest');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MakeRequest  $makeRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(MakeRequest $makeRequest)
    {
        $makeRequest->delete();
    }

    protected function requestValidation()
    {
        return request()->validate([
            'title' => 'required | min:4',
            'detail' => 'required | max:500',
            'user_id' => 'required'
        ]);
    }
}
