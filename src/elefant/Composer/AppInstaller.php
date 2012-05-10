<?php

namespace elefant\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class AppInstaller extends LibraryInstaller {
	/**
	 * {@inheritDoc}
	 */
	public function getInstallPath (PackageInterface $package) {
		$prefix = substr ($package->getPrettyName (), 0, 12);
		if ('elefant/app-' !== $prefix) {
			throw new \InvalidArgumentException (
				'Unable to install app, Elefant apps should always start their package name with "elefant/app-"'
			);
		}
		
		return 'apps/' . substr ($package->getPrettyName (), 12);
	}

	/**
	 * {@inheritDoc}
	 */
	public function supports ($packageType) {
		return (bool) ('elefant-app' === $packageType);
	}
}

?>