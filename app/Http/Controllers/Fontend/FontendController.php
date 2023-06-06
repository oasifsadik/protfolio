<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FontendController extends Controller
{
    public function index()
    {
        return view('fontend.home');
    }
    public function about()
    {
        return view('fontend.about');
    }
    public function services()
    {
        return view('fontend.services');
    }
    public function protfolio()
    {
        return view('fontend.protfolio');
    }
}
