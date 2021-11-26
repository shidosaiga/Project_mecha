<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditBackController extends Controller
{
    public function editback()
    {
        return view('admin.edit.editBackgrund');
    }
}
