<?php

namespace App\Http\Controllers;

use App\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class Address2 extends Controller
{
    public function index(){
        $address = Address::all();
        return view('address2')->with('address2', $address);
    }

    public function edit($id){
        if(Input::get()){
            $address = Address::find($id);
            $address->update(Input::get());
            return view('address2')->with('address2', Address::all());
        }

        $address2 = Address::query()->find($id);
        return view('edit_address2')->with('address2', $address2);

    }
    public function sort($by){
        switch($by){
            case 'name':
                $address2 = Address::query()->orderBy('name')->get();
                break;
            case 'id':
                $address2 = Address::query()->orderBy('id')->get();
                break;
            case 'tel':
                $address2 = Address::query()->orderBy('tel')->get();
                break;
            case 'zip':
                $address2 = Address::query()->orderBy('zip')->get();
                break;
            case 'addrs1':
                $address2 = Address::query()->orderBy('addrs1')->get();
                break;
            case 'addrs2':
                $address2 = Address::query()->orderBy('addrs2')->get();
                break;
            case 'city':
                $address2 = Address::query()->orderBy('city')->get();
                break;
            case 'state':
                $address2 = Address::query()->orderBy('state')->get();
                break;
        }
        return view('address2')->with('address2',$address2);

    }


    public function delete($id){
        Address::destroy($id);
        $address2 = Address::all();
        return view('address2')->with('address2',$address2);

    }
}
