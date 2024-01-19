<?php

use App\Http\Controllers\AdminController;
 Use App\Http\Controllers\directorController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\headOfSectionController;
use App\Http\Livewire\Store\AssetRegister;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\OfficeBearerController;

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


// Route::get('/', function () {
//     return view('index');
// });

// Auth::routes();
Route::post('/', [LoginController::class, 'authenticated'])->name('login');
Route::get('/', [LoginController::class, 'login_form'])->name('user.login');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::post('/user/login', [LoginController::class, 'authenticated'])->name('user.login');
// Route::get('/', function(){
//     return view('index');
//     } ) ->name('index');


    //ADMIN ROUTES
    Route::group(['prefix'=>'admin', 'middleware'=>'auth:web'], function(){
    // Route::get('/', [directorController::class, 'index']) ->name('index');

            // Route::get('welcome', [AdminController::class, 'welcome'])
            // ->name('admin.welcome');

            Route::post('logout', [LoginController::class, 'logout'])->name('admin.logout');


            Route::get('dashboard', [AdminController::class, 'dashboard'])
            ->name('admin.dashboard');

            Route::get('directorate', [AdminController::class, 'directorate'])
            ->name('admin.directorate');

            Route::get('admin/assets', [AdminController::class, 'assets'])
            ->name('admin.assets');

            Route::get('assettype', [AdminController::class, 'assettype'])
            ->name('admin.assettype');

            Route::get('assetclass', [AdminController::class, 'assetclass'])
            ->name('admin.assetclass');

            Route::get('departments', [AdminController::class, 'department'])
            ->name('admin.department');

            Route::get('condition', [AdminController::class, 'condition'])
            ->name('admin.condition');
            Route::get('section', [AdminController::class, 'section'])
            ->name('admin.department_section');

            Route::get('buildings', [AdminController::class, 'buildings'])
            ->name('admin.buildings');

            Route::get('floors', [AdminController::class, 'floors'])
            ->name('admin.floors');

            Route::get('rooms', [AdminController::class, 'rooms'])
            ->name('admin.rooms');

            Route::get('employees', [AdminController::class, 'employees'])
            ->name('admin.employees');

            Route::get('/user', [AdminController::class, 'user'])
            ->name('admin.user');

            Route::get('transfer', [AdminController::class, 'transfer'])
            ->name('admin.transfer');

            Route::get('request', [AdminController::class, 'request'])
            ->name('admin.request');

    });


    //routes for store
    Route::group(['prefix'=>'store','middleware' => 'auth:employee'], function(){

        Route::post('logout', [LoginController::class, 'logout'])->name('store.logout');

        Route::get('dashboard', [StoreController::class, 'storeDashboard'])
        ->name('store.dashboard');

        Route::get('registerAsset', [StoreController::class, 'RegisterAsset'])
        ->name('store.registerAsset');

        Route::get('editAsset/{asset_id}', [StoreController::class, 'EditAsset'])
        ->name('store.editAsset');

        // Route::livewire('/table', 'asset-table')->name('table.page');
        // Route::livewire('/edit-asset/{asset_id}', 'asset-register')->name('store.editAsset');

        Route::get('gamisRegister', [StoreController::class, 'gamisRegister'])
        ->name('store.gamisRegister');

        Route::get('assetInformation', [StoreController::class, 'assetInformation'])
        ->name('store.assetInformation');

        Route::get('assignAsset', [StoreController::class, 'assignAsset'])
        ->name('store.assignAsset');

        Route::get('assignedAsset', [StoreController::class, 'assignedAsset'])
        ->name('store.assignedAsset');

        Route::get('assetDisposition', [StoreController::class, 'assetDisposition'])
        ->name('store.assetDisposition');
    });

    //STOCK_CHECKER
    Route::group(['prefix'=>'stock-checker', 'middleware' => 'auth:employee'], function(){

        Route::get('dashboard', function(){   return view('stock_checker.dashboard');})
        ->name('stock_checker.dashboard');

        Route::get('assets_history', function(){ return view('stock_checker.assethistory');})
        ->name('stock-checker.assethistory');

        Route::get('assets_category', function(){ return view('stock_checker.assetcategory');})
        ->name('stock-checker.assetcategory');

        Route::get('assets_info', function(){  return view('stock_checker.assetinfo'); })
        ->name('stock-checker.assetinfo');

        Route::get('department', function(){ return view('stock_checker.department');})
        ->name('stock-checker.department');

        Route::get('assets_disposal', function(){ return view('stock_checker.assetdisposal'); })
        ->name('stock-checker.assetdisposal');

        Route::get('assets_report', function() { return view('stock_checker.report');})
        ->name('stock-checker.report');

        Route::get('profile', function() {return view('stock_checker.user'); })
        ->name('stock_checker.profile');
    });

    //estate routes
    Route::group(['prefix'=>'estate', 'middleware' => 'auth:employee'], function(){
        Route::get('category', function () { return view('estate.category');})->name('estate/category');
        Route::get('viewasset', function () {return view('estate.assetviews');});

        Route::get('now/{assetName}', function ($assetName) {return view('estate.assetviews.testingsirikwaway', ['assetName' => $assetName]);})
        ->name('now');

        Route::get('department', function () { return view('estate.departmentview');})->name('estate/department');
        Route::get('viewdepart/{departmentName}', function ($departmentName) {    return view('estate.assetviews.departmentviews', ['departmentName' => $departmentName]);
        })->name('viewdepart');
        Route::get('requests', function () { return view('estate.estaterequests');})->name('requests');

    });


    //DIRECTOR ROUTES
    Route::group(['prefix'=>'director', 'middleware' => 'auth:employee'], function(){
            Route::post('logout', [LoginController::class, 'logout'])->name('director.logout');

            Route::get('dashboard', [directorController::class, 'dashboard']) ->name('director.dashboard');

            Route::get('departmentSections',[directorController::class, 'departmentSections']) ->name('director.departmentSections');

            Route::get('departmentOffices',[directorController::class, 'departmentRooms']) ->name('director.departmentRooms');

            Route::get('departmentreport', [directorController::class, 'departmentreport']) ->name('director.departmentreport');

            Route::get('assignAsset', [directorController::class, 'assignAsset']) ->name('director.assignAsset');

            Route::get('assignedassetinfo', [directorController::class, 'assigned_asset_info']) ->name('director.assignedassetinfo');

            Route::get('assignedAsset', [directorController::class, 'assignedAsset'])
            ->name('director.assignedAsset');


    // Route::get('/', [directorController::class, 'index']) ->name('index');

            Route::get('assethistory', [directorController::class, 'assethistory']) ->name('director.assethistory');

            Route::get('assetassignment', [directorController::class, 'assetassignment']) ->name('director.assetassignment');

            Route::get('transferasset', [directorController::class, 'transferasset']) ->name('director.transferasset');
    });


    //headOfSection
    Route::group(['prefix'=>'headOfSection', 'middleware' => 'auth:employee'], function(){

        Route::post('logout', [LoginController::class, 'logout'])
            ->name('headOfSection.logout');

        Route::get('dashboard',[headOfSectionController::class,'dashboard'])
            ->name('headOfSection.dashboard');

        Route::get('AssetInformation', [headOfSectionController::class, 'assetInfo'])
            ->name('headOfSection.assetInfo');

        Route::get('assignedAssets', [headOfSectionController::class, 'assignedAssets'])
            ->name('headOfSection.assignedAssets');

        Route::get('assignAsset', [headOfSectionController::class, 'assignAsset'])
            ->name('headOfSection.assignAsset');

        Route::get('transferHistory', [headOfSectionController::class, 'transferasset'])
            ->name('headOfSection.transferAsset');

        Route::get('requests',[headOfSectionController::class,'assetRequests'])
            ->name('headOfSection.assetRequests');

        Route::get('my_requests',[headOfSectionController::class,'myAssetRequests'])
            ->name('headOfSection.myAssetRequests');

        Route::get('employee',[headOfSectionController::class,'employeeinfo'])
            ->name('headOfSection.employeeinfo');

        

        Route::get('transferasset', [headOfSectionController::class, 'transferasset'])
            ->name('headOfSection.transferasset');

        Route::post('/show-popup', 'PopupController@showPopup')->name('headOfSection.pop');
        Route::get('tempTransfer', [headOfSectionController::class, 'tempTransfer'])
            ->name('headOfSection.tempTransfer');

        Route::get('office',[headOfSectionController::class,'office']);

        Route::get('request', [headOfSectionController::class, 'headOfSection.request']);

    });


    Route::group(['prefix'=>'office-bearer', 'middleware' => 'auth:employee'], function(){ 
        Route::post('logout', [LoginController::class, 'logout'])->name('office-bearer.logout');

        Route::get('dashboard',[OfficeBearerController::class, 'dashboard'])->name('office-bearer.dashboard');

        Route::get('assigned-assets',[OfficeBearerController::class, 'assignedAssets'])->name('office-bearer.assignedAssets');
        
        Route::get('request_asset',[OfficeBearerController::class, 'requestAsset'])->name('office-bearer.requestAsset');
        
    });

