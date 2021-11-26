<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TypeProductController extends Controller
{
    public function typeproduct()
    {
        return view('admin/typeproduct');
    }

    
}
