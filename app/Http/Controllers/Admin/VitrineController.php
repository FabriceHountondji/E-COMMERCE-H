<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class VitrineController extends Controller
{
    public function index(){

        return view('master');
    }
}
