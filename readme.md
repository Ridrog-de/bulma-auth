# Laravel Auth with BulmaScaffolds your laravel app with bulma.io.  Masterview, Login, Register, Passwords, Pagination..**WIP: Created from a noob ... so don't use it**Version: 0.1.1---------------------------------------```php artisan make:bulma-auth```------------------------------------------## InstallationA. Require the Package```composer require ridrog/bulma-auth```B. Add the Command  @ _app/console/kernel.php_```use Ridrog\BulmaAuth\Console\MakeBulmaAuthCommand;```and ```protected $commands = [        ....        MakeBulmaAuthCommand::class        ....    ];```C. Run the command```php artisan make:bulma-auth```D. Compile the frontend stuff```npm install --save-dev bulma font-aweseome```and ```npm run dev```-------------------------------------------**What happend?**We copy a lot of stuff into the app  - A Masterview with header, footer and some sections- A modified Version of the Home and the Welcome View- Views for login/register and password resets- Two Controller (WelcomeController and HomeController)- Sass, with all the bulma variables and fontawesome- Bootstrap.js, only vue and axios.- Font-awesome fonts- A pagination partial          