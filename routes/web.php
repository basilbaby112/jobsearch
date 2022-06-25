<?php

use Illuminate\Support\Facades\Route;

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
        'heading'=>'Our Blogs',
        'blogs'=>[
            [
                'id'=>'1',
                'title'=>'Blog 1',
                'description'=>'It is a long established fact that a reader will be 
                                distracted by the readable content of a page when looking at its layout. 
                                The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, 
                                as opposed to using  making it look like readable English. 
                                Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search
                                will uncover many web sites still in their infancy. Various versions 
                                have evolved over the years, sometimes by accident, sometimes on purpose 
                                (injected humour and the like).'
            ],
            [
                'id'=>'2',
                'title'=>'Blog 2',
                'description'=>'It is a long established fact that a reader will be 
                                distracted by the readable content of a page when looking at its layout. 
                                The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, 
                                as opposed to using  making it look like readable English. 
                                Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search
                                will uncover many web sites still in their infancy. Various versions 
                                have evolved over the years, sometimes by accident, sometimes on purpose 
                                (injected humour and the like).'
            ],
            [
                'id'=>'3',
                'title'=>'Blog 3',
                'description'=>'It is a long established fact that a reader will be 
                                distracted by the readable content of a page when looking at its layout. 
                                The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, 
                                as opposed to using  making it look like readable English. 
                                Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search
                                will uncover many web sites still in their infancy. Various versions 
                                have evolved over the years, sometimes by accident, sometimes on purpose 
                                (injected humour and the like).'
            ]
        ]
    ];

    return view('blog',$data);
});
