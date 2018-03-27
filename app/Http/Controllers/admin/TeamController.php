<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Team;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\getClientOriginalName;

class TeamController extends Controller
{
    public function index() {
    	$teams = Team::paginate(10);
    	return view('admin/ourTeam.index',compact('teams'));
    }

    public function create() {
    	return view('admin/ourTeam.create');
    }

    public function store() {
    	$team = new Team;

    	$this->validate(request(), [
    		'name' 	=> 'required|min:2',
    		'position' 	=> 'required|min:2',
    		'image' => 'required|mimes:jpeg,bmp,png',
    	]);

    	$team->image = $team->uploadImage();
    	$team->name = request('name');
    	$team->position = request('position');
    	$team->save();

    	return redirect()->route('team.index')->with('success','Team member added successfully');
    }

    public function edit($id) {
		$team = Team::find($id);
    	return view('admin/ourTeam.edit',compact('team'));
    }

    public function update($id) {
		$team = Team::find($id);
		$this->validate(request(), [
    		'name' 	=> 'required|min:2',
    		'position' 	=> 'required|min:2',
    		'image' => 'required|mimes:jpeg,bmp,png',
    	]);
    	$team->image = $team->uploadImage();
    	$team->name = request('name');
    	$team->position = request('position');
    	$team->save();
    	return redirect()->route('team.index')->with('success','Team member updated successfully');
    }

    public function destroy($id) {
		$team = Team::find($id);
    	$team->delete();
        return redirect()->route('team.index')->with('danger','Team member deleted successfully');
    }


}
