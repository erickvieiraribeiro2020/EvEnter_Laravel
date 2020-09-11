<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Response;

class EventController extends Controller
{

    public function registerEvent()
{
    if(Auth::check() === true) {
        return view('registerevents');
        }
         
        return redirect() -> route('admin.login');
    }

   /* public function create(){
        return view('registerevents');
    
    }
    */

    public function store(Request $request){
            $name=$request->input('name');
            $description=$request->input('description');
            $adress=$request->input('adress');
            $city=$request->input('city');
            $state=$request->input('state');

            $data=array("name"=>$name,
            "description"=>$description,
            "adress"=>$adress,
            "city"=>$city,
            "state"=>$state);
            DB::table('events')->insert($data);

            return redirect() -> route('registerevents');

    }
   
}