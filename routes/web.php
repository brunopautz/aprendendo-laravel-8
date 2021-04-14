<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')
        ->group(function () {

            /**
             * Routes Details Plan
             */
            Route::delete('plans/{url}/details/{idDetail}', [App\Http\Controllers\Admin\DetailPlanController::class, 'destroy'])->name('detail.plan.destroy');
            Route::get('plans/{url}/details/{idDetail}', [App\Http\Controllers\Admin\DetailPlanController::class, 'show'])->name('detail.plan.show');
            Route::put('plans/{url}/details/{idDetail}', [App\Http\Controllers\Admin\DetailPlanController::class, 'update'])->name('detail.plan.update');
            Route::get('plans/{url}/details/{idDetail}/edit', [App\Http\Controllers\Admin\DetailPlanController::class, 'edit'])->name('detail.plan.edit');
            Route::post('plans/{url}/details', [App\Http\Controllers\Admin\DetailPlanController::class, 'store'])->name('detail.plan.store');
            Route::get('plans/{url}/details/create', [App\Http\Controllers\Admin\DetailPlanController::class, 'create'])->name('detail.plan.create');
            Route::get('plans/{url}/details', [App\Http\Controllers\Admin\DetailPlanController::class, 'index'])->name('detail.plan.index');

            /**
             * Routes Plans
             */
            Route::any('plans/search', [App\Http\Controllers\Admin\PlanController::class, 'search'])->name('plans.search');
            Route::get('plans/create', [App\Http\Controllers\Admin\PlanController::class, 'create'])->name('plans.create');
            Route::put('plans/{url}', [App\Http\Controllers\Admin\PlanController::class, 'update'])->name('plans.update');
            Route::get('plans', [App\Http\Controllers\Admin\PlanController::class, 'index'])->name('plans.index');
            Route::post('plans', [App\Http\Controllers\Admin\PlanController::class, 'store'])->name('plans.store');
            Route::get('plans/{url}', [App\Http\Controllers\Admin\PlanController::class, 'show'])->name('plans.show');
            Route::delete('plans/{url}', [App\Http\Controllers\Admin\PlanController::class, 'destroy'])->name('plans.destroy');
            Route::get('plans/{url}/edit', [App\Http\Controllers\Admin\PlanController::class, 'edit'])->name('plans.edit');

            /**
             * Home Dashboard
             */
            Route::get('/', [App\Http\Controllers\Admin\PlanController::class, 'index'])->name('admin.index');       
});