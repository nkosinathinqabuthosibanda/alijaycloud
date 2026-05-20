#!/usr/bin/env bash
# Alijay Cloud — one-time branding after web install (run from server root)
set -euo pipefail

ROOT="$(cd "$(dirname "$0")/.." && pwd)"
cd "$ROOT"

if ! command -v php >/dev/null 2>&1; then
	echo "php not found in PATH" >&2
	exit 1
fi

if [ ! -f config/config.php ]; then
	echo "config/config.php missing" >&2
	exit 1
fi

echo "Applying Alijay Cloud branding via occ…"

php occ config:app:set theming name --value="Alijay Cloud"
php occ config:app:set theming productName --value="Alijay Cloud"
php occ config:app:set theming slogan --value="Your files, everywhere you need them."
php occ config:app:set theming primary_color --value="#0071e3"
php occ config:app:set theming color --value="#f5f5f7"
php occ config:app:set theming disable-user-theming --value="1" 2>/dev/null || true

php occ config:system:set theme --value="alijay"
php occ config:system:set defaultapp --value="files"
php occ config:system:set simpleSignUpLink.shown --type=boolean --value=false
php occ config:system:set knowledgebaseenabled --type=boolean --value=false
php occ config:system:set customclient_desktop --value=""
php occ config:system:set customclient_ios --value=""
php occ config:system:set customclient_android --value=""

php occ maintenance:theme:update 2>/dev/null || true
php occ maintenance:update:htaccess 2>/dev/null || true

echo "Done. Alijay Cloud is ready — engineered by Icon Industries."
