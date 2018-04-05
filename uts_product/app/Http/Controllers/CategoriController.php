<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categori;

class CategoriController extends Controller
{
	public function index(){
		$categoris = Categori::All();
		$data = array(
			'categoris' => $categoris,
			'no'        => 1
		);
		return view('categori.index',$data);
	}
	public function create(){
		$data = array('title'   => 'Categori');
		return view('categori.create',$data);
	}
	public function store(){
		Categori::create([
			'name'      => request('name'),
		]);
		return redirect('/categori');
	}
	public function edit(Categori $categori)
	{
		$data = array(
			'title'       => 'Categori',
			'categori'     => $categori
		);
		return view('categori.edit',$data);
	}

	public function update(Categori $categori)
	{   
		$categori->update([
			'name'      => request('name'),
		]);
		return redirect('/categori');
	}

	public function destroy(Categori $categori){
		$categori->delete();
		return redirect()->route('categori.index');
	}
}
