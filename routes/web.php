<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewFormulir;




route::get('/', [ViewFormulir::class, 'index']);
route::post('/', [ViewFormulir::class, 'store']);
