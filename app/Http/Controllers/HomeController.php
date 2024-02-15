<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class HomeController extends Controller
{
    public function index()
    {
        return view ('home');
    }
    public function add_product(Request $request)
    {
        $request->validate([
            'title'=> 'required|email|unique:products',
            'description'=>'required|max:10',
            'image'=> 'required|image|mimes:jpg,png|max:24'
            
        ]);
        $data = new Product;
        $data->title= $request->title;
        $data->description= $request->description;
        $image= $request->image;
        if($image){
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('product',$imagename);
            $data->image=$imagename;

        }
        $data->save();
        return redirect()->back();
    }
    public function show_product(){
        $data = Product::all();
        return view ('showProduct',compact('data'));
    }
    public function delete_product($id){
        $data = Product::find($id);
        $data->delete();
        return redirect()->back();

    }
    public function update_product($id){
        $data=Product::find($id);
        return view('editProduct',compact('data'));
        return redirect()->back();

    }
    public function edit_product(Request $request, $id){
        $data = Product::find($id);
        $data->title = $request->title;
        $data->description = $request->description;
        $image = $request->image;
        if($image){
            $imagechange=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('product',$imagechange);
            $data->image=$imagechange;
        }
        $data->save();
        return redirect()->back();



    }
}
