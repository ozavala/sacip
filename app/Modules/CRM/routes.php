<?php

namespace App\Modules\CRM;


use App\Modules\CRM\Controllers\RoleController;
use Illuminate\Support\Facades\Route;
use App\Modules\CRM\Controllers\ParticipantController;

Route::prefix('crm')->group(function () {
    Route::get('/participants', [ParticipantController::class, 'index'])->name('crm.participants.index');
    Route::get('/participants/create', [ParticipantController::class, 'create'])->name('crm.participants.create');
    Route::post('/participants/store', [ParticipantController::class,'store'])->name('crm.participants.store');
    Route::get('/participants/{id}', [ParticipantController::class, 'edit'])->name('crm.participants.edit');  
    Route::put('/participants/{id}', [ParticipantController::class, 'update'])->name('crm.participants.update');
    Route::delete('/participants/{id}', [ParticipantController::class, 'destroy'])->name('crm.participants.destroy');

    // Add more routes as needed for your CRM module
    //Route::Resources(['/role', 'App\Modules\CRM\Controllers\RoleController']);
    Route::resource('/role', RoleController::class);


});