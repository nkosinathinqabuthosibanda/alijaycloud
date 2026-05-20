<?php

/**
 * ═══════════════════════════════════════════════════════════════════════════
 *  ALIJAY CLOUD — single configuration file (edit only the block below)
 *  Engineered by Icon Industries · Powered by Nextcloud (AGPL)
 * ═══════════════════════════════════════════════════════════════════════════
 *
 *  1. Fill in EDIT BELOW (database + email password + data path if needed)
 *  2. Upload this entire folder to your web root
 *  3. Open https://www.cloud.alijayempire.co.za and complete the installer (once)
 *  4. SSH: php occ maintenance:update:htaccess && bash bin/alijay-setup.sh
 */

$CONFIG = [

	// ─── EDIT BELOW (only section you must change) ───────────────────────────
	'dbuser' => '',
	'dbpassword' => '',
	'mail_smtppassword' => 'PUT_EMAIL_PASSWORD_HERE',
	'datadirectory' => '/home/u618418973/domains/cloud.alijayempire.co.za/private_html/data',
	/** Public site — https://www.cloud.alijayempire.co.za */
	'alijay_url' => 'https://www.cloud.alijayempire.co.za',
	// ─── END EDIT ────────────────────────────────────────────────────────────

	'installed' => false,

	// Alijay Cloud
	'theme' => 'alijay',
	'defaultapp' => 'files',
	'customclient_desktop' => '',
	'customclient_ios' => '',
	'customclient_android' => '',
	'simpleSignUpLink.shown' => false,
	'knowledgebaseenabled' => false,

	// Database
	'dbtype' => 'mysql',
	'dbhost' => 'localhost',
	'dbname' => 'nextcloud',
	'dbtableprefix' => 'oc_',

	// Host / HTTPS (filled from alijay_url below)
	'trusted_domains' => [],
	'overwritehost' => '',
	'overwriteprotocol' => 'https',
	'overwrite.cli.url' => '',
	'htaccess.RewriteBase' => '/',
	'logo_url' => '',

	// South Africa defaults
	'default_phone_region' => 'ZA',
	'default_language' => 'en',
	'default_locale' => 'en_ZA',
	'default_timezone' => 'Africa/Johannesburg',
	'logtimezone' => 'Africa/Johannesburg',

	// Mail (Hostinger)
	'mail_domain' => 'cloud.alijayempire.co.za',
	'mail_from_address' => 'reset',
	'mail_smtpmode' => 'smtp',
	'mail_smtphost' => 'smtp.hostinger.com',
	'mail_smtpport' => 465,
	'mail_smtpsecure' => 'ssl',
	'mail_smtpauth' => true,
	'mail_smtpauthtype' => 'LOGIN',
	'mail_smtpname' => 'reset@cloud.alijayempire.co.za',
	'mail_send_plaintext_only' => false,
	'mail_smtpdebug' => false,

	// Performance
	'memcache.local' => '\\OC\\Memcache\\APCu',
	'filesystem_check_changes' => 1,
	'enable_previews' => true,
	'preview_max_x' => 2048,
	'preview_max_y' => 2048,
	'preview_max_memory' => 256,

	// Security & maintenance
	'auth.bruteforce.protection.enabled' => true,
	'ratelimit.protection.enabled' => true,
	'lost_password_link' => '',
	'maintenance' => false,
	'maintenance_window_start' => 1,
	'trashbin_retention_obligation' => 'auto',
	'versions_retention_obligation' => 'auto',
	'log_type' => 'file',
	'loglevel' => 2,
	'upgrade.disable-web' => false,
	'allow_local_remote_servers' => true,
];

// All public URLs from one field (www.cloud.alijayempire.co.za)
$alijayBase = rtrim((string)($CONFIG['alijay_url'] ?? ''), '/');
if ($alijayBase !== '') {
	$host = parse_url($alijayBase, PHP_URL_HOST) ?: 'www.cloud.alijayempire.co.za';
	$apex = preg_replace('/^www\./i', '', $host);

	$CONFIG['logo_url'] = $alijayBase;
	$CONFIG['overwrite.cli.url'] = $alijayBase;
	$CONFIG['overwritehost'] = $host;
	$CONFIG['lost_password_link'] = $alijayBase . '/login/flow/resetpassword';
	$CONFIG['trusted_domains'] = array_values(array_unique([$apex, $host]));
}
