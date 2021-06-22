<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class ApiController extends Controller
{
    public function getApi(){
        return ['name'=>'mithu','id'=>76782];
    }
}
