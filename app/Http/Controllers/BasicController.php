<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Dish;

class BasicController extends Controller
{
    public function home()
    {
        return view("static.home");
    }
    public function menu(Request $request)
    {
        $category = Category::all();

        $dishes = Dish::query();

        if ($request->has('category_id')) {
            $dishes->where('category_id', $request->category_id);
        }

        $dishes = $dishes->get();

        return view("static.menu", compact('dishes', 'category'));
    }
    public function about()
    {
        return view("static.about");
    }
    public function contacts()
    {
        return view("static.home");
    }
}
