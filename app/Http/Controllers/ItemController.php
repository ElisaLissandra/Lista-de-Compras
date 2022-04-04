<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(){

     $itens = Item::all();

     return view('itens.index', ['itens' => $itens]);
    }
}
