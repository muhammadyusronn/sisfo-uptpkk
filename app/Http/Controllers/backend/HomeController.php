<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $data['title'] = 'Dashboard';
        return view('backend.dashboard');
    }
}
