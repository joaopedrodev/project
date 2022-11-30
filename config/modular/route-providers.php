<?php

$modules = array_filter(glob(app_path('Modules') . '/*'), 'is_dir');

foreach($modules as $modulePath):
    $module = pathinfo($modulePath, PATHINFO_FILENAME);
    $routeServiceProviderClassName = "App\Modules\\$module\RouteServiceProvider";
    if(class_exists($routeServiceProviderClassName))
        $providers[] = $routeServiceProviderClassName;

endforeach;
$providers[] = App\Providers\RouteServiceProvider::class;

