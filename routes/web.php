<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    if(auth()->user()){
        return redirect()->route('home');
    }else{
        return view('auth.login');
    }
})->name("base");

Route::middleware('auth')->group(function () {
	Route::middleware('active')->group(function () {
        Route::get('/home', 'HomeController@index')->name('home');
        Route::resource('/departments', 'Web\DepartmentController');
        Route::resource('/positions', 'Web\PositionController');
		Route::resource('/employees', 'Web\AdminUserController');
        Route::resource('/cases', 'Web\ReportedCaseController');

        Route::resource('/user', 'Web\UserController');
        Route::get('/{user}/active', 'Web\UserController@active')->name('user.active');

        Route::prefix('role')->group(function () {
            Route::get('/', 'Web\RoleController@index')->name('role');
            Route::get('/create', 'Web\RoleController@create')->name('role.create');
            Route::get('/{role}', 'Web\RoleController@show')->name('role.edit');
            Route::post('/', 'Web\RoleController@store')->name('role.store');
            Route::delete('/{role}', 'Web\RoleController@destroy')->name('role.delete');
            Route::put('/{role}', 'Web\RoleController@update')->name('role.update');
        });
	});
});

Route::get('/deactivated', function () {
    if (!auth()->user()) {
        redirect()->route("base");
    }

    return view('pages.all_users.deactivated');
})->name('deactivated');

Auth::routes();


// all template routes

Route::get('position', function () {
    return view('pages.position.forms.create');
})->name('position');

Route::get('cases', function () {
    return view('pages.cases.all-cases');
})->name('cases');

// Route::get('employees', function () {
//     return view('pages.employee.all-employees');
// })->name('employees');

Route::get('create-employees', function () {
    return view('pages.employee.forms.create');
})->name('create-employees');

Route::get('create-case', function () {
    return view('pages.cases.forms.create');
})->name('create-case');

Route::get('finalized-case', function () {
    return view('cases.finalized');
})->name('finalized-case');

Route::get('asigned-case', function () {
    return view('cases.asigned');
})->name('asigned-case');

Route::get('due-case', function () {
    return view('cases.due');
})->name('due-case');

Route::get('create-department', function () {
    return view('department.forms.create');
})->name('create-department');

Route::get('administrators', function () {
    return view('pages.admin.all-admins');
})->name('admin');


Route::get('create-administrators', function () {
    return view('admin.forms.create');
})->name('create-admin');