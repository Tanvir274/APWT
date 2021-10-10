<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    //
    public function Product()
    {
        return view('pages.product');
    }
    public function Home()
    {
        return view('pages.home');
    }
    public function ProductSubmit(Request $request)
    {
        /* $id=$request->id;
         $name=$request->name;
         $price=$request->price;
         $quantity=$request->quantity;
         $description=$request->description;
         return ($id. $name .$price .$quantity. $description) ; */
         
         /* using request validate method
          $validate = $request->validate([
            'id'=>'required',
            'name'=>'required | min: 3',
            'price'=>'required',
            'quantity'=>'required',
            'description'=>'required'

         ],
         [
             //customise error message
             'name.required'=>'put your name',
             'name.min'=>'name must be gether than  2 charecter'
         ]
        ); */


        // using class validate methood
        $this->validate(
            $request,
            [
            'id'=>'required',
            'name'=>'required | min: 3 | regex:/^[A-Za-z]+$/ ' ,
            'price'=>'required',
            'quantity'=>'required',
            'description'=>'required'

           ],
           [
            'name.required'=>'put your name',
             'name.min'=>'name must be gether than  2 charecter'

           ]
        );
        $var=new product();
        $var->p_id=$request->id;
        $var->name= $request->name;
        $var->price= $request->price;
        $var->quantity= $request->quantity;
        $var->description= $request->derscription;
        //$var=save();
         return "ok";
    }

    public function ProductList()
    {
        $products = array();
        for($i=0;$i<10;$i++)
        {
            $product=array(
                "id"=>($i+1),
                "name"=>"Product".($i+1),
                "price"=>($i*$i+110)

            );
            $products[]=(object)$product;
        }
        return view('pages.plist')->with('products',$products);
    }
    public function ProductEdit(Request $request)
    {
        return $request->id;

    }

}
