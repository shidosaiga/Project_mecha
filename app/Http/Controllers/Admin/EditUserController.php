<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditUserController extends Controller
{
    public function edituser()
    {
        return view('admin.edit.editUser');
    }
}
