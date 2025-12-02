<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Artisan;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     * 
     * Auto-limpia el caché si se detecta un archivo marcador
     */
    public function boot(): void
    {
        // Verificar si hay un archivo de marcador para limpiar caché
        // Este archivo es creado por el deploy en GitHub Actions
        $cacheResetFile = storage_path('cache-reset.flag');
        
        if (file_exists($cacheResetFile)) {
            try {
                // Limpiar todos los cachés automáticamente
                Artisan::call('config:clear', [], null);
                Artisan::call('cache:clear', [], null);
                Artisan::call('view:clear', [], null);
                
                // Eliminar el archivo marcador después de limpiar
                @unlink($cacheResetFile);
            } catch (\Exception $e) {
                // Silenciosamente ignorar errores de Artisan
            }
        }
    }
}
