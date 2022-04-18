<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Rating as ModelsRating;
use Illuminate\Http\Request;

class Rating extends Controller
{
    public function index() {
        $items = Item::all();
        return view('frontend.rating', compact('items'));
    }

    public function create(Request $request) {
        $rating = new Rating();
        $rating->rating = $request->rating;
        $rating->review = $request->review;
        $rating->save();
        return back()->with('message','Menu created successfully.');
    }
}
