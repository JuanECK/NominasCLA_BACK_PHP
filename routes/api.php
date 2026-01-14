<?php

use Lib\Route;
use App\Controllers\AllControler;

// Route::post('/inserta_empleado',[AllControler::class, 'inserta'] );

Route::post('/inserta_empleado',[AllControler::class, 'insertaEmpleado'] );
Route::post('/inserta_propiedades',[AllControler::class, 'insertaPropiedades'] );
Route::post('/buscaEmpPropidades',[AllControler::class, 'buscaEmpPropidades'] );

// Route::get('/todos', [AllControler::class, 'index2']);

// Route::get('/todos2', [AllControler::class, 'index']);

// Route::get('/consulta',[AllControler::class, 'consulta'] );

Route::dispatch();


