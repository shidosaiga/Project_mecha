<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditHomepageController extends Controller
{
    public function edithomepage()
    {
        return view('admin.edit.editHomepage');
    }
}
