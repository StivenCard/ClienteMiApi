<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CosumirApiWebController;

/* Route::get('/', function () {
    return redirect()->route('estudiantes.index');
}); */

Route::get('/',[CosumirApiWebController::class,'index']);

// web.php

Route::prefix('consumir')->group(function () {
    Route::resource('estudiantes', CosumirApiWebController::class);
});
