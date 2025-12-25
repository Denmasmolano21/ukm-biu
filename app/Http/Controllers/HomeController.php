<?php

namespace App\Http\Controllers;

use App\Models\DataUkm;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data_ukms = DataUkm::take(3)->get();
        
        return view('home', compact('data_ukms'));
    }

    public function about()
    {
        return view('about');
    }
}