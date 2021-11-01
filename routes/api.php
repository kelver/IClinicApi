<?php

use App\Http\Controllers\PrescriptionController;
use Illuminate\Support\Facades\Route;

Route::post('/prescriptions', [PrescriptionController::class, 'store']);
