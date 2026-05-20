<?php

/**
 * Alijay Cloud — default branding (Icon Industries).
 * Activated via 'theme' => 'alijay' in config/config.php only.
 */

class OC_Theme {

	private const PRODUCT = 'Alijay Cloud';
	private const ENGINEER = 'Icon Industries';
	private const PRIMARY = '#0071e3';
	private const BACKGROUND = '#f5f5f7';
	private const PRIMARY_TEXT = '#ffffff';

	public function getBaseUrl(): string {
		return '';
	}

	public function getDocBaseUrl(): string {
		return '';
	}

	public function getTitle(): string {
		return self::PRODUCT;
	}

	public function getName(): string {
		return self::PRODUCT;
	}

	public function getHTMLName(): string {
		return self::PRODUCT;
	}

	public function getProductName(): string {
		return self::PRODUCT;
	}

	public function getEntity(): string {
		return self::PRODUCT;
	}

	public function getSlogan(?string $lang = null): string {
		return 'Your files, everywhere you need them.';
	}

	public function getColorPrimary(): string {
		return self::PRIMARY;
	}

	public function getColorBackground(): string {
		return self::BACKGROUND;
	}

	public function getTextColorPrimary(): string {
		return self::PRIMARY_TEXT;
	}

	public function getScssVariables(): array {
		return [
			'color-primary' => self::PRIMARY,
			'color-primary-text' => self::PRIMARY_TEXT,
			'color-main-background' => '#ffffff',
			'color-main-text' => '#1d1d1f',
			'color-text-maxcontrast' => '#86868b',
			'border-radius' => '10px',
			'border-radius-large' => '14px',
			'border-radius-pill' => '980px',
			'default-font-size' => '15px',
		];
	}

	public function getShortFooter(): string {
		return $this->formatFooter();
	}

	public function getLongFooter(): string {
		return $this->formatFooter();
	}

	private function formatFooter(): string {
		return '© ' . date('Y') . ' ' . self::PRODUCT
			. ' · Engineered by ' . self::ENGINEER;
	}

	public function buildDocLinkToKey($key): string {
		return '';
	}

	public function getiTunesAppId(): string {
		return '';
	}

	public function getiOSClientUrl(): string {
		return '';
	}

	public function getAndroidClientUrl(): string {
		return '';
	}

	public function getFDroidClientUrl(): string {
		return '';
	}

	public function getSyncClientUrl(): string {
		return '';
	}
}
