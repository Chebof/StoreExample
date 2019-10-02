<?php

namespace App\Http\Controllers;

use App\Goods;
use Illuminate\Http\Request;

class GoodsController extends Controller
{
    public function index()
    {
        $goods = Goods::all();
        return view('store.goods',['goods'=>$goods]);
    }
}
