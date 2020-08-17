<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Acc extends Controller
{

    public function index(){
        $acc= DB::table('account')->get();
        return view('product.display')->with([ 'acc' => $acc]);
    }
    public function delete($id){
        $a = DB::table('account')->where('Id',intval($id))->delete();
        return redirect()->action('Acc@index');
    }
}


