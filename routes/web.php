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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',function(){
     
    $data=[
        'heading'=>'Blogs',
        'listings'=>Listing::all()
    ];

    return view('listings',$data);
});

Route::get('/{id}',function($id){
    $data=[
        'listing'=>Listing::find($id)
    ];
   
    return view('listing',$data);

});
