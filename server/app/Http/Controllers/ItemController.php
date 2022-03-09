<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class ItemController extends Controller
{
    public function getItems(Request $request){
        $datas = DB::table('items')->offset($request->start)->limit($request->offset)->get();
        return Response::json($datas);
    }

    public function getAllItems(){
        $users = Item::all();
        return $users->toJson(JSON_PRETTY_PRINT);
    }
}
