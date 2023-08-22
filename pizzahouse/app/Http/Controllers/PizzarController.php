<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzarController extends Controller
{
    public function index($id)
    {
        $pizzar = "chicken";
        return view('qparameter', ['id' => $id]);
    }
}
