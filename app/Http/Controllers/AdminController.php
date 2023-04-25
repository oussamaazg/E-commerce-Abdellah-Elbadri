<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use PDF ;

class AdminController extends Controller
{
public function view_category(){

    $data=category::all();


    return view('admin.category',compact('data'));
}


public function add_category(Request $request){

$data=new category;
$data->name=$request->category;
$data->save();

return redirect()->back()->with('message','Category added successfully');


}

public function delete_category($id){

    $data=category::find($id);
    $data->delete();
    return redirect()->back()->with('message','Category deleted successfully');

}

public function view_product(){

    $category=category::all();
return view('admin.product',compact('category'));

}
public function add_product(Request $request){

    $product=new product;
    $product->name=$request->name;
    $product->description=$request->description;
    $product->category=$request->category;
    $product->price=$request->price;
    $image=$request->image;
    $imagename=time().'.'.$image->getClientOriginalExtension();
    $request->image->move('product',$imagename);
    $product->image=$imagename;

    $product->save();

    return redirect()->back()->with('message','Product added successfully');

    }


    public function show_product(){

       $product=product::all();
    return view('admin.show_product',compact('product'));

    }



public function delete_product($id){

    $product=product::find($id);
    $product->delete();
    return redirect()->back()->with('message','product deleted successfully');

}


public function update_product($id){

    $product=product::find($id);
    $category=category::all();
    return view('admin.update_product',compact('product','category'));

}



public function update_product_confirm(Request $request,$id){

    $product=product::find($id);
    $product->name=$request->name;
    $product->description=$request->description;
    $product->price=$request->price;
    $product->category=$request->category;
    $image=$request->image;
    $imagename=time().'.'.$image->getClientOriginalExtension();
    $request->image->move('product',$imagename);
    $product->image=$imagename;
    $product->save();


    return redirect()->back()->with('message','Product updated successfully');

}


public function print_pdf($id){


    $product=product::find($id);
    $pdf=PDF::loadview('admin.pdf',compact('product'));

    return $pdf->download('product_details.pdf');

}

}
