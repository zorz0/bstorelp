# Beit Khairat Souf Featured Work

##### added helper function to get the direction of content based on locale

```php 
use Illuminate\Support\Facades\App;

function getDirection(): string{
    $locale = App::getLocale();

    return match ($locale) {
        'ar' => 'rtl',
        default => 'ltr',
    };
}
```

##### added another one to check for text align based on Direction

```php
function getAlign(): string{
    return match (getDirection()){
        'ltr' => 'left',
        'rtl' => 'right',

        default => 'ltr'
    };
}

```

```
    1- add custom helper file in app/
    2- add file in composer.json
    
    "autoload": {
        "psr-4": {
            "App\\": "app/",
            "Database\\Factories\\": "database/factories/",
            "Database\\Seeders\\": "database/seeders/"
        },
        "files": ["app/helpers.php"]
    }
    
    3- run composer dump-autoload 
```


```
define dynamic localization
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

using trans('') method to get localied String in non-blade templates
for example using it in pure class with SweetAlert

using __('') to get localized String in blade template
using __('',[key => value]) to replace sub-string

```

```
   making Arabic the default localization
   basically the localization is dynamic and is optained from server or web it self
   we define our locale in config/app.php and bloc dynamic localization
   
   'locale' => 'ar',
   'hideDefaultLocaleInURL' => true,
   'useAcceptLanguageHeader' => false,

   
```

<p align="right">
    made work with <span style="color:red;">❤</span>
</p>
