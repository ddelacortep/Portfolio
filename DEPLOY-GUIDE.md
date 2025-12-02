# 🚀 Deploy Automático - Sistema de Limpieza de Caché

Este proyecto utiliza **GitHub Actions** para desplegar automáticamente cambios a producción sin SSH, solo con FTP.

## 📋 Métodos de Limpieza de Caché Implementados

### ✅ Método 1: Script PHP vía HTTP (RECOMENDADO)
- **Archivo**: `public/clear-cache.php`
- **Trigger**: Se ejecuta automáticamente después del deploy
- **Seguridad**: Protegido con token `CLEAR_CACHE_TOKEN`
- **Ventaja**: No requiere SSH, funciona con FTP

```bash
# Uso manual
curl "https://portfolio.ddelacortep.tech/public/clear-cache.php?token=TU_TOKEN_AQUI"
```

### ✅ Método 2: Auto-limpieza en AppServiceProvider
- **Archivo**: `app/Providers/AppServiceProvider.php`
- **Trigger**: Se ejecuta cuando Laravel arranca
- **Activador**: Archivo marcador `storage/cache-reset.flag`
- **Ventaja**: Backup automático si falla el Método 1

**Cómo funciona**:
1. El deploy crea `storage/cache-reset.flag`
2. Se sube vía FTP
3. La próxima visita a la web detecta el archivo
4. Laravel limpia caché automáticamente
5. El archivo se elimina

### ✅ Método 3: Versionado de Assets (Caché del navegador)
- **Archivos**: Todos los `.blade.php`
- **Parámetro**: `?v={{ time() }}`
- **Ventaja**: Fuerza al navegador a descargar versiones nuevas

## 🔧 Configuración Necesaria

### 1. Secrets en GitHub
Ve a **Settings → Secrets and variables → Actions** y añade:

```
FTP_SERVER              = ftpupload.net
FTP_USERNAME            = b12_40007949
FTP_PASSWORD            = [Tu contraseña]
CLEAR_CACHE_TOKEN       = [Token seguro que inventas]
```

### 2. Token de Seguridad (CLEAR_CACHE_TOKEN)
- Invéntate una contraseña fuerte (ej: `sk-prod-abc123xyz789def456`)
- No la compartas nunca
- Úsala en la URL del script PHP para validar solicitudes

## 📊 Flujo del Deploy

```
1. git push origin main
   ↓
2. GitHub Actions se activa
   ↓
3. Checkout del código
   ↓
4. Deploy FTP de todos los archivos
   ↓
5. Crear archivo marcador cache-reset.flag
   ↓
6. Subir archivo marcador vía FTP
   ↓
7. Intentar ejecutar clear-cache.php (Método 1)
   ↓
8. AppServiceProvider detectará el flag en próxima visita (Método 2)
   ↓
9. Navegador descarga assets actualizados con ?v=timestamp (Método 3)
```

## 🧪 Verificación Manual

### Verificar que el deploy funcionó:
```bash
# 1. Fuerza recarga del navegador sin caché
# Mac: Cmd + Shift + R
# Windows: Ctrl + Shift + R
# Linux: Ctrl + Shift + R

# 2. Abre la consola (F12) y busca los scripts JS
# Deberían tener ?v=TIMESTAMP diferente al anterior

# 3. Verifica que los cambios CSS/JS son visibles
```

### Verificar limpieza de caché automática:
```bash
# Revisa los logs de GitHub Actions
# Settings → Actions → Último workflow
# Busca "Limpiando caché"
```

## 🛠️ Troubleshooting

### "El código antiguo sigue apareciendo"
**Solución**:
1. Fuerza recarga sin caché: `Cmd+Shift+R` (Mac) o `Ctrl+Shift+R` (Windows)
2. Limpia caché del navegador en DevTools → Application
3. Verifica que el token `CLEAR_CACHE_TOKEN` es correcto

### "El script PHP no funciona"
**Posibles causas**:
- Token incorrecto en secrets de GitHub
- El archivo no se subió correctamente (verifica FTP)
- AppServiceProvider debería limpiar el caché en la próxima visita

### "El deploy no se ejecuta"
**Verificación**:
1. Ve a GitHub → Actions → workflows/deploy.yaml
2. Revisa los logs de error
3. Confirma que los secrets están configurados correctamente

## 📝 Notas Importantes

- El deploy **excluye automáticamente**:
  - `.git` y `.github`
  - `node_modules`
  - `.env` (archivo local)
  - `vendor` (librerías PHP)
  - Logs y sesiones
  - `package-lock.json` y `composer.lock`

- **No requiere SSH**: Solo FTP
- **Seguro**: Token de seguridad en cada limpieza
- **Triple redundancia**: 3 métodos para garantizar limpieza de caché

## 🚀 Próximas optimizaciones

- [ ] Enviar notificación al email cuando deploy finaliza
- [ ] Verificar estado de salud de la web post-deploy
- [ ] Rollback automático si la web cae
- [ ] Versioned assets con hash de contenido (mejor que timestamp)
