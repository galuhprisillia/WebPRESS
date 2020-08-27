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

Route::group(['middleware' => ['web']], function () {

    Route::get('/', 'MainController@index');

    Auth::routes();
    Route::get('/register', function() {
        return redirect('/');
    });

    Route::get('prediction-system', 'PredectionSystemController@index');
    Route::get('about', 'AboutController@index');

    Route::get('prediction-system/accountancy/result', 'AccountancyController@result');
    Route::get('prediction-system/accountancy/export', 'AccountancyController@export');
    Route::delete('prediction-system/accountancy/delete', 'AccountancyController@deleteAll');
    Route::post('upload/accountancy/import', 'AccountancyController@import');
    Route::resource('prediction-system/accountancy', 'AccountancyController');
    
    Route::get('prediction-system/marketing/result', 'MarketingController@result');
    Route::get('prediction-system/marketing/export', 'MarketingController@export');
    Route::delete('prediction-system/marketing/delete', 'MarketingController@deleteAll');
    Route::post('upload/marketing/import', 'MarketingController@import');
    Route::resource('prediction-system/marketing', 'MarketingController');
    
    Route::get('prediction-system/officeadministration/result', 'OfficeAdministrationController@result');
    Route::get('prediction-system/officeadministration/export', 'OfficeAdministrationController@export');
    Route::delete('prediction-system/officeadministration/delete', 'OfficeAdministrationController@deleteAll');
    Route::post('upload/officeadministration/import', 'OfficeAdministrationController@import');
    Route::resource('prediction-system/officeadministration', 'OfficeAdministrationController');

    Route::get('/AccountancyTemplate', 'GuideController@AccountancyTemplate');
    Route::get('/OfficeAdministrationTemplate', 'GuideController@OfficeAdministrationTemplate');
    Route::get('/MarketingTemplate', 'GuideController@MarketingTemplate');

    Route::resources([
        'homepage' => 'HomepageController',
        'jurusan'  => 'JurusanController',
        'upload'   => 'UploadController',
        'history'  => 'HistoryController',
        'guide'    => 'GuideController',
        'user'     => 'UserController',
    ]);
    
});



