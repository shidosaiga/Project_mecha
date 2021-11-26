<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddPromotionController extends Controller
{
    public function addpromotion()
    {
        return view('admin.add.addPromotion');
    }
}
