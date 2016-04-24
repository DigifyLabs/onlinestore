<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests\SearchRequest;
use App\Http\Requests;

class ProductsController extends Controller
{
    public function getSearch()
    {
	    $categories = Category::lists('name', 'id');
		return view('products.search',compact('categories'));
    }

	public function postSearch(SearchRequest $request)
	{
		return Product::search($request->except('_token'));
	}
}
