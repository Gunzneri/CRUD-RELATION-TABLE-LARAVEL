<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categori;
use App\Creator;
use App\Product;
use DB;

class ProductController extends Controller
{
	public function index(){
		$products = Product::All();

		$products = DB::table('products')
		->join('creators', 'creators.id', '=', 'products.creator_id')
		->join('categoris', 'categoris.id', '=', 'products.categori_id')
		->get();
		$data = array(
			'title' => 'index',
			'no'    => 1,
			'products'  => $products,
		);
		return view('product.index',$data);
	}

	public function create()
	{
		$categoris  = Categori::All();
		$creators   = Creator::All();
		$data = array(
			'title'     => request('title'),
			'price'	    => request('price'),
			'categoris' => $categoris,
			'creators'  => $creators,
		);
		return view('product.create',$data);
	}
	public function store()
	{
		Product::create([
			'title'     	=> request('title'),
			'price'	    	=> request('price'),
			'creator_id' 	=> request('creator_id'),
			'categori_id'  	=> request('categori_id')
		]);
		return redirect('/product');
	}

	public function destroy(Product $product){
		$product->delete();
		return redirect()->route('product.index');
	}
}
