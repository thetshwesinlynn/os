<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Subcategory;

class FrontendController extends Controller
{
    public function home(){
    	$items=Item::orderBy('id','desc')->take(6)->get();
    	// dd($items);
    	return view('frontend.home',compact('items'));
    }

     public function item(){
    	
        $subcategories=Subcategory::orderBy('id','desc')->take(6)->get();
        // dd($items);
        return view('frontend.item',compact('subcategories'));
    }

    

    public function detail($id){
    	 $item=Item::find($id);
       
    	return view('frontend.detail',compact('item'));
    }

    public function register(){
    	
    	
    	return view('frontend.register');


    }

    public function login(){
    	
    	
    	return view('frontend.login');


    }

    public function checkout(){
    	
    	
    	return view('frontend.checkout');


    }

    public function profile(){
    	
    	
    	return view('frontend.profile');


    }
    
     public function getItems(Request $request){
        $sid=$request->sid;
        if($sid==0){
         $items=Item::all();
     }else{
        $items=Subcategory::find($sid)->items;
     }
        return $items;
    }

   
    
}
