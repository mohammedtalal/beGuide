<?php

use App\Company;

Route::Auth();
Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );


/*================ Start Dashboard Routes  ================*/
Route::group(['middleware' => ['web','auth']], function () {

	Route::get('/dashboard', 'HomeController@index')->name('dashboard');

	// Start Categories Controller Routes
	Route::get('admin/categories','admin\CategoryController@index')->name('categories.index');
	Route::get('admin/categories/create','admin\CategoryController@create')->name('categories.create');
	Route::post('admin/categories/store','admin\CategoryController@store')->name('categories.store');
	Route::get('admin/categories/edit/{id}','admin\CategoryController@edit')->name('categories.edit');
	Route::post('admin/categories/update/{id}','admin\CategoryController@update')->name('categories.update');
	Route::delete('admin/categories/delete/{id}','admin\CategoryController@destroy')->name('categories.destroy');
	/* Sub-Categories */  
	Route::get('admin/subCategories','admin\CategoryController@getSubCategories')->name('categories.subCategories');
// End Categories Controller Routes

// Start Companies Controller Routes
	Route::get('admin/companies','admin\CompanyController@index')->name('companies.index');
	Route::get('admin/companies/create','admin\CompanyController@create')->name('companies.create');
	Route::post('admin/companies/store','admin\CompanyController@store')->name('companies.store');
	Route::get('admin/companies/edit/{id}','admin\CompanyController@edit')->name('companies.edit');
	Route::post('admin/companies/update/{id}','admin\CompanyController@update')->name('companies.update');
	Route::delete('admin/companies/delete/{id}','admin\CompanyController@destroy')->name('companies.destroy');
// End Companies Controller Routes

// Start Branches Controller Routes
	Route::get('admin/branches','admin\BranchController@index')->name('branches.index');
	Route::get('admin/branches/create','admin\BranchController@create')->name('branches.create');
	Route::post('admin/branches/store','admin\BranchController@store')->name('branches.store');
	Route::get('admin/branches/edit/{id}','admin\BranchController@edit')->name('branches.edit');
	Route::post('admin/branches/update/{id}','admin\BranchController@update')->name('branches.update');
	Route::delete('admin/branches/delete/{id}','admin\BranchController@destroy')->name('branches.destroy');
// End Branches Controller Routes

// Start Tags Controller Routes
	Route::get('admin/tags','admin\TagController@index')->name('tags.index');
	Route::post('admin/tags/store','admin\TagController@store')->name('tags.store');
	Route::get('admin/tags/edit/{id}','admin\TagController@edit')->name('tags.edit');
	Route::post('admin/tags/update/{id}','admin\TagController@update')->name('tags.update');
	Route::delete('admin/tags/delete/{id}','admin\TagController@destroy')->name('tags.destroy');
// End Tags Controller Routes

// Start Contact-Us Controller Routes
	Route::get('admin/contact','admin\ContactController@index')->name('admin.contact.index');
	Route::get('admin/contact/create','admin\ContactController@create')->name('contact.create');
	Route::post('admin/contact/store','admin\ContactController@store')->name('contact.store');
	Route::get('admin/contact/edit/{id}','admin\ContactController@edit')->name('contact.edit');
	Route::post('admin/contact/update/{id}','admin\ContactController@update')->name('contact.update');
	Route::delete('admin/contact/delete/{id}','admin\ContactController@destroy')->name('contact.destroy');
// End Contact-Us Controller Routes

// Start about-us Controller Routes
	Route::get('admin/about/create','admin\AboutUsController@create')->name('admin.about.create');
	Route::post('admin/about/store','admin\AboutUsController@store')->name('admin.about.store');
// End about-us Controller Routes

// Start admin add-Company Controller Routes
	Route::get('admin/add-company/create','admin\addCompanyController@create')->name('admin.addCompany.create'); //key-value pairs
	Route::post('admin/add-company/store','admin\addCompanyController@store')->name('admin.addCompany.store'); //key-value pairs
// End admin add-Company Controller Routes

// Start admin add-Company Controller Routes
	// get -> pending companies , post -> return pending to approved 
	Route::get('admin/companies/pending','admin\CompanyOwnerController@getPendingCompanies')->name('admin.pendingCompanies');
	Route::post('admin/add-company/approve','admin\CompanyOwnerController@companiesApproved')->name('admin.addCompany.approve'); 
	// get -> approved companies , post -> return approved to pending 
	Route::get('admin/companies/approved','admin\CompanyOwnerController@getApprovedCompanies')->name('admin.approvedCompanies'); 
	Route::post('admin/add-company/pending','admin\CompanyOwnerController@changeCompanyToPending')->name('admin.addCompany.pending'); 
// End admin add-Company Controller Routes


// Start mainData Controller Routes
	Route::get('admin/landingPage/create','admin\landingPageController@create')->name('landingPage.create');
	Route::post('admin/landingPage/store','admin\landingPageController@store')->name('landingPage.store');
// End mainData Controller Routes

// Start subscribes Controller Rosutes
	Route::post('/home','admin\SubscribeController@store')->name('subscribe.store');
	Route::get('admin/subscribe','admin\SubscribeController@index')->name('subscribe.index');
	Route::get('admin/subscribe/edit/{id}','admin\SubscribeController@edit')->name('subscribe.edit');
	Route::post('admin/subscribe/update/{id}','admin\SubscribeController@update')->name('subscribe.update');
	Route::delete('admin/subscribe/delete/{id}','admin\SubscribeController@destroy')->name('subscribe.destroy');
// End subscribes Controller Routes

// Start Blog Controller Routes
	Route::get('admin/blog','admin\BlogController@index')->name('blog.index');
	Route::get('admin/blog/create','admin\BlogController@create')->name('blog.create');
	Route::post('admin/blog/store','admin\BlogController@store')->name('blog.store');
	Route::get('admin/blog/edit/{id}','admin\BlogController@edit')->name('blog.edit');
	Route::post('admin/blog/update/{id}','admin\BlogController@update')->name('blog.update');
	Route::delete('admin/blog/delete/{id}','admin\BlogController@destroy')->name('blog.destroy');
// End Blog Controller Routes

// Start advertise Controller Routes
	Route::get('admin/advertise','admin\AdvertiseController@index')->name('advertise.index');
	Route::get('admin/advertise/create','admin\AdvertiseController@create')->name('advertise.create');
	Route::post('admin/advertise/store','admin\AdvertiseController@store')->name('advertise.store');
	Route::get('admin/advertise/edit/{id}','admin\AdvertiseController@edit')->name('advertise.edit');
	Route::post('admin/advertise/update/{id}','admin\AdvertiseController@update')->name('advertise.update');
	Route::delete('admin/advertise/delete/{id}','admin\AdvertiseController@destroy')->name('advertise.destroy');
// End advertise Controller Routes

// Start Our team Controller Routes
	Route::get('admin/team','admin\TeamController@index')->name('team.index');
	Route::get('admin/team/create','admin\TeamController@create')->name('team.create');
	Route::post('admin/team/store','admin\TeamController@store')->name('team.store');
	Route::get('admin/team/edit/{id}','admin\TeamController@edit')->name('team.edit');
	Route::post('admin/team/update/{id}','admin\TeamController@update')->name('team.update');
	Route::delete('admin/team/delete/{id}','admin\TeamController@destroy')->name('team.destroy');
// End Our team Controller Routes

});

