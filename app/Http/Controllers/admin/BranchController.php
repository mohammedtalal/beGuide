<?php

namespace App\Http\Controllers\admin;

use App\Branch;
use App\Company;
use App\Http\Controllers\Controller;
use App\Http\Requests\BranchRequest;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function index() {
        $branches  = Branch::orderby('id','asc')->paginate(10);
        return view('admin/branches.index',compact('branches'));
    }

    public function create() {
        $companies = Company::all();
        return view ('admin/branches.create',compact('companies'));
    }

    public function store() {
        $branchRequest = new BranchRequest;
        $this->validate(request(), [
            'company_id'    => 'required',
            'address'       => 'required',
            'phone'         => 'required|regex:/(01)[0-9]{9}/',
            'lat'           => 'required',
            'lng'          => 'required',
            'name'          =>  'required'
        ]);
        $branchRequest->persistCreateBranch();
        return redirect()->route('branches.index')->with('success','Branch Created Successfully');
    }

    public function edit($id) {
        $branch = Branch::find($id);
        $companies = Company::all();
        return view('admin/branches.edit' ,compact('branch','companies'));
    }

    public function update(BranchRequest $request, $id) {
        $this->validate(request(), [
            'company_id'    => 'required',
            'address'       => 'required',
            'phone'         => 'required',
            'lat'           => 'required',
            'lng'          => 'required',
            'name'          =>  'required'
        ]);
        $branch = Branch::find($id);
        $branch->address = request('address');
        $branch->name = str_ireplace(' ', '-',request('name'));
        $branch->lat = request('lat');
        $branch->lng = request('lng');
        $branch->phone = request('phone');
        $branch->company_id = request('company_id');
        $branch->save();
        return redirect()->route('branches.index')->with('success','Category Updated successfully');
    }

    public function destroy($id) {
        $branch = Branch::find($id);
        $branch->delete();
        return redirect()->route('branches.index')->with('danger','Deleted Category successfully');
    } 
}
