<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddBackController extends Controller
{
    public function addback()
    {
        return view('admin.add.addBackgrund');
    }
}
