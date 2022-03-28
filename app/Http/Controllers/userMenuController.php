<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Item;

class userMenuController extends Controller
{
    public function menu() {
        $item = Item::all();
        $menu = Menu::all();
        return view('frontend.menu', compact('menu','item'));
    }
}
