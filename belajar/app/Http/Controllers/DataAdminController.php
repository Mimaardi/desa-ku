<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataAdminController extends Controller
{
    public function DataAdmin(){
        return view('webadmin/data_admin');
    }
}
