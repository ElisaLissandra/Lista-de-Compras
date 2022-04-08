<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {

     $itens = Item::all();

     return view('itens.index', ['itens' => $itens]);
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
