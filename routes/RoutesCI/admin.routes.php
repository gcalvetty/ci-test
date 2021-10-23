<?php
use Illuminate\Support\Facades\Route;

Route::get('/', [
    'as' => 'Escritorio',
    'uses' => 'EstuController@index'])->middleware(Authorize::class . ':EscritorioView,'.RUDE::class);


