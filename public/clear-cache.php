<?php
/**
 * Script para limpiar el caché de Laravel vía HTTP
 * Uso: https://portfolio.ddelacortep.tech/public/clear-cache.php?token=TU_TOKEN
 * 
 * Limpia:
 * - Vistas compiladas
 * - Archivos de caché
 * - Sesiones
 * - Configuración cacheada
 */

header('Content-Type: text/plain; charset=utf-8');

// Validar token de seguridad
$expectedToken = getenv('CLEAR_CACHE_TOKEN') ?: $_SERVER['CLEAR_CACHE_TOKEN'] ?? 'default-token';
$providedToken = $_GET['token'] ?? '';

if (empty($providedToken) || $providedToken !== $expectedToken) {
    http_response_code(403);
    exit("❌ Acceso denegado. Token inválido o no proporcionado.\n");
}

try {
    $basePath = __DIR__ . '/..';
    $clearCount = 0;

    // Función auxiliar para limpiar directorios
    function clearDirectory($dirPath, &$count) {
        if (!is_dir($dirPath)) {
            return;
        }
        
        $files = @scandir($dirPath);
        if ($files === false) {
            return;
        }
        
        foreach ($files as $file) {
            if ($file !== '.' && $file !== '..') {
                $path = $dirPath . '/' . $file;
                if (is_file($path)) {
                    @unlink($path);
                    $count++;
                }
            }
        }
    }

    // 1. Limpiar vistas compiladas
    $viewPath = $basePath . '/storage/framework/views';
    clearDirectory($viewPath, $clearCount);

    // 2. Limpiar caché general
    $cachePath = $basePath . '/storage/framework/cache';
    clearDirectory($cachePath, $clearCount);

    // 3. Limpiar sesiones
    $sessionsPath = $basePath . '/storage/framework/sessions';
    clearDirectory($sessionsPath, $clearCount);

    // 4. Intentar cargar Bootstrap de Laravel para ejecutar comandos
    $bootstrapPath = $basePath . '/bootstrap/app.php';
    if (file_exists($bootstrapPath)) {
        try {
            $app = require $bootstrapPath;
            
            if (method_exists($app, 'make')) {
                $artisan = $app->make('artisan');
                if ($artisan) {
                    @$artisan->call('config:clear');
                    @$artisan->call('cache:clear');
                    @$artisan->call('view:clear');
                }
            }
        } catch (\Throwable $e) {
            // Laravel puede no estar completamente inicializado, pero continuamos
            // ya que ya limpiamos los directorios manualmente
        }
    }

    // 5. Crear archivo de verificación
    $verificationFile = $basePath . '/storage/framework/last-cache-clear.txt';
    @file_put_contents($verificationFile, date('Y-m-d H:i:s'));

    http_response_code(200);
    echo "✅ Caché limpiado correctamente.\n";
    echo "📊 Archivos eliminados: $clearCount\n";
    echo "⏰ Timestamp: " . date('Y-m-d H:i:s') . "\n";
    
} catch (\Throwable $e) {
    http_response_code(500);
    echo "❌ Error: " . $e->getMessage() . "\n";
    exit(1);
}
