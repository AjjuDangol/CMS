<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Menu;
use Illuminate\Http\Request;
use App\Models\home;

class HomeController extends Controller
{
    // public function home() {
    //     $item = Item::all();
    //     $menu = Menu::all();
    //     return view('admin.adminhome', compact('menu','item'));
    // }
    public function home() {
        $item = Item::all();
        $menu = Menu::all();
        return view('frontend.home.home', compact('menu','item'));
    }


    //add data in item
    // public function create(Request $request) {
    //     $home = new Home();
    //     $home->itemName = $request->itemName;
    //     $home->menuDescription = $request->menuDescription;
    //     $home->aboutDescription = $request->aboutDescription;
    //     $mainimage = $request->file;
    //     $mainImg=time().'.'.$mainimage->getClientoriginalExtension();
    //     $request->file->move('image',$mainImg);
    //     $home->image=$mainImg;
    //     $menuimage = $request->file;
    //     $menuName=time().'.'.$menuimage->getClientoriginalExtension();
    //     $request->file->move('images',$menuName);
    //     $home->images=$menuName;
    //     $home->save();
    //     return back()->with('message', 'Item added successfully');
    // }

    //used to show data
    // public function all() {
    //     $homes = Home::all();
    //     return view('admin.Home.allhome', compact('homes'));
    // }

    //get id and show edit page
    // public function edit($homeId) {
    //     $home = Home::find($homeId);
    //     return view('admin.Home.edithome', compact('homes'));
    // }

    //update data of item
    // public function update(Request $request) {
    //     $homes = Home::find($request->homeId);
    //     $homes->itemName = $request->itemName;
    //     $homes->menuDescription = $request->menuDescription;
    //     $homes->aboutDescription = $request->aboutDescription;
    //     $mainimage = $request->file;
    //     $mainImg=time().'.'.$mainimage->getClientoriginalExtension();
    //     $request->file->move('image',$mainImg);
    //     $homes->image=$mainImg;
    //     $menuimage = $request->file;
    //     $menuName=time().'.'.$menuimage->getClientoriginalExtension();
    //     $request->file->move('image',$menuName);
    //     $homes->image=$menuName;
    //     $homes->save();
    //     return back()->with('message', 'updated successfully.');
    // }

    // public function delete($homeId) {
    //     Home::where('homeId', $homeId)->delete();
    //     return back()->with('message', 'deleted successfully.');
    // }
}
