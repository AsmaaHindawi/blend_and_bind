<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function showMenu()
    {
        $menuItems = MenuItem::select('item_id', 'name', 'category', 'price', 'availability', 'image')->get();
        return view('menu', compact('menuItems'));
    }

}
