<?php

namespace App\Http\Controllers;

use App\Goods;
use App\Http\Requests\createGoodsRequest;

class GoodsController extends Controller
{
    public function index()
    {
        $goods = Goods::all();
        return view('goods.index', ['goods' => $goods]);
    }

    public function create()
    {
        return view('goods.create');
    }

    public function store(createGoodsRequest $request)
    {

        Goods::create($request->all());

        return redirect()->route('goods.index');
    }

    public function show($id)
    {
        $goods1 = Goods::find($id);

        return view('goods\show', ['good1' => $goods1]);
    }

    public function edit($id)
    {
        $goods1 = Goods::find($id);

        return view('goods.edit', ['good1' => $goods1]);
    }

    public function update(createGoodsRequest $request, $id)
    {
        $goods1 = Goods::find($id);

        $goods1->fill($request->all());
        $goods1->save();

        return redirect()->route('goods.index');
    }

    public function destroy($id)
    {
        Goods::find($id)->delete();

        return redirect()->route('goods.index');
    }
}
