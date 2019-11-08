<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Resources\CompanyApiResource;
use App\Company;

class CompanyApiController extends Controller
{
    public function home()
    {       
        return view('company.company');
    }

    public function index()
    {
        $companies = Company::orderBy('id', 'DESC')->get(); 
        
        return new CompanyApiResource($companies);
        // return response()->json([
        //     'Error' => 'Couldnt create'
        // ]);
        
        // return new CompanyApiResource($companies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $this->validate($request,[

            'name' => 'required|min:4',
            'email' => 'required | email',
            'number' => 'required | numeric',
            'country' => 'required | min:3',
            'state' => 'required | min:3',
            'address' => 'required | min:7',
            'type' => 'required',
            'profile' => 'required | max:500',
            'YOE' => 'required | date | before_or_equal:today',
            'image' => 'file|image'
        ]);
            if ($validator->fails()) {
                return response()->json(['errors'=>$validator->errors()]);
            } else {
                $createdCompany = Company::create($validator);
                if($request->has('image')){
                    $createdCompany->update([
                        'image' => request()->image->store('uploads', 'public')
                    ]);
                }
                
                if($createdCompany){
                    return response()->json([
                        'Status' => 'success',
                        'msg' => 'company created successfully'
                    ]);
                }

                else{
                    return response()->json([
                        'Error' => 'Couldnt create'
                    ]);
                }
            }
            
            

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $Company
     * @return \Illuminate\Http\Response
     */
    public function show($company)
    {
        
        if(is_numeric($company)){
            $companyitem = Company::findorFail($company);
            return new CompanyApiResource($companyitem);
        }
        else{
            return response()->json([
                'error' => 'Enter a valid id',
            ]);
        }
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $Company
     * @return \Illuminate\Http\Response
     */
    public function edit($company)
    {
        
        if(is_numeric($company)){
            $companyitem = Company::findorFail($company);
            return new CompanyApiResource($companyitem);
        }
        else{
            return response()->json([
                'error' => 'Enter a valid id',
            ]);
        } 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $Company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $company)
    {
        $validator = $this->validate($request,[

            'name' => 'required|min:4',
            'email' => 'required | email',
            'number' => 'required | numeric',
            'country' => 'required | min:3',
            'state' => 'required | min:3',
            'address' => 'required | min:7',
            'type' => 'required',
            'profile' => 'required | max:500',
            'YOE' => 'required | date | before_or_equal:today',
            'image' => 'file|image'
        ]);

            if ($validator->fails()) {
                return response()->json(['errors'=>$validator->errors()]);
            } 
            else {
                $companyUpdate = Company::findOrFail($company);

                if($companyUpdate->count()){
                    $updatedcompany = $companyUpdate->update($request->all());
                        
                    if($updatedcompany){
                        return response()->json([
                            'status' => 'success',
                            'msg' => 'companys updated successfully',
                        ]);
                    }

                    else{
                        return response()->json([
                            'status' => 'error',
                            'msg' => 'companys was not updated',
                        ]);
                    }
                }
            }
            
            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $Company
     * @return \Illuminate\Http\Response
     */
    public function destroy( $company)
    {
        if(is_numeric($company)){

            $company = Company::findOrFail($company);
 
            if($company->count()){
            if($company->delete()){
                return response()->json([
                    'status' => 'success',
                    'msg' => 'You have successfully deleted '.$company, 
                ]);
            }
            else{
                return response()->json([
                    'status' => 'error',
                    'msg' => 'error in deleting company',
                ]);
            }
        }
        }

        else{
            return response()->json([
                'status' => 'error',
                'msg' => 'an error has occured',
            ]);
        }
    }

}
