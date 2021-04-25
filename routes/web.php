<?php

Route::redirect('/', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes(['register' => true]);
// Admin


Route::group([
    'prefix' => 'receptionest',
    'as' => 'receptionest.',
    'namespace' => 'Receptionest',
    'middleware' => ['auth']
], function () {
    Route::get('/', 'HomeController@index')->name('home');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth','admin']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Rooms
    Route::delete('rooms/destroy', 'RoomsController@massDestroy')->name('rooms.massDestroy');
    Route::resource('rooms', 'RoomsController');

    // Events
    Route::delete('events/destroy', 'EventsController@massDestroy')->name('events.massDestroy');
    Route::resource('events', 'EventsController');

    Route::get('system-calendar', 'SystemCalendarController@index')->name('systemCalendar');

    Route::get('search-room', 'BookingsController@searchRoom')->name('searchRoom');
    Route::post('book-room', 'BookingsController@bookRoom')->name('bookRoom');

    Route::get('my-credits', 'BalanceController@index')->name('balance.index');
    Route::post('add-balance', 'BalanceController@add')->name('balance.add');

    Route::resource('transactions', 'TransactionsController')->only(['index']);
});

//these route belongs to AvailAbleTest
Route::get('available-tests','AvailableTestController@index')->name('available-tests');
Route::get('available-test-create','AvailableTestController@create')->name('available-test-create');
Route::POST('availale-tests-store','AvailableTestController@store')->name('availale-tests-store');
Route::get('availabel-tests-show/{id}','AvailableTestController@show')->name('availabel-tests-show');
Route::get('availabel-tests-edit/{id}', 'AvailableTestController@edit')->name('availabel-tests-edit');
Route::put('availabel-tests-update/{id}', 'AvailableTestController@update')->name('availabel-tests-update');
Route::DELETE('avaiable-test-delete/{id}','AvailableTestController@destroy')->name('avaiable-test-delete');

// these route belongs to TestPerformeed
Route::get('test-performed-edit/{id}', 'TestsPerformedController@edit')->name('test-performed-edit');
Route::get('test-performed-show/{id}','TestsPerformedController@show')->name('test-performed-show');
Route::get('tests-performed','TestsPerformedController@index')->name('tests-performed');
Route::get('create','TestsPerformedController@create')->name('create');
Route::post('test-performed','TestsPerformedController@store')->name('test-performed');

   
Route::put('performed-test-update/{id}', 'TestsPerformedController@update')->name('performed-test-update');
Route::DELETE('performed-test-delete/{id}','TestsPerformedController@destroy')->name('performed-test-delete');
Route::get('changeStatus', 'TestsPerformedController@changeStatus');

// these route belongs to PatientController
Route::get('patient-list', 'PatientController@index')->name('patient-list');
Route::get('patient-create','PatientController@create')->name('patient-create');
Route::post('patient-store','PatientController@store')->name('patient-store');
Route::get('patient-show/{id}','PatientController@show')->name('patient-show');
Route::get('patient-edit/{id}', 'PatientController@edit')->name('patient-edit');
Route::put('patient-update/{id}', 'PatientController@update')->name('patient-update');
Route::DELETE('patient-delete/{id}','PatientController@destroy')->name('patient-delete');


// thses are the route for CatagoryController
Route::get('catagory-list', 'CatagoryController@index')->name('catagory-list');
Route::get('catagory-create','CatagoryController@create')->name('catagory-create');
Route::post('catagory-store','CatagoryController@store')->name('catagory-store');
Route::get('catagory-show/{id}','CatagoryController@show')->name('catagory-show');
Route::get('catagory-edit/{id}', 'CatagoryController@edit')->name('catagory-edit');
Route::put('catagory-update/{id}', 'CatagoryController@update')->name('catagory-update');
Route::DELETE('catagory-delete/{id}','CatagoryController@destroy')->name('catagory-delete');


//receptiones Create Patient
Route::get('receptionest-patient-create','ReceptionestController@create')->name('receptionest-patient-create');
Route::post('receptionest-patient-store','ReceptionestController@store')->name('receptionest-patient-store');
Route::get('receptionest-patient-show/{id}','ReceptionestController@show')->name('receptionest-patient-show');
Route::get('receptionest-patient-edit/{id}', 'ReceptionestController@edit')->name('receptionest-patient-edit');
Route::DELETE('receptionest-patient-delete/{id}','ReceptionestController@destroy')->name('receptionest-patient-delete');
Route::put('receptionest-patient-update/{id}', 'ReceptionestController@update')->name('receptionest-patient-update');



Route::get('product/create', 'ProductController@create')->name('product.create');
Route::get('product/{product}', 'ProductController@show')->name('product.show');
