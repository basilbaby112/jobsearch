<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;
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
    return view('welcome');
});

Route::get('/blog',function(){
     
    $data=[
        'heading'=>'Blogs',
        'blogs'=>Listing::all()
    ];

    return view('blog',$data);
});

Route::get('/blog/{id}',function($id){
    $data=[
        'blog'=>Listing::find($id)
    ];
   
    return view('blog1',$data);

});
