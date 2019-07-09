# laravel-dashboard-theme
Dashboard theme as Laravel package

## Prerequisites
* An existing Laravel app
* Font-awesome installed and configured
* Existing Laravel routing should contain routes with names `home` & `logout`

### Installing font awesome

Download from the font awesome website. https://fontawesome.com/download

Create the following folder and add the fontawesome files `resources/assets/vendor`

Create the following folder structures containing the following files.

`resources/assets/vendor/font-awesome`
 
 ```$xslt
_animated.scss
_bordered-pulled.scss
_core.scss
_fixed-width.scss
_icons.scss
_larger.scss
_list.scss
_mixins.scss
_rotated-flipped.scss
_screen-reader.scss
_shims.scss
_stacked.scss
_variables.scss
brands.scss
fontawesome.scss
regular.scss
solid.scss
v4-shims.scss
```

`resources/assets/vendor/webfonts`

```$xslt
fa-brands-400.eot
fa-brands-400.svg
fa-brands-400.ttf
fa-brands-400.woff
fa-brands-400.woff2
fa-regular-400.eot
fa-regular-400.svg
fa-regular-400.ttf
fa-regular-400.woff
fa-regular-400.woff2
fa-solid-900.eot
fa-solid-900.svg
fa-solid-900.ttf
fa-solid-900.woff
fa-solid-900.woff2
```     

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


