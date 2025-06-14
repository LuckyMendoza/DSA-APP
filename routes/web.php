<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

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

Route::get('/run-artisan', function () {
    $key = request('key');
    $command = request('command');

    if ($key !== 'supersecretkey123') {
        abort(403, 'Unauthorized');
    }

    Artisan::call($command);
    return Artisan::output();
});