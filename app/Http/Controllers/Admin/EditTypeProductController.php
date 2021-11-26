<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditTypeProductController extends Controller
{
   public function edittypeproduct()
   {
       return view('admin.edit.editTypeproduct');
   }
}
