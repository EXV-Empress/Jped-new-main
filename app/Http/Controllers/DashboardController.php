<?php

namespace App\Http\Controllers;
use App\Models\BoughtProducts;
use App\Models\CancelledProducts;
use App\Models\Products;
use App\Models\RefundedProducts;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('DashBoard');
    }

    public function index(){    
        return view('DashBoard');
    }

    
    public function signup(){
        return view('Signup');
    }

    public function terms(){
        return view('terms');
    }

    public function details($id){
        $product = Products::find($id);
        return view('Product_demo',compact('product'));
    }
    public function admindashboard(){
        $user = User::orderBy('id','desc')->get();
        $usercount = User::count();
        $products = Products::count();
        $boughtTotal=0;
        return view('Admindashboards',compact('user','usercount','products','boughtTotal'));
    }
    public function adminanalytics(){
        $user = User::count();
        $products = Products::count();
        //bought
        $boughtquant = BoughtProducts::sum('quantity');
        $boughtcount = BoughtProducts::count();
        $bought = BoughtProducts::all();
        $boughtTotal=0;
        foreach($bought as $boughts){
            $boughtTotal += $boughts -> quantity * $boughts -> price;
        }
        $refunded = RefundedProducts::sum('quantity');
        $cancelled = CancelledProducts::sum('quantity');
        //gpu
        $GPUquant = BoughtProducts::where("category","GPU")->sum('quantity');
        $GPUCount = BoughtProducts::where("category","GPU",)->count();
        $GPU = BoughtProducts::all()->where("category","GPU");
        $GPUTotal=0;
        foreach($GPU as $GPUs){
            $GPUTotal += $GPUs -> quantity * $GPUs -> price;
        }
        //mobo
        $Motherboardquant = BoughtProducts::where("category","Motherboard")->sum('quantity');
        $MotherboardCount = BoughtProducts::where("category","Motherboard",)->count();
        $Motherboard = BoughtProducts::all()->where("category","Motherboard");
        $MotherboardTotal=0;
        foreach($Motherboard as $Motherboards){
            $MotherboardTotal += $Motherboards -> quantity * $Motherboards -> price;
        }
        //ram
        $RAMquant = BoughtProducts::where("category","RAM")->sum('quantity');
        $RAMCount = BoughtProducts::where("category","RAM",)->count();
        $RAM = BoughtProducts::all()->where("category","RAM");
        $RAMTotal=0;
        foreach($RAM as $RAMs){
            $RAMTotal += $RAMs -> quantity * $RAMs -> price;
        }
        //cpu
        $CPUquant = BoughtProducts::where("category","CPU")->sum('quantity');
        $CPUCount = BoughtProducts::where("category","CPU",)->count();
        $CPU = BoughtProducts::all()->where("category","CPU");
        $CPUTotal=0;
        foreach($CPU as $CPUs){
            $CPUTotal += $CPUs -> quantity * $CPUs -> price;
        }
        //psu
        $PSUquant = BoughtProducts::where("category","PSU")->sum('quantity');
        $PSUCount = BoughtProducts::where("category","PSU",)->count();
        $PSU = BoughtProducts::all()->where("category","PSU");
        $PSUTotal=0;
        foreach($PSU as $PSUs){
            $PSUTotal += $PSUs -> quantity * $PSUs -> price;
        }
        //storage
        $Storagequant = BoughtProducts::where("category","Storage")->sum('quantity');
        $StorageCount = BoughtProducts::where("category","Storage",)->count();
        $Storage = BoughtProducts::all()->where("category","Storage");
        $StorageTotal=0;
        foreach($Storage as $Storages){
            $StorageTotal += $Storages -> quantity * $Storages -> price;
        }
        //case
        $Casequant = BoughtProducts::where("category","Case")->sum('quantity');
        $CaseCount = BoughtProducts::where("category","Case",)->count();
        $Case = BoughtProducts::all()->where("category","Case");
        $CaseTotal=0;
        foreach($Case as $Cases){
            $CaseTotal += $Cases -> quantity * $Cases -> price;
        }
        return view('Adminanalytics', compact('GPUquant','GPUTotal','GPUCount','CPUquant','CPUTotal','Motherboardquant',
        'MotherboardTotal','PSUquant','PSUTotal','Storagequant','StorageTotal','Casequant','CaseTotal','RAMquant','RAMTotal','user',
        'MotherboardCount','RAMCount','CPUCount','PSUCount','StorageCount','CaseCount','bought','refunded','cancelled','products','boughtTotal','boughtcount','boughtquant'));
    }
    public function admincustomers(){
        $user = User::get();
        $count = BoughtProducts::get();
        return view('Admincustomers', compact('user','count',));
    }
    public function adminmanagement(){
        return view('Adminmanagements');
    }
    public function adminlogin(){
        return view('Adminlogin');
    }
    public function adminAuth(Request $request) {

        $request->validate([
            'email'    => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
          if (Auth::attempt($credentials)) {
            $user = User::where('email', $request->email)->first();
            if ($user->id == '1') {
                return redirect()->route('admindashboards');
            } else {
                return redirect()->back()->with('error', 'Unauthorized ');
            }
        }
        return redirect()->back()->with('error', 'Unauthorized');
    } 
}

    
