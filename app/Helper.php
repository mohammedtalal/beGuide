<?php

// Website Logo
function logo() {	
	$contact = \App\Contact::first();
    $path = $contact->logo;
    return $path;
}

// companies video -> preg to show youtuve link as iframe
function convertYoutube($videoUrl) {
    return preg_replace(
        "/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i",
        "<iframe src=\"//www.youtube.com/embed/$2\" allowfullscreen></iframe>",
        $videoUrl
    );
}

// advertises
function advertise($key) {	
	$advertise = \App\Advertise::first()->toArray();
    return $advertise[$key];
}

// main Data of website landing page
function mainData($key) {
	$mainData = \App\Setting::pluck('value','key')->toArray();
	return $mainData[$key];
}

// get number of pending requests
function numberOfPendingRequests() {
	$pendingCompanies = \App\CompanyOwner::where('status', 0)->get();
    $numOfCompaniesPending = count($pendingCompanies);
    return $numOfCompaniesPending;
}

// Number of 
function dashboardOverViewNumbers($key) {
	$categories = \App\Category::count();
	$subCategories = \App\Category::where('parent_id','!=',0)->count();
	$companies = \App\Company::count();
	$branches = \App\Branch::count();
	$pendingCompanies = \App\CompanyOwner::where('status',0)->count();
	$approvedCompanies = \App\CompanyOwner::where('status',1)->count();
	$subscribes = \App\Subscribe::count();


	$array = array(
		'categories'	=>	$categories,
		'subCategories'	=>	$subCategories,
		'companies'	=>	$companies,
		'branches'	=>	$branches,
		'pendingCompanies'	=>	$pendingCompanies,
		'approvedCompanies'	=>	$approvedCompanies,
		'subscribes'		=>  $subscribes
	);
	return $array[$key];
}