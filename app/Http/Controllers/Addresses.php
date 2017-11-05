<?php

namespace App\Http\Controllers;

use App\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Addresses extends Controller
{

    public function index(){
       //$addresses = Address::all();
        $addresses = DB::table('addresses')->paginate(7);
        return view('addresses')->with('address',$addresses);
    }

    public function add_address(Request $request){
        if (Input::get()) {
            $this->validate($request, [
                'name' => 'required',
                'addrs1' => 'required',
                'zip' => 'required',
                'tel' => 'required',
                'city' => 'required'
            ]);
            $input = $request->all();
            Address::create($input);
            Session::flash('flash_message', 'successfully added!');

            /*
            $address = new \App\Address();
            $address->name = Input::get('name');
            $address->tel = Input::get('tel');
            $address->addrs1 = Input::get('addrs1');
            $address->addrs2 = Input::get('addrs2');
            $address->zip = Input::get('zip');
            $address->city = Input::get('city');
            $address->state = Input::get('state');
            $address->save();*/


            $addresses = Address::all();
            //$addresses = DB::table('addresses')->get();
            return view('addresses')->with('address',$addresses);
        }
        else{
            return view('add_address');
        }

    }

    public function edit($id){
        $address =  Address::where('id','=',$id)->firstOrFail();
        return view('add_address')->with('address', $address);
    }

    public function edit_address($id){

            $address = Address::find($id);
            $address->name = Input::get('name');
            $address->tel = Input::get('tel');
            $address->addrs1 = Input::get('addrs1');
            $address->addrs2 = Input::get('addrs2');
            $address->zip = Input::get('zip');
            $address->city = Input::get('city');
            $address->state = Input::get('state');
            $address->update();
            $addresses = DB::table('addresses')->get();
            return view('addresses')->with('address',$addresses);
        }

    public function delete($id)
    {
        Address::destroy($id);
        Session::flash('flash_message', 'successfully Deleted!');
        //$address = DB::table('addresses')->where('id', '=', $id)->delete();
        $addresses = Address::all();
        return view('addresses')->with('address',$addresses);
    }


    public function sort($key){
        switch($key) {

            case 'name':
                $addresses = DB::table('addresses')->orderBy('name')->get();
                break;
            case 'addrs1':
                $addresses = DB::table('addresses')->orderBy('addrs1')->get();
                break;
            case 'addrs2':
                $addresses = DB::table('addresses')->orderBy('addrs2')->get();
                break;
            case 'zip':
                $addresses = DB::table('addresses')->orderBy('zip')->get();
                break;
            case 'state':
                $addresses = DB::table('addresses')->orderBy('state')->get();
                break;
            case 'city':
                $addresses = DB::table('addresses')->orderBy('city')->get();
                break;
            }
          return view('addresses')->with('address',$addresses);

        }

    public function filter(){
        $value = Input::get('filter');
        $columns =[ 'name','tel','addrs1','addrs2','zip','city','state'];
        $query = Address::query();
        foreach($columns as $col)
            {
                $query->orWhere($col, 'LIKE', '%' . $value . '%');
            }

            $addresses = $query->get();

            return view('addresses')->with('address',$addresses);

        }

    }


