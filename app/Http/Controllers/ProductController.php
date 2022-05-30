<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(Request $request){
        $validated = $request->validate([
            'name'=>'required', 
        ]);
            $product = new Product();
         $product->name = $request->name;
         if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('Image'), $filename);
            $product->image= $filename;
        }
         $product->save();
         return redirect('table')->with('msg',"Add successfully");

    }
    public function table()
    {
        $data=Product::all();
        return view('table',compact('data'));
    }
    public function edit($id)
    {
        $product=Product::find($id);
        return view('edit',compact('product'));
    }
    public function update(Request $request,$id)
    {
    $product= Product::find($id);
    $product->name = $request->name;
    $product->save();
    return redirect('table')->with('msg',"update successfully");
    }

    public function delete($id)
    {
        $product=Product::find($id);
        $product->delete();
        return redirect('table')->with('msg',"delete successfully");
    }
}



