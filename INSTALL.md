# Alijay Cloud — copy & install

**Alijay Cloud** is your branded file platform. **Engineered by Icon Industries.**  
You only configure **one file**: `config/config.php` (the block marked **EDIT BELOW**).

## Requirements

- PHP 8.2+ with MySQL, GD, curl, zip, intl, mbstring
- MySQL/MariaDB database created in hosting panel
- Optional: PHP **APCu** (recommended on Hostinger)

## Install in 4 steps

### 1. Edit config (only file you must touch)

Open `config/config.php` and set:

| Key | What to set |
|-----|-------------|
| `dbuser` | Database username |
| `dbpassword` | Database password |
| `mail_smtppassword` | SMTP password for `reset@cloud.alijayempire.co.za` |
| `datadirectory` | Absolute path to private data folder (create it, writable by PHP) |
| `alijay_url` | Your public URL (e.g. `https://www.cloud.alijayempire.co.za`) |

Everything else (branding, theme, locale, mail host, security) is pre-set for Alijay Cloud.

### 2. Upload

Upload the **entire** project to your web root (where `index.php` lives).  
Ensure `config/config.php` is **not** world-readable (chmod `640`).

### 3. Web installer

Open **https://www.cloud.alijayempire.co.za** and finish the setup wizard **once**.  
Do not set `'installed' => true` manually before the wizard completes.

### 4. After install (SSH / terminal)

From the install directory:

```bash
php occ maintenance:update:htaccess
php occ maintenance:theme:update
bash bin/alijay-setup.sh
```

`alijay-setup.sh` applies **Alijay Cloud** name, iCloud-style colors, and hides Nextcloud promo links in the admin UI.

## What is already branded

- Product name: **Alijay Cloud**
- Theme: `themes/alijay` (logos, Apple-style UI, login screen)
- Footer: **Engineered by Icon Industries**
- Default app after login: **Files**
- No Nextcloud signup / knowledge-base promos in config

## Upgrades

After each major Nextcloud upgrade, compare:

- `themes/alijay/core/templates/layout.guest.php`
- `themes/alijay/core/templates/layout.public.php`

with the new files in `core/templates/` and merge any upstream fixes.

## License

Nextcloud core remains **AGPL-3.0**. If you redistribute this stack, comply with AGPL (source offer, notices).
