<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {

     $itens = Item::all();
     $total = 0;

     foreach($itens as $item){
     $total += floatval($item -> valor) * floatval($item -> unidade);
     }

     return view('itens.index', ['itens' => $itens, 'total' => $total]);
    }

    public function create()
    {

        return view('itens.create');
    }

    public function store(Request $request)
    {
        Item::create($request->all());
        return redirect()->route('itens-index');
    }

}
