<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subcategory;
use App\Category;

class SubcategoryController extends Controller
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
         $subcategory=Subcategory::all();
         return view('backend.subcategory.index',compact('subcategory'));
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $category=Category::all();
         return view('backend.subcategory.create',compact('category'));
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
            'category'=>'required'

            
        ]);
        // If include file,upload
        // file upload
       
        // Data insert
        $subcategory=new Subcategory;
       
        $subcategory->name=$request->name;
       
        $subcategory->category_id=$request->category;
        $subcategory->save();
        // Redirect
        return redirect()->route('subcategory.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       return view('backend.subcategory.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category=Category::all();
        $subcategory=Subcategory::find($id);
       return view('backend.subcategory.edit',compact('category','subcategory'));
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
            'category'=>'required'
            
        ]);
        // If include file,upload
        // file upload
       
        //data update
        $subcategory=Subcategory::find($id);
        
        $subcategory->name=$request->name;
        $subcategory->category_id=$request->category;
        
        $subcategory->save();
        //redirect
        return redirect()->route('subcategory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $subcategory=Subcategory::find($id);
        $subcategory->delete();
        // redirect
        return redirect()->route('subcategory.index');  
    }
}
