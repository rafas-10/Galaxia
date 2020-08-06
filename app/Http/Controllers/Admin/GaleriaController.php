<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class GaleriaController extends Controller
{
    public function __Construct(){
        $this->middleware('auth');
        //$this->middleware('user.permissions');
        $this->middleware('isadmin');
    }

    public function getGaleria(){
        return view ('/admin/galeria/home');
    }
}
