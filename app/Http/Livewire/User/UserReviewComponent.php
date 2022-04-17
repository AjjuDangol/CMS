<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Item;
use App\Models\Menu;
use App\Models\Rating;
use App\Models\Review;

class UserReviewComponent extends Component
{
    public $itemId;
    public $rating;
    public $comment;

    public function mount($itemId){
    $this->itemId = $itemId;
    }

    public function render()
    {
        $Item = Item::find($this->itemId);
        return view('livewire.user.user-review-component',['Item'=>$Item])->layout('layouts.main');
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'rating' => 'required',
            'comment' => 'required'
        ]);
    }

    public function addReview(){
        $this->validate([
            'rating' => 'required',
            'comment' => 'required'
        ]);

        $review = new Rating();
        $review->rating = $this->rating;
        $review->comment = $this->comment;
        $review->itemId = $this->itemId;

        $review->save();


        $item = Item::find($this->itemId);
        $item->review_status= true;
        $item->save();
        session()->flash('message','successful');
    }
    public function menu() {
        $item = Item::all();
        $menu = Menu::all();
        return view('livewire.user.user-review-component', compact('menu','item'));
    }
}
