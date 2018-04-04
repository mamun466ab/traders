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

//Login controller
Route::get('/login','WbdbizController@login');
Route::post('/check-info','WbdbizController@checkInfo');

//Controller for left menu
Route::get('/','WbdbizController@index');//home page

Route::get('/profile','WbdbizController@profile');//profile page

Route::get('/buy-product','WbdbizController@buy_pdt');//buying cost
Route::get('/labor-cost','WbdbizController@labor_cost');//buying cost
Route::get('/others-cost','WbdbizController@others_cost');//buying cost
Route::get('/unloading-machin','WbdbizController@unloadingMachin');//buying cost
Route::get('/unloading-Boat','WbdbizController@unloadingBoat');//buying cost

Route::get('/sell-product','WbdbizController@sellProduct');//Selling cost
Route::get('/sell-labor-cost','WbdbizController@sellLaborCost');//Selling cost
Route::get('/generator-cost','WbdbizController@generatorCost');//Selling cost
Route::get('/gift','WbdbizController@gift');//Selling cost
Route::get('/others-cost-sell','WbdbizController@othersCostSell');//Selling cost
Route::get('/fixed-asset','WbdbizController@fixedAsset');//Selling cost

Route::get('/cash-in-out','WbdbizController@cashInOut');//bank
Route::get('/bank-report','WbdbizController@bankReport');//bank report

Route::get('/donate','WbdbizController@donate');//donate


Route::get('/fixed-asset-report','WbdbizController@fixedAssetReport');//donate

Route::match(['get', 'post'], '/product-report','WbdbizController@reportProduct');//Buying report
Route::match(['get', 'post'], '/boat-report','WbdbizController@boatReport');//Buying report
Route::match(['get', 'post'], '/labor-cost-report','WbdbizController@laborCostReport');//Buying report
Route::match(['get', 'post'], '/unloading-machin-report','WbdbizController@unloadingMachinReport');//Buying report
Route::match(['get', 'post'], '/others-cost-report','WbdbizController@othersCostReport');//Buying report

Route::match(['get', 'post'], '/product-sell-report','WbdbizController@productSellReport');//Selling report
//
//Controller for Top nevigation bar
Route::get('/add-project','WbdbizController@add_project'); //Project
Route::get('/add-product-name','WbdbizController@add_product_name'); //staff
Route::get('/add-boat','WbdbizController@addBoat'); //staff
Route::get('/add-unit','WbdbizController@addUnit');//staff
Route::get('/add-others-cost','WbdbizController@addOthersCost');//staff
Route::get('/gift-to','WbdbizController@giftTo');//staff
Route::get('/add-fixed-asset','WbdbizController@addFixedAsset');//staff

Route::get('/new-contractor','WbdbizController@new_contructor');//contructor
Route::get('/block-contractor','WbdbizController@block_contructor');//contructor
Route::get('/contractor-info-edit','WbdbizController@edit_contructor');//contructor

Route::get('/new-product','WbdbizController@new_product');//settings
Route::get('/product-grade','WbdbizController@product_grade');//settings
Route::get('/unit','WbdbizController@unit');//settings
//
//For user action
Route::get('/logout','WbdbizController@usrLogout');//settings
Route::post('/add-project','WbdInsertController@addProject');//settings

//link action
Route::get('/project/{id}','WbdBizActionController@project');
//Route::get('/dashboard','WbdbizController@dashboard');
//form action
Route::post('/buy-product','WbdBizActionController@buyProduct');//Buy Product
Route::post('/labor-cost','WbdBizActionController@laborCost');
Route::post('/others-cost','WbdBizActionController@others_cost');
Route::post('/unloading-machin','WbdBizActionController@unloadingMachin');
Route::post('/unloading-boat','WbdBizActionController@unloadingBoat');
Route::post('/pdt-ttl','WbdBizActionController@pdtTtl');
Route::post('/add-boat','WbdBizActionController@addBoat');
Route::post('/add-unit','WbdBizActionController@addUnit');
Route::post('/add-ors-cst','WbdBizActionController@addOrsCst');
Route::post('/gift-to-nm','WbdBizActionController@giftToNm');

Route::post('/sell-product','WbdBizActionController@sellProduct');//Sell Product
Route::post('/sell-labor-cost','WbdBizActionController@sellLaborCost');//Sell Product
Route::post('/generator-cost','WbdBizActionController@generatorCost');
Route::post('/gift','WbdBizActionController@gift');
Route::post('/others-cost-sell','WbdBizActionController@othersCostSell');
Route::post('/add-fixed-asset','WbdBizActionController@addFixedSsset');
Route::post('/fixed-asset','WbdBizActionController@fixedAsset');

Route::post('/bank-in-out','WbdBizActionController@bankInOut');



//For super admin panel
Route::get('/sAdmin-Login','SuperAdminController@sadmin_login');//super admin
Route::get('/sAdmin-Logout','SuperAdminController@sadmin_logout');//super admin
Route::get('/sAdmin-cPanel','SuperAdminController@index');//super admin
Route::post('/sadmin-login-action','SuperAdminController@login_action');//super admin
Route::get('/add-organization','SuperAdminController@add_organization');//super admin
Route::post('/add-company','SuperAdminController@add_company');//super admin
Route::get('/division/{id}','SuperAdminController@division');//super admin
Route::get('/city/{id}','SuperAdminController@city');//super admin

//Settings
Route::get('/screen-lock','WbdbizController@screenLock');//settings
