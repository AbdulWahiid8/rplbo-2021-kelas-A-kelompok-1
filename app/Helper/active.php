<?php

use Illuminate\Support\Facades\Route;

function active_item($route) {
    if(Route::is($route)) {
        return 'active';
    }
}

