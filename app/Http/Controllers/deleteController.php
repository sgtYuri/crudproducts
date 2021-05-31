<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use Redirect;

class deleteController extends Controller
{


     public function index($id)
     {
          Products::find($id)->delete();

          return Redirect::route('home');

     }

}
