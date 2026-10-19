<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
return view('welcome');
});

Route::view('/remote-control', 'pages.remote-control')
    ->name('remote-control');


Route::view('/index', 'pages.overview.index')->name('index');
Route::view('/home', 'pages.overview.home')->name('home');
Route::view('/getting-started', 'pages.overview.getting-started')->name('getting-started');


Route::view('/telemetry', 'pages.navigation-environment.telemetry')->name('telemetry');


// Route::view(
//     '/telemetry',
//     'pages.navigation-environment.telemetry'
// )->name('telemetry');

Route::get('/pages/{module}/{page}', function (
    string $module,
    string $page
) {
    $allowedModules = [
        'overview',
        'flight_operations',
        'vehicle_setup',
        'navigation_environment',
        'vision_imaging',
        'monitoring_diagnostics',
        'safety',
        'developer_tools',
        'help_documentation',
    ];

    abort_unless(in_array($module, $allowedModules, true), 404);

    $view = $module . '.' . $page;

    abort_unless(view()->exists($view), 404);

    return view($view);
})->where([
    'module' => '[a-z_]+',
    'page' => '[a-z0-9_]+',
])->name('pages.show');
