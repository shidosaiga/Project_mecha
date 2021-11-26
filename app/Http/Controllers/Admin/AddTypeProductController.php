<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use illuminate\Support\str;
use App\Typeproduct;

class AddTypeProductController extends Controller
{
    public function addtypeProduct()
    {
        return view('admin.add.addTypeproduct');
    }
    public function create(Request $request)
    {
        // dd($request);
        $typeproduct = new Typeproduct;
        $typeproduct->name = $request->name;
        $typeproduct->save();
        return redirect()->route('typeproduct');
       

    }
    

}
