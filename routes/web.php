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

// home page 
Route::get('/', [
    'as' => 'home_path',
    'uses' => 'PagesController@home'
]);

// about page 
Route::get('/about', [
    'as' => 'about_path',
    'uses' => 'PagesController@about'
]);

// products page 
Route::get('/products', [
    'as' => 'products_path',
    'uses' => 'PagesController@products'
]);

// recipes page 
Route::get('/recipes', [
    'as' => 'recipes_path',
    'uses' => 'PagesController@recipes'
]);

// packing page 
Route::get('/packing', [
    'as' => 'packing_path',
    'uses' => 'PagesController@packing'
]);

// news page 
Route::get('/news', [
    'as' => 'news_path',
    'uses' => 'PagesController@news'
]);

// contact page 
Route::get('/contact', [
    'as' => 'contact_path',
    'uses' => 'PagesController@contact'
]);

// contact page 
Route::post('/contact', [
    'as' => 'contact_path',
    'uses' => 'PagesController@getContactForm'
]);

// order page 
Route::get('/order', [
    'as' => 'order_path',
    'uses' => 'PagesController@order'
]);

// order page 
Route::post('/order', [
    'as' => 'order_path',
    'uses' => 'PagesController@getOrderForm'
]);

//get selected products
Route::post('/get-selected-products', [
    'as' => 'get_selected_products_path',
    'uses' => 'PagesController@getSelectedProducts'
]);

// Place Order
Route::post('/place-order', [
    'as' => 'place_order_path',
    'uses' => 'PagesController@placeOrder'
]);

Route::get('lang/{locale}', function ($locale) {
    session()->put('locale', $locale);
    return redirect()->back();
});