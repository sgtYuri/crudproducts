<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Products;

class IndexController extends Controller
{
      //declare variable
      protected $request;

      public function __construct(Request $request)
      {
          $this->request = $request;
      }
    public function index()
    {

        $data= Products::all();

        if($this->request->has('search')){
            $data=Products::where(
                $this->request->by,
                'LIKE',
                $this->request->search.'%'
            )->get();
        }
       
         if($this->request->has('price')){
             $data =Products::where('entrance_fee','>=' , $this->request->price1)
                            ->where('entrance_fee','<=' , $this->request->price1)
                            ->get();
         }
    
        return view ('index')->with([
            'data'=>  $data
        ]);

    }
}