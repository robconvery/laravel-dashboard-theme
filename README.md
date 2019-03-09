# laravel-dashboard-theme
Dashboard theme as Laravel package

## Prerequisites
* An existing Laravel app
* Font-awesome installed and configured
* Existing Laravel routing should contain routes with names `home` & `logout` 

## Install
Add the following to <code>composer.json</code>

Create a `repositories` section

```
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/robconvery/laravel-dashboard-theme"
    }
],
"require-all": true,
```

Add to `require` section

```
"require": {
    ...
    "robconvery/laravel-dashboard-theme": "^1.0"
},    
```

Run `composer update`

After update has completed...

Run `artisan vendor:publish --tag=dashboard`

Add the following to `resources/sass/app.scss`

```$xslt
@import "vendor/font-awesome/brands";
@import "vendor/font-awesome/fontawesome";
@import "vendor/font-awesome/regular";
@import "vendor/font-awesome/solid";
@import "vendor/font-awesome/v4-shims";

@import "dashboard/dashboard";
```

Amend `webpack.mix.js`, adding the two bottom lines

```$xslt
mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .copy('resources/assets/dashboard', 'public/images')
   .copy('resources/sass/vendor/webfonts', 'public/webfonts');
   
if (mix.inProduction()) {
    mix.version();
}
      
```

Run `npm run dev` or `npm run production`
