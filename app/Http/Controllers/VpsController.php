<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vps;
class VpsController extends Controller
{
    public function index()
    {

        $vpss=Vps::orderBy('type')->get();
        return view('andyweb.vps',[
            'vip'=>$vpss,
        ]);
    }
    public function show($id)
    {
            $hostid=Vps::findOrFail($id);


        return view('andyweb.number',[
            'id'=>$hostid
        ]);
    }

}
