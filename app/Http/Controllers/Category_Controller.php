<?php

namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Http\Request;

class Category_Controller extends Controller
{
    public function Events_Category_Route(){
        return view('Categories.Events',compact('Events'));
    }

    public function Ram_Category_Route(){
        return view('Categories.Ram',compact('RAM'));
    }

    public function SSD_Category_Route(){
        return view('Categories.SSD',compact('Storage'));
    }

    public function Gpu_Category_Route(){
        return view('Categories.Gpu',compact('GPU'));
    }

    public function HDD_Category_Route(){
        return view('Categories.HDD');
    }

    public function PSU_Category_Route(){
        return view('Categories.PSU',compact('PSU'));
    }

    public function Portrait_Category_Route(){
        return view('Categories.Portrait',);
    }

    public function Monitor_Category_Route(){
        return view('Categories.Monitor');
    }

    public function Motherboard_Category_Route(){
        return view('Categories.Motherboard',compact('Motherboard'));
    }

    public function PreBuilt_Category_Route(){
        return view('Categories.Pre-Built');
    }
}
