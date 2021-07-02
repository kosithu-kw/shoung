<?php

namespace App\Http\Controllers;

use App\Cat;
use App\Foodpair;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function getFoodsList(){
        //$cats=Cat::with('foodpairs')->get();
        $foods=Foodpair::OrderBy('id', 'desc')->paginate("40");
        return view ('foods-list')->with(['foods'=>$foods]);

    }
    public function getSearchFoods(){
        $foods=[];
        $q="";
        return view ('search-foods')->with(['foods'=>$foods, 'q'=>$q]);
    }
    public function getSearchResult(Request $request){
        $q=$request['q'];
        $foods=Foodpair::where('first_food_name', 'LIKE', "%$q%")->orWhere('second_food_name', "LIKE", "%$q%")
        ->OrderBy('id', 'desc')->paginate("40");
        return view ('search-foods')->with(['foods'=>$foods, 'q'=>$q]);
    }
}
