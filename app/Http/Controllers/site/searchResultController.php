   <?php

namespace App\Http\Controllers\site;

use AlgoliaSearch\search;
use App\Blog;
use App\Branch;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class searchResultController extends Controller
{
    public function searchResult(Request $request) {
    	$allBranches = Branch::search($request->search)->get();
    	$allBranches->load('companies');
    	$blogs = Blog::orderBy( DB::raw('RAND()'))->take(3)->get();
    	return view('site/searchResult.searchResult',compact('allBranches','blogs'));
    } 
}
