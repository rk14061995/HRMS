<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    //
    public function index(Request $req){
        print_r($_REQUEST);
        if(!empty($email=$req->input('email'))){
            // if($email==''){
                return redirect('home');
            // }elseif($email==''){

            // }else{

            // }
        }
    }
}
