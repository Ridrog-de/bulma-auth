<?php

namespace Ridrog\BulmaAuth\Console;

use Illuminate\Console\Command;
use Illuminate\Console\DetectsApplicationNamespace;

class MakeBulmaAuthCommand extends Command
{
    use DetectsApplicationNamespace;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:bulma-auth {--views : Only scaffold the authentication views}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Scaffold bulma login and registration views and routes';

    /**
     * The views that need to be exported.
     *
     * @var array
     */
    protected $views = [
        'layouts\app.blade.php' => 'layouts/app.blade.php',
        'layouts\app\footer.blade.php' => 'layouts/app/footer.blade.php',
        'layouts\app\navbar.blade.php' => 'layouts/app/navbar.blade.php',

        'layouts\shared\csrf.blade.php' => 'layouts/shared/csrf.blade.php',
        'layouts\shared\globalmeta.blade.php' => 'layouts/shared/globalmeta.blade.php',

        'home.blade.php' => 'home.blade.php',
        'welcome.blade.php' => 'welcome.blade.php',

        'auth\login.blade.php' => 'auth/login.blade.php',
        'auth\register.blade.php' => 'auth/register.blade.php',
        'auth\passwords\email.blade.php' => 'auth/passwords\email.blade.php',
        'auth\passwords\reset.blade.php' => 'auth/passwords\reset.blade.php',

    ];

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function fire()
    {
        $this->createDirectories()
            ->exportViews()
            ->copyLogo()
            ->copyController()
            ->copyRoutes()
            ->copySass();

        $this->info("---------------------------------------");
        $this->info("| Done");
        $this->info("| Next steps: ");
        $this->info("| npm install --save-dev bulma");
        $this->info("| npm run dev");
        $this->info("---------------------------------------");
    }

    protected function createDirectories()
    {
        if (! is_dir(base_path('resources/views/layouts/app'))) {
            mkdir(base_path('resources/views/layouts/app'), 0755, true);
        }

        if (! is_dir(base_path('resources/views/layouts/shared'))) {
            mkdir(base_path('resources/views/layouts/shared'), 0755, true);
        }

        if (! is_dir(base_path('resources/views/auth/passwords'))) {
            mkdir(base_path('resources/views/auth/passwords'), 0755, true);
        }

        if (! is_dir(base_path('public/img/logo'))) {
            mkdir(base_path('public/img/logo'), 0755, true);
        }

        return $this;
    }

    protected function exportViews()
    {
        foreach ($this->views as $key => $value) {
            copy(
                __DIR__.'/Views/'.$key,
                base_path('resources/views/'.$value)
            );
        }

        return $this;
    }

    protected function copyLogo()
    {
        copy(
            __DIR__.'/Assets/logo/bulma.png',
            base_path('public/img/logo/bulma.png')
        );

        return $this;
    }

    protected function copyRoutes()
    {
        copy(
            __DIR__.'/Routes/web.php',
            base_path('routes/web.php')
        );

        return $this;
    }

    protected function copyController()
    {
        copy(
            __DIR__.'/Controller/HomeController.php',
            base_path('app/Http/Controllers/HomeController.php')
        );

        copy(
            __DIR__.'/Controller/WelcomeController.php',
            base_path('app/Http/Controllers/WelcomeController.php')
        );

        return $this;
    }

    protected function copySass()
    {
        copy(
            __DIR__.'/Assets/sass/app.scss',
            base_path('resources/assets/sass/app.scss')
        );

        copy(
            __DIR__.'/Assets/sass/_variables.scss',
            base_path('resources/assets/sass/_variables.scss')
        );

        return $this;
    }

}
