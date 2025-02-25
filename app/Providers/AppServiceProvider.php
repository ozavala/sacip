<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Registrar rutas de cada módulo
        $this->registerModuleRoutes();
    }

    protected function registerModuleRoutes(): void
    {
        foreach (glob(app_path('Modules/*/routes.php')) as $routeFile)
            {
                require $routeFile;
            }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Registrar migraciones de los módulos
        $this->loadMigrationsFrom([
            app_path('Modules/CRM/database/migrations'),
            // Agrega más rutas si tienes otros módulos
        ]);
    }
}
