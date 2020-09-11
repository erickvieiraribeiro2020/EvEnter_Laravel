<?php

namespace App\Models;
use App\User;
use App\Models\Events;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Database\Eloquent\Model;

class \Events extends Model
{
    protected $table='events';
    
    protected $fillable=['name', 'description', 'adress', 'city', 'state'];

    public function relUsers(){
        return $this->hasMany('App\User', 'id_user', 'id', 'id_user');
    }

}

