<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;

class BrandController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brand=Brand::all();
        return view('backend.brand.index',compact('brand'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('backend.brand.create');
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
            
            'name'=>'required',
            'photo'=>'required'
            
        ]);
        // If include file,upload
        // file upload
        $imageName=time().'.'.$request->photo->extension();
        $request->photo->move(public_path('backend/brandimg'),$imageName);
        $myfile='backend/brandimg/'.$imageName;
        // Data insert
        $brand=new Brand;
        
        $brand->name=$request->name;
        $brand->photo=$myfile;
        
        $brand->save();
        // Redirect
        return redirect()->route('brand.index');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

          $brand=Brand::find($id);
        
         
         return view('backend.brand.show',compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand=Brand::find($id);
       return view('backend.brand.edit',compact('brand'));
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
        $request->validate([
            
            'name'=>'required',
            'photo'=>'sometimes'
            
        ]);
        // If include file,upload
        // file upload
        if($request->hasFile('photo')){
         $imageName=time().'.'.$request->photo->extension();
        $request->photo->move(public_path('backend/brandimg'),$imageName);
        $myfile='backend/brandimg/'.$imageName;
        }else{
            $myfile=$request->oldphoto;
        }
        //data update
        $brand=Brand::find($id);
        
        $brand->name=$request->name;
        $brand->photo=$myfile;
        
        $brand->save();
        //redirect
        return redirect()->route('brand.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand=Brand::find($id);
        $brand->delete();
        // redirect
        return redirect()->route('brand.index');
    }
}
