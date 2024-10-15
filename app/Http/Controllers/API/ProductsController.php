<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Products;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\BoughtProducts;
use App\Models\CancelledProducts;
use App\Models\RefundedProducts;
use App\Models\Cart;
use Auth;
use Hash;


// API CONTROLLER 

class ProductsController extends Controller
{

    // PRODUCTS FOR SALE // ========================================

    //SEARCHES FOR A PRODUCT BY NAME
    public function search_product($name){
        return Products::where("name", $name)->get();    
    }

    //SEARCHES FOR A CATEGORY BY NAME
    public function search_category($category){
        return Products::where("category", $category)->get();  
    }

    //CPU INDEX
    public function index_cpu(){
        return Products::where("category", 'CPU')->get(); 
    }

    //GPU INDEX
    public function index_gpu(){
        return Products::where("category", 'GPU')->get(); 
    }

    //MOBO INDEX
    public function index_motherboard(){
        return Products::where("category", 'Motherboard')->get(); 
    }

    //RAM INDEX
    public function index_ram(){
        return Products::where("category", 'RAM')->get(); 
    }

    //STORAGE INDEX
    public function index_storage(){
        return Products::where("category", 'Storage')->get(); 
    }

    //PSU INDEX
    public function index_psu(){
        return Products::where("category", 'PSU')->get(); 
    }

    //CASE INDEX
    public function index_case(){
        return Products::where("category", 'CASE')->get();
    }

    //STORES A PRODUCT
    public function store(Request $request){
        $products = Products::all();
        DB::table('products')->insert([
            'name' => $request->name,
            'photo' => $request->photo,
            'price' => $request->price,
            'details' => $request->details,
            'category' => $request->category,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
    }

    //SHOWS ALL PRODUCTS
    public function index(){
        $products = Products::all();
        return response()->json(['Products' => $products]);
    }

    //DELETES A PRODUCT
    public function destroy($id){
        $product = Products::find($id);
        $product -> delete();
        return response()->json(['message' => "succesfully deleted"]);
    }

    // OTHERS // ======================================================

    //SHOWS ALL BOUGHT PRODUCTS
    public function bought(){
        $bought = BoughtProducts::all()->where('user_id',Auth::user()->id);
        return view('Profile.My_Bought',compact('bought'));
    }
    public function refunded(){
        $refunded = RefundedProducts::all()->where('user_id',Auth::user()->id);
        return view('Profile.My_Refunded',compact('refunded'));
    }
    public function cancelled(){
        $cancelled = CancelledProducts::all()->where('user_id',Auth::user()->id);
        return view('Profile.My_Cancelled',compact('cancelled'));
    }

    //SHOWS ALL CANCELLED PRODUCTS
    public function index_cancelled(){
        $cancelled = CancelledProducts::all();
        return response()->json(['Cancelled Products:' => $cancelled]);
    }

    //SHOWS ALL REFUNDED PRODUCTS
    public function index_refunded(){
        $refunded = RefundedProducts::all();
        return response()->json(['Refunded Products:' => $refunded]);
    }

    //MOVES BOUGHT TO REFUNDED
    public function refund($id, Request $request){
        $bought = BoughtProducts::find($id);
        DB::table('refunded_products')->insert([
            'name' => $bought->name,
            'photo' => $bought->photo,
            'price' => $bought->price,
            'details' => $bought->details,
            'quantity' => $bought -> quantity,
            'category' => $bought->category,
            'user_id' => $user_id = $request->user()->id,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
        BoughtProducts::find($id)->delete();
        return redirect()-> back()-> with(['message' => 'Product successfully refunded'], 200);
    }

    //MOVES BOUGHT TO CANCELLED
    public function cancel($id, Request $request){
        $bought = BoughtProducts::find($id);
        DB::table('cancelled_products')->insert([
            'name' => $bought->name,
            'photo' => $bought->photo,
            'price' => $bought->price,
            'details' => $bought->details,
            'quantity' => $bought -> quantity,
            'category' => $bought->category,
            'user_id' => $user_id = $request->user()->id,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
        BoughtProducts::find($id)->delete();
        return redirect()-> back()->with(['message' => 'Product successfully cancelled'], 200);
    }
}
