<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditProductController extends Controller
{
    public function editproduct(){
        return view('admin.edit.editProduct');
    }
}
