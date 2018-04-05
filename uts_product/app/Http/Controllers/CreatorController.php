<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Creator;

class CreatorController extends Controller
{
	public function index(){
		$creators = Creator::All();
		$data = array(
			'creators' => $creators,
			'no'        => 1
		);
		return view('creator.index',$data);
	}
	public function create(){
		$data = array('title'   => 'Creator');
		return view('creator.create',$data);
	}
	public function store(){
		Creator::create([
			'name_creator'  => request('name_creator'),
			'no_hp'	    	=> request('no_hp'),
			'email'     	=> request('email')
		]);
		return redirect('/creator');
	}
	public function edit(Creator $creator)
	{
		$data = array(
			'title'       => 'Creator',
			'creator'     => $creator
		);
		return view('creator.edit',$data);
	}
    
	public function update(Creator $creator)
	{   
		$creator->update([
			'name_creator'      => request('name_creator'),
			'no_hp'	    => request('no_hp'),
			'email'     => request('email')
		]);
		return redirect('/creator');
	}

	public function destroy(Creator $creator){
		$creator->delete();
		return redirect()->route('creator.index');
	}
}