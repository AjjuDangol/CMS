<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Models\Rating;

class RatingController extends Controller
{
    public function index($itemId) {
        $this->itemId = $itemId;
        $items = Item::where('itemId', $this->itemId)->first();
        return view('frontend.rating', compact('items'));
    }

    public function create(Request $request){
        $request->validate([
            'review'=>'required',
        ]);
        $rating = new Rating();
        $rating->itemId = $request->itemId;
        $rating->rating = $request->rating;
        $rating->review = $request->review;
        $rating->save();
        return back()->with('message','Recorded created successfully.');
    }

    public function all() {
        $ratings = Rating::all();
        return view('admin.AdminRating', compact('ratings'));
    }
}
