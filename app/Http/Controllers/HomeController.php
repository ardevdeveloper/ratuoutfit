<?php

namespace App\Http\Controllers;

use App\Models\Picture;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\ProductEntry;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(ProductEntry $productEntry, Product $product)
    {
        $detail_product = $productEntry->with(['product', 'size', 'colour', 'category']);
        $data_product = $product->get();
        $rating = $product;

        return view('upage.index', compact(['data_product', 'rating']));
    }

    public function detail($slug)
    {
        $size = ProductEntry::with(['size'])->where('product_slug', $slug)->groupBy('size_id')->get();
        $colour = ProductEntry::with(['colour'])->where('product_slug', $slug)->groupBy('colour_id')->get();
        $category = ProductEntry::with(['category'])->where('product_slug', $slug)->groupBy('category_id')->get();
        $product = Product::where('slug', $slug)->first();
        $picture = Picture::where('product_slug', $slug)->get();
        $rating = $product;

        // dd($colour);

        return view('upage.detail', compact(['size', 'colour', 'category', 'product', 'picture', 'rating']));
    }

    public function getData()
    {
        return view();
    }
}
