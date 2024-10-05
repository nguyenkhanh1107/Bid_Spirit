<?php

namespace App\Http\Controllers;
use \App\Models\Item;

class CategoriesController extends Controller
{
    public function index()
    {
        // Lấy dữ liệu các items từ cơ sở dữ liệu
        $items = Item::All();
        // Truyền dữ liệu vào view
        return view('pages.categoriespage', compact('items'));
    }
}
