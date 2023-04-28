<?php

use Illuminate\Support\Facades\App;

function getDirection(): string{
    $locale = App::getLocale();

    return match ($locale) {
        'ar' => 'rtl',
        default => 'ltr',
    };
}

function getAlign(): string{
    return match (getDirection()){
        'ltr' => 'left',
        'rtl' => 'right',

        default => 'ltr'
    };
}
