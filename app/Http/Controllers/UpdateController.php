<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use Redirect;

class UpdateController extends Controller
{
   
    //declare variable
    protected $request;
    public function __construct(Request $request)
    {
    $this->request = $request;
    }

    public function index($id)
    {
        return view ('update')->with([
            'data' => Products::find($id)
        ]);
    }
    public function save ($id)
    {
        Products::find($id)->update(
            $this->request->except('_token')

        );
        return Redirect::route('home');
    }


}
