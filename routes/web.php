<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home.index');

Route::get('/run-artisan', function () {
    if (
        app()->environment('production') &&
        request()->query('key') === env('DEPLOY_KEY')
    ) {
        Artisan::call('optimize:clear');
        Artisan::call('config:cache');
        Artisan::call('migrate', ['--force' => true]);
        return '✔ Artisan commands executed!';
    }

    abort(403);
});