<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vps;
class VpsController extends Controller
{
    public function index()
    {

        $vpss=Vps::orderBy('id')->get();
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
    public function add()
    {

    return view('andyweb.add');
    }
    public function store()
    {
        $sub=new Vps();
        $sub->id=request('id');
        $sub->name=request('name');
        $sub->type=request('type');
        $sub->price=request('price');
        $sub->bandwidth=request('bandwidth');
        $sub->core=request('core');
        error_log($sub);
        $sub->user=request('user');
        $sub->save();
        return redirect('/vps')->with('mess','感谢您的订购');

    }
    public function destroy($id)
    {
        $subs=Vps::findOrFail($id);
        $subs->delete();
        return redirect('/vps');

    }
}
