<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
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
        $category=Category::all();
        return view('backend.category.index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.category.create');
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
        $request->photo->move(public_path('backend/categoryimg'),$imageName);
        $myfile='backend/categoryimg/'.$imageName;
        // Data insert
        $category=new Category;
        
        $category->name=$request->name;
        $category->photo=$myfile;
        
        $category->save();
        // Redirect
        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          return view('backend.category.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $category=Category::find($id); 
       return view('backend.category.edit',compact('category'));
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
        $request->photo->move(public_path('backend/categoryimg'),$imageName);
        $myfile='backend/categoryimg/'.$imageName;
        }else{
            $myfile=$request->oldphoto;
        }
        //data update
        $category=Category::find($id);
        
        $category->name=$request->name;
        $category->photo=$myfile;
        
        $category->save();
        //redirect
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category=Category::find($id);
        $category->delete();
        // redirect
        return redirect()->route('category.index');
    }
}
