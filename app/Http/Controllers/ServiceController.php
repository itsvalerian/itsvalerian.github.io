<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Service;

class ServiceController extends Controller
{
     /** 
    * Display a listing of the resource. 
    * 
    * @return \Illuminate\Http\Response 
    */

    public function index()
    {
        $service = Service::latest()->get(); 
        return view('service.index', compact('service'));

    }

    /** 
    * Show the form for creating a new resource. 
    *
    * @return \Illuminate\Http\Response 
    */

    public function create()
    {
        return view('service.create');
    }

    /** 
    * Store a newly created resource in storage. 
    * 
    * @param \Illuminate\Http\Request $request 
    * @return \Illuminate\Http\Response 
    */

    public function store(Request $request)
    {
        $service = Service::create([
             'nama' => $request->input('nama'),
             'gender' => $request->input('gender'),
             'email' => $request->input('email'),
             'alamat' => $request->input('alamat'),
             'produk' => $request->input('produk'),  
             'status' => $request->input('status') 
            ]); 
            
        // return redirect('/service');
        return redirect('/service')->with('success','service telah disimpan!');
    }

    /** 
    * Display the specified resource. 
    * 
    * @param \App\Models\Service $service 
    * @return \Illuminate\Http\Response 
    */

    public function show(service $services)
    { 
        // 
    }

    /** 
    * Show the form for editing the specified resource. 
    * 
    * @param \App\Models\Service $services 
    * @return \Illuminate\Http\Response 
    */

    public function edit(Service $service) 
    { 
        return view('service.edit', compact('service'));
    }

    /** 
    * Update the specified resource in storage. 
    * 
    * @param \Illuminate\Http\Request $request 
    * @param \App\Models\Service $services 
    * @return \Illuminate\Http\Response 
    */

    public function update(Request $request, Service $service) 
    { 
        $service = Service::whereId($service->id)->update([ 
            'nama' => $request->input('nama'),
            'gender' => $request->input('gender'), 
            'alamat' => $request->input('alamat'),
            'produk' => $request->input('produk'),
            'email' => $request->input('email'),
            'status' => $request->input('status') 
        ]); 
        
        // return redirect('/service');
        return redirect('/service')->with('success','service telah diubah!');
    }

    /** 
    * Remove the specified resource from storage. 
    * 
    * @param \App\Models\Service $services 
    * @return \Illuminate\Http\Response 
    */
    
    public function destroy(Service $service) 
    { 
        $service = service::find($service->id); 
        $service->delete(); 
        
        return redirect('/service')->with('success','service telah dihapus!');
    }

}
