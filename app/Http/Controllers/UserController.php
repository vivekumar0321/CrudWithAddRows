<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $products= User::all();
        return view('index',compact('products'));
    }
    
    public function create(){
        return view('create');
    }
    public function store(Request $request){
    
        $insertData = [];
        for($i=0;$i < count($request->name);$i++){
            $insertData[]=[
                'item_name' => $request->name[$i],
                'quantity' => $request->quantity[$i],
                'price' => $request->price[$i],
                'sub_total' => $request->subtotal[$i]
            ];
        }
        User::insert($insertData);
        return redirect()->route('product.index')->with('success','Product created..');
    }
    public function delete($id){
        $product = User::find($id);
        $product->delete();
        return redirect()->route('product.index')->with('success','Product deleted..');
    }
    public function edit($id){
        $product = User::find($id);
        return view('edit',compact('product'));    
    }
    public function update(Request $request ,$id){
        $product = User::find($id);
        $product->item_name = $request->input('name');
        $product->quantity = $request->input('quantity');
        $product->price = $request->input('price');
        $product->sub_total = $request->input('subtotal');
        $product->update();
        return redirect()->route('product.index')->with('success','Product updated..');
    }
}
