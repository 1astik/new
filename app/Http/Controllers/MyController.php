<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


use App\Models\Avto;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class MyController extends Controller
{
    public function avto_show()
    {
        $data['error'] = '';
        return view('auth', $data);
    }

    public function avto( Request $request)
    {
        $error = '';
        $name_l = $request->input('login');
        $name_p = $request->input('password');
        $link_l = Avto::where('login', '=',$name_l)->get();
        $link_p = Avto::where('password', '=',$name_p)->get();
        if( isset($_POST['vhod'] ))
        {
            if($link_l != '[]')
            {
                if($link_p != '[]' )
                {
                    return redirect('home');
                }
            }
            else{
                $data['error'] = 'Wrong password or login! Please try again!';
                return view('auth', $data);
            }
        }

    }


}
