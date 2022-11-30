<?php
Route::prefix('department')
    ->namespace('Department')
    ->group(function(){
        Route::get('', ['uses' => "Collections\DepartmentCollection@collect"]);
        Route::get('{id}', ['uses' => "Repositories\DepartmentRepository@data"]);
        Route::post('', ['uses' => "Repositories\DepartmentRepository@save"]);
        Route::put('{id}', ['uses' => "Repositories\DepartmentRepository@update"]);
        Route::delete('{id}', ['uses' => "Repositories\DepartmentRepository@delete"]);
    });

Route::prefix('lead')
    ->namespace('Lead')
    ->group(function (){
        Route::get('', ['uses' => "Collections\LeadCollection@collect"]);
        Route::get('{id}', ['uses' => "Repositories\LeadRepository@data"]);
        Route::post('', ['uses' => "Repositories\LeadRepository@save"]);
        Route::put('{id}', ['uses' => "Repositories\LeadRepository@update"]);
        Route::delete('{id}', ['uses' => "Repositories\LeadRepository@delete"]);
    });

Route::prefix('timeline')
    ->namespace('Timeline')
    ->group(function (){
        Route::get('', ['uses' => "Collections\TimelineCollection@collect"]);
        Route::get('{id}', ['uses' => "Repositories\TimelineRepository@data"]);
        Route::post('', ['uses' => "Repositories\TimelineRepository@save"]);
        Route::put('{id}', ['uses' => "Repositories\TimelineRepository@update"]);
        Route::delete('{id}', ['uses' => "Repositories\TimelineRepository@delete"]);
    });

Route::prefix('card')
    ->namespace('Card')
    ->group(function (){
        Route::get('', ['uses' => "Collections\CardCollection@collect"]);
        Route::get('{id}', ['uses' => "Repositories\CardRepository@data"]);
        Route::post('', ['uses' => "Repositories\CardRepository@save"]);
        Route::put('{id}', ['uses' => "Repositories\CardRepository@update"]);
        Route::delete('{id}', ['uses' => "Repositories\CardRepository@delete"]);
    });

Route::prefix('cardProgress')
    ->namespace('CardProgress')
    ->group(function (){
        Route::get('', ['uses' => "Collections\CardProgressCollection@collect"]);
        Route::get('{id}', ['uses' => "Repositories\CardProgressRepository@data"]);
        Route::post('', ['uses' => "Repositories\CardProgressRepository@save"]);
        Route::put('{id}', ['uses' => "Repositories\CardProgressRepository@update"]);
        Route::delete('{id}', ['uses' => "Repositories\CardProgressRepository@delete"]);
    });
