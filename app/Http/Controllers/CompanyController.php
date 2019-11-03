<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::latest()->get();

        return view('company.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $company = new Company();

        return view('company.create', compact('company'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $company = Company::create($this->requestValidation());

        $this->storeImage($company);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        return view('company.show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view('company.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        $company->update($this->requestValidation());

        $this->storeImage($company);

        return view('company.show', compact('company'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $company->delete();
    }

    protected function requestValidation()
    {
        return tap(request()->validate([

            'name' => 'required|min:4',
            'email' => 'required | email',
            'number' => 'required | numeric',
            'country' => 'required | min:3',
            'state' => 'required | min:3',
            'address' => 'required | min:7',
            'type' => 'required',
            'profile' => 'required | max:500',
            'YOE' => 'required | date | before_or_equal:today'
        ]), function(){
                if(request()->hasFile('image'))
                {
                    request()->validate([
                        'image' => 'file|image|max:10000'
                    ]);
                }
        });
    }

    protected function storeImage($company)
    {
        if(request()->has('image')){
            $company->update([
                'image' => request()->image->store('uploads', 'public')
            ]);
        }
    }
}
