<?php

namespace App\Http\Controllers;

use App\Models\Product as Product;
use App\Http\Resources\Product as ProductResource;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
      $products = Product::paginate(10);
      return ProductResource::collection($products);
    }
  
    public function show($id){
      $product = Product::findOrFail( $id );
      return new ProductResource( $product );
    }
  
    public function store(Request $request){
      $product = new Product;
      $product->title = $request->input('title');
      $product->price = $request->input('price');
      $product->membership_fee = $request->input('membership_fee');
      $product->relatives = $request->input('relatives');
      $product->seniors = $request->input('seniors');
      $product->detail = $request->input('detail');
  
      if( $product->save() ){
        return new ProductResource( $product );
      }
    }
  
     public function update(Request $request){
      $product = Product::findOrFail( $request->id );
      $product->title = $request->input('title');
      $product->price = $request->input('price');
      $product->membership_fee = $request->input('membership_fee');
      $product->relatives = $request->input('relatives');
      $product->seniors = $request->input('seniors');
      $product->detail = $request->input('detail');
  
      if( $product->save() ){
        return new ProductResource( $product );
      }
    } 
  
    public function destroy($id){
      $product = Product::findOrFail( $id );
      if( $product->delete() ){
        return new ProductResource( $product );
      }
    }
}
