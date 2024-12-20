<?php

namespace Launchpad;

use Launchpad\Dependencies\LaunchpadCore\Container\AbstractServiceProvider;
use Launchpad\LaunchpadUninstaller\Uninstall\HasUninstallerServiceProviderInterface;
use Launchpad\LaunchpadUninstaller\Uninstall\HasUninstallerServiceProviderTrait;

class ServiceProvider extends AbstractServiceProvider implements HasUninstallerServiceProviderInterface {

	use HasUninstallerServiceProviderTrait;

	/**
	 * Define your services.
	 *
	 * @return void
	 */
	protected function define() {
		// Add your services.
		$this->register_uninstaller(Uninstaller::class);
	}
}
