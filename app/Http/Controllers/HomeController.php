<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Menu;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        $item = Item::all();
        $menu = Menu::all();
        return view('frontend.home', compact('menu','item'));
    }
}
