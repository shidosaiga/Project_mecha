<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddContentController extends Controller
{
    public function addcontent()
    {
        return view('admin.add.addContent');
    }
}
