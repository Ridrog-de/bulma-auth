# Laravel Auth with Bulma

Route, Controller and Views for Login, Register and Password Reset

**WIP: Created from a noob ... so don't use it**

## Installation

1. Require the Package

```
composer require ridrog/bulma-auth
```

2. Add the ServiceProvider  

to the providers array in: _config/app.php_
```
'providers' => [
        .............

        Ridrog\BulmaAuth\BulmaAuthServiceProvider::class,

        .............
    ],
```

Add these two lines to the composer.json file from your laravel installation to use the dev version of this package
```
"minimum-stability": "dev",
"prefer-stable" : true
```

## Usage

1. Create your Masterview
2. Include Bulma css
3. Link to /login and register  
4. done.....

  
  ----------------------------
  
**Note:**

You can still use ```php artisan make:auth``` for the scaffolding of the Masterview.
Or create your own.

If you remove ```Auth::routes();``` from ```php artisan make:auth``` , the routes from the packages will be active.


---------------------------------------------

## Configuration

Publish all Files (Config + Views)

**Publish the config File**

```
php artisan vendor:publish --tag=bulma-auth-views
```

or 

**Publish the config File**

```
php artisan vendor:publish --tag=bulma-auth-config
```

**Options:**

masterview: The path + name from the masterview
 
section: The name of the "content" section