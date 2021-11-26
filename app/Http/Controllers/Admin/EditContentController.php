<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditContentController extends Controller
{
    public function editcontent()
    {
        return view('admin.edit.editContent');
    }
}
