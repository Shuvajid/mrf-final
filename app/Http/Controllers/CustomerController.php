<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Models\Offer;
use App\Models\Notice;
use App\Models\Brand;
use App\Models\Carousal;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function viewpage(){

        $categories= Category::all();
        $recents= Product::latest()->take(10)->get();
        $offers= Offer::all();
        $notices= Notice::all();
        $carousals = Carousal::all();
        return view('index',compact('categories','recents','offers','notices','carousals'));
    }
    public function shoppage(){
        return view('pages/shop');
    }
    public function propage(){
        $prodetails= Product::paginate(15);
        return view('pages/pro',compact('prodetails'));
       
    }
    public function brandpage(){
        
        $brandetails= Brand::all();
        return view('pages/brand',compact('brandetails'));
       
    }
    public function aboutpage(){
        return view('pages/about');
    }
    public function refundpage(){
        return view('pages/refund');
    }
    public function warrantypage(){
        return view('pages/warranty');
    }

    public function search(Request $request){

         $products = Product::latest() 
        ->leftjoin('categories','products.cat_id','=','categories.id') 
        ->select('categories.cat_name','categories.image', 'products.*')
        ->where('pro_name', 'like', '%' .$request->products. '%')
        ->Orwhere('cat_name', 'like', '%' .$request->products. '%')
        ->get(); 

        return view('products.show_pro',compact('products'));
    }
}
