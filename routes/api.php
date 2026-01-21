<?php

use Lib\Route;
use App\Controllers\AllControler;

// Route::post('/inserta_empleado',[AllControler::class, 'inserta'] );

Route::post('/inserta_empleado',[AllControler::class, 'insertaEmpleado'] );
Route::post('/inserta_propiedades',[AllControler::class, 'insertaPropiedades'] );
Route::post('/buscaEmpPropidades',[AllControler::class, 'buscaEmpPropidades'] );
Route::post('/buscaEmpleadoEdicion',[AllControler::class, 'buscaEmpleadoEdicion'] );
Route::post('/buscaPropiedadesEmpleado',[AllControler::class, 'buscaPropiedadesEmpleado'] );
Route::post('/actualizaAltaEmpleado',[AllControler::class, 'actualizaAltaEmpleado'] );
Route::post('/actualizaPropiedades',[AllControler::class, 'actualizaPropiedades'] );
Route::post('/buscaEmpleado_PT',[AllControler::class, 'buscaEmpleado_PT'] );

// Route::get('/todos', [AllControler::class, 'index2']);

// Route::get('/todos2', [AllControler::class, 'index']);

// Route::get('/consulta',[AllControler::class, 'consulta'] );

Route::dispatch();


