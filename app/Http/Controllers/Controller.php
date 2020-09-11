<?php

namespace App\Http\Controllers;
use App\User;
use App\Models\Events;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
      
    //private $objUser;
    //private $objEvent;

    public function __construct(){

        //$this->objUser=new User();
        //$this->objEvent=new Events();

    }

    public function index(){

    }
    public function verEvento(){
        if(Auth::check() === true) {
        return view('eventos');
        }

        return redirect() -> route('admin.login');

    }

    public function meusEventos(){
        if(Auth::check() === true) {
            return view('meuseventos');
            }
             
            return redirect() -> route('admin.login');

    }


    public function home(){

        return view('home');

    }

    public function profile(){
        if(Auth::check() === true) {
            return view('profile');
            }
            return redirect() -> route('admin.login');

    }

    /*public function registerEvents(){
        if(Auth::check() === true) {
            return view('registerevents');
            }
             
            return redirect() -> route('admin.login');

    }
    */

    public function Eventinformation(){

        return view('eventinformation');

    }

    public function ViewInfo(){

        return view('show');

    }

   
    


}
