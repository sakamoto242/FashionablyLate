<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', [ContactController::class, 'index']);
Route::post('/contacts/confirm', [ContactController::class, 'confirm']);
Route::post('/contacts', [ContactController::class, 'store']);
Route::post('/contacts/confirm', [ContactController::class, 'confirm']);
Route::post('/contacts/confirm', [ContactController::class, 'confirm']);
Route::post('/contacts', [ContactController::class, 'store']);
Route::post('/confirm', [ContactController::class, 'confirm']);
Route::post('/thanks', [ContactController::class, 'store']);
// 管理画面（一覧表示）
Route::get('/admin', [ContactController::class, 'admin']);

// 検索機能（後で使います）
Route::get('/admin/search', [ContactController::class, 'search']);

// 削除機能
Route::post('/admin/delete', [ContactController::class, 'destroy']);
Route::middleware('auth')->group(function () {
    Route::get('/admin', [ContactController::class, 'admin']);
    Route::get('/admin/search', [ContactController::class, 'search']);
    Route::post('/admin/delete', [ContactController::class, 'destroy']);
});
Route::delete('/admin/delete', [ContactController::class, 'destroy']);
// もし Controller 名が ContactController の場合
Route::get('/admin/export', [ContactController::class, 'export']);
// 例：ContactControllerのthanksメソッドへ
Route::post('/thanks', [ContactController::class, 'store']);