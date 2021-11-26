<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditPromotionController extends Controller
{
    public function editpromotion()
    {
        return view('admin.edit.editPromotion');
    }
}
