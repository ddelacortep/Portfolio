#!/bin/bash
# Script para simular la limpieza de caché manualmente
# Uso: ./manual-cache-clear.sh "tu-token-aqui"

if [ -z "$1" ]; then
    echo "❌ Error: Debes proporcionar el token"
    echo "Uso: $0 'CLEAR_CACHE_TOKEN'"
    exit 1
fi

TOKEN="$1"
URL="https://portfolio.ddelacortep.tech/public/clear-cache.php?token=$TOKEN"

echo "🔄 Limpiando caché manualmente..."
echo "URL: $URL"
echo ""

response=$(curl -s -w "\n%{http_code}" "$URL")
body=$(echo "$response" | head -n -1)
http_code=$(echo "$response" | tail -n 1)

echo "$body"
echo ""

if [ "$http_code" = "200" ]; then
    echo "✅ Limpieza exitosa (HTTP $http_code)"
    exit 0
elif [ "$http_code" = "403" ]; then
    echo "❌ Acceso denegado (HTTP $http_code)"
    echo "Verifica que el token sea correcto"
    exit 1
else
    echo "⚠️  Respuesta inesperada (HTTP $http_code)"
    exit 1
fi
