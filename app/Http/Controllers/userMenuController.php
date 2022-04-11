<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Item;
use App\Models\Rating;
use App\Models\User;

class userMenuController extends Controller
{
    public function menu() {
        $item = Item::all();
        $menu = Menu::all();
        return view('frontend.menu', compact('menu','item'));
    }

    public function postStar (Request $request, User $post) {
        $rating = new Rating;
        $rating->id = User::user()->id;
        $rating->rating = $request->input('star');
        $post->ratings()->save($rating);
        return redirect()->back();
  }
}
