<?php

use App\Http\Controllers\ProdukController;

Route::get('/produk', [ProdukController::class, 'apiIndex']);