/*================ End Dashboard Routes  ================*/


/* ========================================================================================================= */


/*================ Start Site Routes  ================*/

	Route::get('/', function() {
		return redirect()->route('landingPage.index');
	}); // key-value pairs
	
	// Start landingPage Controller Routes
		Route::get('home','site\LandingController@index')->name('landingPage.index'); // key-value pairs

		// Route::get('search-result/{searchkey}','site\searchResultController@searchResult')->name('search-result');
		Route::get('/search','site\searchResultController@searchResult')->name('search-result');
	// End landingPage Controller Routes

	// Start profile Controller Routes
		Route::get('LP/{branch}','site\ProfileController@index')->name('profile.index');

		Route::get('profile/{id}/map','site\ProfileController@map')->name('profile.map');

		Route::post('profile/{id}','site\ProfileController@sendEmailToCompany')->name('profile.sendEmailToCompany'); // for sending emails

	// End profile Controller Routes

	// Start about-us Controller Routes
		Route::get('about-us','site\aboutUsController@index')->name('about.index'); // key-value pairs
	// End about-us Controller Routes

	// Start site Contact-Us Controller Routes
		Route::get('contact-us','site\ContactController@index')->name('contact.index'); // key-value pairs
		Route::post('contact-us','site\ContactController@sendEmail')->name('contact.sendEmail'); 

	// End site Contact-Us Controller Routes

	// Start site Contact-Us Controller Routes
		Route::get('add-company','site\addCompanyController@index')->name('addCompany.index'); // key-value pairs
		Route::post('add-company/details','site\addCompanyController@ownerDetails')->name('addCompany.ownerDetails');
	// End site Contact-Us Controller Routes

	// Start Blogs Controller Routes
		Route::get('blogs','site\BlogController@index')->name('allBlogs');
		Route::get('blog/{title}','site\BlogController@showBlog')->name('showBlog');
	// End Blogs Controller Routes

	// Start Companies Controller Routes
		Route::get('all-companies','site\CompaniesController@index')->name('all-companies');	
		Route::get('company/{id}','site\CompaniesController@show')->name('company.show');
	// End Companies Controller Routes
		
		Route::get('categories',function() {
			$categories = \App\Category::all();
			return $categories;
		});

		Route::get('categories/{id}',function($id) {
			$categories = App\Category::find($id);
			return $categories;
		});


/*=========  End Site Routes ========*/

Auth::routes();