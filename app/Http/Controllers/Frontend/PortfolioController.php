<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        return view('frontend.portfolio');
    }

    public function detail($slug){
        return view('frontend.portfolio-detail');
    }
}
