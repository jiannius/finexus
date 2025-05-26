<?php

use Illuminate\Support\Facades\Route;

Route::prefix('__finexus')->as('__finexus')->withoutMiddleware('web')->group(function () {
    Route::get('success', [\App\Http\Controllers\FinexusController::class, 'success'])->name('.success');
    Route::get('failed', [\App\Http\Controllers\FinexusController::class, 'failed'])->name('.failed');
    Route::get('cancel', [\App\Http\Controllers\FinexusController::class, 'cancel'])->name('.cancel');
    Route::get('query', [\App\Http\Controllers\FinexusController::class, 'query'])->name('.query');
});
